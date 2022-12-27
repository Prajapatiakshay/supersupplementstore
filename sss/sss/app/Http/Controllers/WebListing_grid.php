<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebListing_grid extends Controller
{
    function Listing_grid()
    {
        return view('user.listing_grid');
    }
}
