<?php

namespace App\Services;

use App\Models\Country;
use Nnjeim\World\World;

class CountryService
{

  private string $modelClass = Country::class;

  /**
   * Create a new class instance.
   */
  public function getCountries()
  {
    $action =  World::countries(['fields' => 'id, name, phone_code']);
    // $action =  $this->modelClass::find(['fields' => 'id, name, phone_code']);
    // $action =  $this->modelClass::find(['fields' => 'id, name, phone_code']);

    if ($action->success) {
      $countries = $action->data;
    }
    return $countries->toArray() ?? [];
  }
}
