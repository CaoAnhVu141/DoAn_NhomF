<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    //
    public function showForgotPass()
    {
        return view('forgetpass.forget');
    }


    ///

        public function sendResetLinkEmail(Request $request)
        {
            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink(
                $request->only('email')
            );
            return $status == Password::RESET_LINK_SENT
                ? redirect()->route('checkmail')->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
        }

        public function showNotificationEmail()
        {
            return view('forgetpass.checkmail');
        }
}
