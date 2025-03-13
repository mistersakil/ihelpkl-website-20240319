<?php

namespace App\Services;

use App\Models\Country;

class CountryService
{
  private string $modelClass = Country::class;
  public $phoneCode = '';

  /**
   * Get a list of countries with selected fields.
   *
   * @return array
   */
  public function getCountries(): array
  {
    $countries = $this->modelClass::select('id', 'name', 'phone_code')->get();

    return $countries->isNotEmpty() ? $countries->toArray() : [];
  }

  public function getPhoneCode($countryId)
  {
    $country = $this->modelClass::find($countryId);

    return $country ? $country->phone_code : '';
  }

  public function getCountryNameById(int $countryId): ?string
  {
    $country = $this->modelClass::find($countryId);

    return $country ? $country->name : '';
  }
}
