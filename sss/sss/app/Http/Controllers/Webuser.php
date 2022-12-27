<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webuser_model;

class Webuser extends Controller
{

    public function webuserpage()
    {
        $webuser_data = webuser_model::all();
        return view('admin.web.webuser',compact('webuser_data'));
    }
    
}
