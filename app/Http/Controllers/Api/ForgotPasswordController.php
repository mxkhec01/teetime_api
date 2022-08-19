<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function forgot() {
        $credentials = request()->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            request(['email'])
        );

        return $status == Password::RESET_LINK_SENT
            ? response()->json(["msg" => 'Reset password link sent on your email id.'])
            : response()->json(["msg" => 'Error al enviar el correo.'])
                ;

    }
}
