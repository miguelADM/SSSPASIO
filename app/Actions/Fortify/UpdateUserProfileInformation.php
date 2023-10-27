<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use App\Enfermedad;
use App\Models\GrupoTrabajo;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Str as Str;
use Redirect,Response;
use UsersExport;


class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(Request $request, $slug)
{
    $request->validate([
        'nombre' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'pass' => ['nullable', new Password],
        'grupo' => ['required'],
        'enf' => ['required'],
        'observaciones' => ['required'],
        'membresia' => ['required'],
        'tel' => ['required'],
        'periodo' => ['required'],
        'rutina' => ['required'],
        'sexo' => ['required'],
    ]);

    $user = User::where('slug', $slug)->firstOrFail();

    $user->name = $request->nombre;
    $user->email = $request->email;

    if ($request->pass) {
        $user->password = Hash::make($request->pass);
    }

    $user->grupo_id = $request->grupo;
    $user->enfermedad_id = $request->enf;
    $user->slug = Str::slug($user->name . time());

    // Actualización de la fecha de vencimiento
    $user->expired_at = $this->calculateExpirationDate($request->periodo);

    $user->save();

    $perfil = Perfil::where('user_id', $user->id)->firstOrFail();
    $perfil->observaciones = $request->observaciones;
    $perfil->tipo_membresia = $request->membresia;
    $perfil->numero = $request->tel;
    $perfil->periodo = $request->periodo;
    $perfil->rutina = $request->rutina;
    $perfil->sexo = $request->sexo;
    $perfil->save();

    alert()->success('SPAsssio', 'Usuario editado correctamente');
    return redirect()->route('users.index');
}


    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
