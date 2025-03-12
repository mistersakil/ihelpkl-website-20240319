<?php

namespace App\Services;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class ValidationService
{
    public function validationRules(array $componentProps = []): array
    {
        $rules = [
            'name' => ['required', 'min:5', 'max:100'],
            'email' => ['required', 'email', 'min:5', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
            'message' => ['required', 'min:5', 'max:1000'],
            'country_id' => ['required'],
        ];

        if (isset($componentProps['showProductInput']) && $componentProps['showProductInput']) {
            $rules['product_id'] = 'required';
        }

        if (isset($componentProps['showSubjectInput']) && $componentProps['showSubjectInput']) {
            $rules['subject'] = 'required|min:5|max:100';
        }

        if (isset($componentProps['showTermsConditionCheck']) && $componentProps['showTermsConditionCheck']) {
            $rules['termsAccepted'] = 'required|accepted';
        }

        return $rules;
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function validationErrorMessages(): array
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
            'subject.required' => __('can not be empty', [':attribute']),
            'subject.min' => __('minimum character length', [':min', ':attribute']),
            'termsAccepted.accepted' => __('You must accept the terms and conditions.'),
        ];
    }

    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributesSurname(): array
    {
        return [
            'name' => __('name'),
            'email' => __('email'),
            'phone' => __('phone number'),
            'country_id' => __('country'),
            'product_id' => __('product'),
            'message' => __('message'),
            'subject' => __('subject'),
            'termsAccepted' => __('terms and conditions'),
        ];
    }
}
