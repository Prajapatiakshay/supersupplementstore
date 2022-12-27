<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebTrackorder extends Controller
{
    function Trackorder()
    {
        return view('user.trackorder');
    }
}
