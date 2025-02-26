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
}
