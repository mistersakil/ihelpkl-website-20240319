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
     * Collections of model with search and filter
     * @param array $filterOptions
     * @return mixed
     */
    public function getFilteredModels(array $filterOptions = []): mixed
    {
        @['perPage' => $perPage, 'select' => $select, 'orderBy' => $orderBy, 'orderDirection' => $orderDirection, 'searchText' => $searchText, 'with' => $with] = $filterOptions;

        return $this->modelClass::when(is_array($with) && !empty($with), function ($query) use ($with) {
            return $query->with($with);
        })
            ->when(isset($searchText), function ($query) use ($searchText) {
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
}
