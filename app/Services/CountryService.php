<?php

namespace App\Services;

use Nnjeim\World\World;

class CountryService
{
    /**
     * Create a new class instance.
     */
    public function getCountries()
    {
        $action =  World::countries(['fields' => 'id, name, phone_code']);

        if ($action->success) {
          $countries = $action->data;
        }        
        return $countries->toArray() ?? [];
        
    }
}
