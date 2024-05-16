<?php

namespace App\Http\Controllers;

use App\Mail\SendMaill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    // $email = Auth::user()->email;
    public function sendMaill()
    {
    $content = ''; // Thay đổi nội dung email theo ý của bạn

    Mail::to('caovu5541@gmail.com')->send(new SendMaill($content));
    }
  


        

    // public function sendMailOdersProduct()
    // {
    //    $user = Auth::user();
    //    $order = $user->oders;
    //    Mail::to($user->email)->send(new SendMaill($order));

    // }


}
