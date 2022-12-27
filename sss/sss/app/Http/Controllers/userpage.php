<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userpage extends Controller
{
    function index()
    {
        return view('user.index');
    }
}
