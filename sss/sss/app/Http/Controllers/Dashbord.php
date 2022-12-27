<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_model;
use App\Models\product_model;
use App\Models\webuser_model;
use App\Models\adminlogin_model;
use Session;
// use App\Models\adminlogin_model;

class Dashbord extends Controller
{
    public function dashbord()
    {
        $order_data = order_model::all();
        $pending_data = order_model::select("*")->where("ord_statues","pending")->get();
        $product_data = product_model::all();
        $webuser_data = webuser_model::all();
        // $admin_data = adminlogin_model::all();
        // $admin_data = adminlogin_model::all();
        return view('admin.auth.dashbord',compact('order_data','product_data','webuser_data','pending_data'));
    }
}
