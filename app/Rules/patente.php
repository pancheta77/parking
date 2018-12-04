<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class patente implements Rule
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
        $ok=false;
        if(strlen($value)===6){$ok= preg_match('/[a-z,A-Z]{3}[0-9]{3}/', $value);}
        if(strlen($value)===7){$ok= preg_match('/[a-z,A-Z]{2}[0-9]{3}[a-z,A-Z]{2}/', $value);}
        return  $ok;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'No es una patente válida (ejemplo AA123AA o AAA123).';
    }
}
