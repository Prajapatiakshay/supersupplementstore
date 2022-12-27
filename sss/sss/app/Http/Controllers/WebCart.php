<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebCart extends Controller
{
    function Cart()
    {
        return view('user.cart');
    }
}
