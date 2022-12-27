<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSignin extends Controller
{
    function Signin()
    {
        return view('user.signin');
    }
}
