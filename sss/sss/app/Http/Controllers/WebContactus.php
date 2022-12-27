<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebContactus extends Controller
{
    function Contactus()
    {
        return view('user.contactus');
    }
}
