<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebReview extends Controller
{
    function Review()
    {
        return view('user.review');
    }
}
