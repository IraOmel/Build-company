<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FullNameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $value)
            || preg_match('/^[\p{L}]+(?:\s[\p{L}]+)+$/u', $value)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Прізвище та ім\'я написано неправильно';
    }
}
