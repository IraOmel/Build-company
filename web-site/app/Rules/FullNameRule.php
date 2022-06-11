<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FullNameRule implements Rule
{
    
    public function __construct()
    {
        //
    }

   
    public function passes($attribute, $value)
    {
        if (preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $value)
            || preg_match('/^[\p{L}]+(?:\s[\p{L}]+)+$/u', $value)) {
            return true;
        } else {
            return false;
        }
    }

   
    public function message()
    {
        return 'Прізвище та ім\'я написано неправильно';
    }
}
