<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class daysValidate implements Rule
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
         return is_numeric($value==4 || $value== 6 || $value == 9);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute should 4 ,6 or 9 ';
    }
}
