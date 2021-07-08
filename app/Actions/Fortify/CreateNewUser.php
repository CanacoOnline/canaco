<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $fechaFin = Carbon::now()->addDays(7)->toDateString();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'ubicacion' => $input['ubicacion'],
            'rol_id' => 2,
            'dias' => $fechaFin,
            'descripcion' => 'Bienvenido a nuestra empresa.',    
            'telefono' => $input['telefono'],
            'nombreUser' => $input['nombreUser'],
            'telUser' => $input['telUser'],
            'password' => Hash::make($input['password']),
        ]);
        return redirect('/');  
    }
}
