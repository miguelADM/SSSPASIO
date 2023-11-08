<?php
namespace App\Http\Responses;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\LoginResponse as FortifyLoginResponse;
 
class LoginResponse implements FortifyLoginResponse {

    public function toResponse($request)
    {
        return redirect('home');
    }
}
?>