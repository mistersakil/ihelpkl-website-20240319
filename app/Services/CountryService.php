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
        $action =  World::countries();

        if ($action->success) {
          $countries = $action->data;
        }        
        return $countries->toArray() ?? [];
        
    }
}
