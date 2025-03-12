<?php

namespace App\Services;

use Exception;
use App\Models\Lead;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LeadService
{
    private string $modelClass = Lead::class;


    /**
     * Get model details by ID
     */
    public function getModelById(int $id)
    {
        return $this->modelClass::find($id);
    }


    public function getAll()
    {
        return $this->modelClass::all();
    }


    /**
     *  Method to get the previous record
     */
    public function previousModel($orderNo)
    {
        return $this->modelClass::where('order', '<', $orderNo)->orderBy('order', 'desc')->first();
    }


    /*
     *  Method to get the next record
     */
    public function nextModel($orderNo)
    {
        return $this->modelClass::where('order', '>', $orderNo)->orderBy('order', 'asc')->first();
    }


    /*
     * Swapping two model order
     * @return bool
     */
    public function swapOrder(int $modelId, string $type): bool
    {
        $targetedModel = $this->getModelById($modelId);
        $targetedModelOrder = $targetedModel->order;
        if ($type === 'UP') {
            $previousModel = $this->previousModel($targetedModel->order);
            $targetedModel->order = $previousModel->order;
            $targetedModel->save();

            ## Update previous model order
            $previousModel->order = $targetedModelOrder;
            $previousModel->save();
            return true;
        } else if ($type === 'DOWN') {
            $nextModel = $this->nextModel($targetedModel->order);
            $targetedModel->order = $nextModel->order;
            $targetedModel->save();

            ## Update next model order
            $nextModel->order = $targetedModelOrder;
            $nextModel->save();

            return true;
        }
        return false;
    }

    /**
     * Collections of model with search and filter
     * @param array $filterOptions
     * @return mixed
     */
    public function getFilteredModels(array $filterOptions = []): mixed
    {
        @['perPage' => $perPage, 'select' => $select, 'orderBy' => $orderBy, 'orderDirection' => $orderDirection, 'searchText' => $searchText] = $filterOptions;

        return $this->modelClass::when(isset($searchText), function ($query) use ($searchText) {
            $searchText = "%$searchText%";
            return $query->where('name', 'like', $searchText)
                ->orWhere('email', 'like', $searchText)
                ->orWhere('country_id', 'like', $searchText)
                ->orWhere('mobile_number', 'like', $searchText)
                ->orWhere('message', 'like', $searchText);
        })
            ->when(isset($select), function ($query) use ($select) {
                return $query->select($select);
            })
            ->when(isset($orderBy) && isset($orderDirection), function ($query) use ($orderBy, $orderDirection) {
                return $query->orderBy($orderBy, $orderDirection);
            }, function ($query) {
                return $query->orderBy('id', 'asc');
            })
            ->when(isset($perPage), function ($query) use ($perPage) {
                return $query->paginate($perPage);
            }, function ($query) {
                return $query->paginate(10);
            });
    }



    /**
     * Count all records from table
     * @return int
     */
    public function countAllModel()
    {
        $count = $this->modelClass::count();
        return $count;
    }


    /**
     * Get a single model based on order direction
     * @param string $orderDirection [asc || desc]
     * @return \App\Models\Slider
     */
    public function getOnlyModelByOrderDirection(string $orderDirection = 'asc'): mixed
    {
        return $this->modelClass::orderBy('id', $orderDirection)->first();
    }


    /**
     * To generate last order number when to insert new model
     * @return int
     */
    public function generateLastOrderNo()
    {
        $lastModelBasedOnOrderAttribute = $this->getOnlyModelByOrderDirection('desc');
        return $lastModelBasedOnOrderAttribute ? $lastModelBasedOnOrderAttribute->order + 1 : 1;
    }
}
