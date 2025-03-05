<?php

namespace App\Services;

class ValidationService
{
    public function validationRules(bool $isSometimes = false)
    {
        return [
            'name' => ['required', 'string', 'min:10', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
            'country_id' => ['required']
        ];
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function validationErrorMessages()
    {
        return [
            'name.required' => __('can not be empty', [':attribute']),
            'name.min' => __('minimum character length', [':min', ':attribute']),
            'name.max' => __('maximum character length', [':max', ':attribute']),
            'email.required' => __('can not be empty', [':attribute']),
            'email.email' => __('format is invalid', [':attribute']),
            'name.max' => __('maximum character length', [':max', ':attribute']),
            'phone.required' => __('can not be empty', [':attribute']),
            'phone.regex' => __('format is invalid', [':attribute'])
        ];
    }

    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributesSurname()
    {
        return [
            'name' => __('name'),
            'email' => __('email'),
            'phone' => __('phone number')
        ];
    }
}
