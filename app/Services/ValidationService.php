<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

class ValidationService
{
    /**
     * Validate multiple fields like name, email, and phone using collections.
     *
     * @param array $data
     * @return array
     */
    public function validateFields(array $data): array
    {
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\+?[1-9]\d{1,14}$/',  // A simple phone validation regex
        ];

        $validator = Validator::make($data, $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return [
                'success' => false,
                'errors' => $validator->errors()->toArray(),
            ];
        }

        return ['success' => true];
    }

    /**
     * Validate multiple fields dynamically using collections.
     * This allows for easy rule mapping and can be extended.
     *
     * @param array $data
     * @return array
     */
    public function validateFieldsWithCollection(array $data): array
    {
        // Define fields and their rules in a collection
        $fields = collect([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\+?[1-9]\d{1,14}$/',
        ]);

        // Initialize errors array
        $errors = [];

        // Iterate over each field using collection's map() method
        $fields->each(function ($rule, $field) use ($data, &$errors) {
            $validator = Validator::make($data, [$field => $rule]);

            // If validation fails, add the errors to the errors array
            if ($validator->fails()) {
                $errors[$field] = $validator->errors()->first($field);
            }
        });

        // If there are errors, return them; otherwise, return success
        if (count($errors) > 0) {
            return ['success' => false, 'errors' => $errors];
        }

        return ['success' => true];
    }



    public function validationRules(bool $isSometimes = false)
    {
        return [
            'name' => ['required', 'min:10', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^\+?[1-9]\d{1,14}$/'],
        ];
    }
}
