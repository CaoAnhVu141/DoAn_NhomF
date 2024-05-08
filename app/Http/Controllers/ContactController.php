<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function showIndexContact()
    {
        return view('contact.index');
    }
}
