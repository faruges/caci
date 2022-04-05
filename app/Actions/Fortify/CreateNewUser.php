<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Inertia\Inertia;
use App\Http\Controllers\RfcController;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */

    public static function validateEmail($email)
    {

        return (boolean)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function validateRfc(){

    }

    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'rfc' => ['required', 'string'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();


        if ($this->validateEmail($input['email'])) {

            return User::create(
                ['name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ]);
//            echo $input['email'];

        } else {
            echo 'su correo electronico no es valido';


        }


    }
}
