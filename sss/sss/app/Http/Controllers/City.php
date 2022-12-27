<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city_model;
use App\Models\state_model;

class City extends Controller
{
    public function citypage()
    {
        $city_data = city_model::select("*")->leftjoin("tbl_state","tbl_city.state_id","=","tbl_state.state_id")->get();
        return view('admin.city.city',compact('city_data'));
    }

    public function cityaddpage()
    {
        $state_data=state_model::all();
        return view('admin.city.cityadd',compact('state_data'));
    }

    public function cityeditpage($id)
    {
        $state_data=state_model::all();
        $city_data = city_model::where("city_id",$id)->first();
        return view('admin.city.cityedit',compact('city_data','state_data'));
    }

    public function Insertcity(Request $request)
    {
       
        //echo "call";

        $sql=city_model::where("c_name",$request->c_name)->where("state_id",$request->state_id)->get();

        if(count($sql) <= 0){

        $cityname = $request->c_name; 
        $statename = $request->state_id;
        
        $obj = new city_model();
        $obj->c_name = $cityname;
        $obj->state_id = $statename;
        $obj->save();

        return redirect('/City')->with("success","City added successfully.");;

    }else{
        return redirect('/Cityadd')->with("danger","City is already exists!");;
    }
    }

    // 

    public function Updatecity(Request $request)
    {
       
        //echo "call";

        // $sql=city_model::where("c_name",$request->c_name)->where("state_id",$request->state_id)->get();

        // if(count($sql) <= 0){

        $hidd_city = $request->hidd_city; 

        $cityname = $request->c_name; 
        $statename = $request->state_id;
        
        $obj = city_model::where("city_id",$hidd_city)->first();
        $obj->c_name = $cityname;
        $obj->state_id = $statename;
        $obj->save();

        return redirect('/City')->with("success","City update successfully.");;

    }
    // else{
    //     return redirect('/Cityadd')->with("danger","City is already exists!");;
    // }
    // }

    public function Deletecity(Request $request)
    {
        $del_id = $request->city_id;
        $del_img = $request->b_icon;
        // unlink(public_path("/uploads/state/").$del_img);


        city_model::where("city_id",$del_id)->delete();
        return redirect('/City')->with("success","City deleted successfully.");

    }
}
