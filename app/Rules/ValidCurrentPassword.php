<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Hash;
use Auth;

class ValidCurrentPassword implements Rule
{
    public function passes($attribute, $value)
    {
        if (!Hash::check($value, Auth::user()->password)) {
            return false;
        }

        return $value;
    }

    public function message()
    {
        return __('validation.custom.password_new.invalid');
    }
}
