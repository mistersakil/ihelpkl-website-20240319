<?php

namespace App\Services;

class ValidationService
{
    public function validationRules(bool $isSometimes = false)
    {
        return [
            'name' => ['required', 'string', 'min:5', 'max:100'],
            'email' => ['required', 'email', 'min:5', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
            'message' => ['required', 'string', 'min:5', 'max:1000'],
            'country_id' => ['required'],
            'product_id' =>  ['required'],
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
            'phone.required' => __('can not be empty', [':attribute']),
            'phone.regex' => __('format is invalid', [':attribute']),
            'country_id.required' => __('can not be empty', [':attribute']),
            'product_id.required' => __('can not be empty', [':attribute']),
            'message.min' => __('minimum character length', [':min', ':attribute']),
        ];
    }

    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributesSurname()
    {
        return [
            'name' => __('Name'),
            'email' => __('email'),
            'phone' => __('phone number'),
            'country_id' => __('Country'),
            'product_id' => __('Product'),
            'message' => __('Message'),
        ];
    }
}
