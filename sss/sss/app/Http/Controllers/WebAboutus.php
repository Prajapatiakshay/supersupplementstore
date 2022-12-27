<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebAboutus extends Controller
{
    function Aboutus()
    {
        return view('user.aboutus');
    }
}
