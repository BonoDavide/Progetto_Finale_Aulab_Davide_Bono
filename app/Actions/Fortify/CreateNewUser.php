<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    
    /**
    * Validate and create a newly registered user.
    *
    * @param  array<string, string>  $input
    */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            [
                'name.required' => 'Inserisci il nome',
                'email.required' => 'Inserisci l\' email',
                'email.unique' => 'L\' email è già registrata',
                'email.email' => 'L \'email deve essere valida',
                'password.required' => 'Inserisci la password',
                'password.confirmed' => 'Le password non corrispondono',
            
            ]
        ])->validate();
                
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

                