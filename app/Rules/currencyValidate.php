<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class currencyValidate implements Rule
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
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        return (is_numeric($value) && $value == 1200 || $value <=5000) ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute should range between 12000 and 5000.';
    }
}
