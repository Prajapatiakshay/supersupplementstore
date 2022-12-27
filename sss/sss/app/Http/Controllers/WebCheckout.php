<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebCheckout extends Controller
{
    function Checkout()
    {
        return view('user.checkout');
    }

    //Confirm Order

    function Confirmorder()
    {
        return view('user.Confirmorder');
    }
}
