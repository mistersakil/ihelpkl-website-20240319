<?php

// namespace App\Services;

// use App\Models\Country;
// use Nnjeim\World\World;

// class CountryService
// {

//   private string $modelClass = Country::class;

//   /**
//    * Create a new class instance.
//    */
//   public function getCountries()
//   {
//     // $action =  World::countries(['fields' => 'id, name, phone_code']);
//     $action =  $this->modelClass::find(['fields' => 'id, name, phone_code']);
//     // $action =  $this->modelClass::find(['fields' => 'id, name, phone_code']);

//     if ($action->success) {
//       $countries = $action->data;
//     }
//     return $countries->toArray() ?? [];
//   }
// }



namespace App\Services;

use App\Models\Country;

class CountryService
{
  private string $modelClass = Country::class;

  /**
   * Get a list of countries with selected fields.
   *
   * @return array
   */
  public function getCountries(): array
  {
    // Retrieve countries with the specified fields (id, name, phone_code)
    $countries = $this->modelClass::select('id', 'name', 'phone_code')->get();

    // Check if we retrieved any countries and return them as an array
    return $countries->isNotEmpty() ? $countries->toArray() : [];
  }
}
