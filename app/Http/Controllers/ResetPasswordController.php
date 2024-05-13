<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    //

    // public function showResetPassword()
    // {
    //     return view('forgetpass.importpass');
    // }

    public function showResetForm(Request $request, $token)
{
    return view('forgetpass.importpass')->with(
        ['token' => $token, 'email' => $request->email]
    );
}


    /**
     * Xử lý việc đặt lại mật khẩu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                Auth::login($user);
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('showlogin')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
