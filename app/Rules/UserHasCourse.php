<?php

namespace App\Rules;

use App\Models\UserProgress;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserHasCourse implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user_id = Auth::user()->id;

        return \App\Utils\Checkers\UserHasCourse::UserHasCourse($user_id, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('vars.user_already_has_course');
    }
}
