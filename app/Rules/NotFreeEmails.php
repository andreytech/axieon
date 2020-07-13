<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotFreeEmails implements Rule
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
        $free_emails = [
            '@gmail.com',
            '@hotmail.com',
            '@outlook.com',
            '@yahoo.com',
            '@aim.com',
            '@yandex.com',
            '@protonmail.com',
            '@zohomail.com',
            '@gmx.com',
            '@mail.com',
            '@icloud.com',
        ];
        foreach ($free_emails as $free_domain) {
            if (stripos($value, $free_domain) !== FALSE) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please use yor work email.';
    }
}
