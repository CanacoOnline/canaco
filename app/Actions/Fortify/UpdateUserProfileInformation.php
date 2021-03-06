<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Facades\Storage;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:10240'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
            Storage::put('public/profile-photos',$input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'ubicacion' => $input['ubicacion'],
                'horario' => $input['horario'],
                'telefono' => $input['telefono'],
                'descripcion' => $input['descripcion'],
                'pagweb' => $input['pagweb'],
                'facebook' => $input['facebook'],
                'whatsapp' => $input['whatsapp'],
                'instagram' => $input['instagram'],
                'twitter' => $input['twitter'],
                
            ])->save();
        }
  
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'ubicacion' => $input['ubicacion'],
            'horario' => $input['horario'],
            'telefono' => $input['telefono'],
            'descripcion' => $input['descripcion'],
            'pagweb' => $input['pagweb'],
            'facebook' => $input['facebook'],
            'instagram' => $input['instagram'],
            'twitter' => $input['twitter'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
