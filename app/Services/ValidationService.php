<?php

namespace App\Services;

class ValidationService
{
    public function validationRules(bool $isSometimes = false)
    {
        return [
            'name' => ['required', 'min:5', 'max:100'],
            'email' => ['required', 'email', 'min:5', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
            'message' => ['required', 'min:5', 'max:1000'],
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
            'message.required' => __('can not be empty', [':attribute']),
            'message.min' => __('minimum character length', [':min', ':attribute']),
            'message.max' => __('maximum character length', [':max', ':attribute']),
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
            'phone' => __('phone number'),
            'country_id' => __('country'),
            'product_id' => __('product'),
            'message' => __('message'),
        ];
    }


    public function stateValues()
    {
        return [
            'name' => '',
            'email' => '',
            'phone' => '',
            'country_id' => '',
            'product_id' => '',
            'phoneCode' => '',
            'message' => '',
            'subject' => '',
        ];
    }
}
