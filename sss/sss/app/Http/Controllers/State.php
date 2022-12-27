<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state_model;
use App\Models\city_model;

class State extends Controller
{
    public function statepage()
    {
        $state_data = state_model::all();
        return view('admin.state.state',compact('state_data'));
    }

    public function stateaddpage()
    {
       
        return view('admin.state.stateadd');
    }

    public function stateeditpage($id)
    {
        $state_data = state_model::where("state_id",$id)->first();
        return view('admin.state.stateedit',compact('state_data'));
    }

    public function Insertstate(Request $request)
    {
       
        $sql=state_model::where("s_name",$request->s_name)->get();

        if(count($sql) <= 0){
        //echo "call";
        $statename = $request->s_name; 
        
        $obj = new state_model();
        $obj->s_name = $statename;
        $obj->save();

        return redirect('/State')->with("success","State added successfully.");

        }else{
            return redirect('/Stateadd')->with("danger","State is already exists!");
        }
    }
    public function Deletestate(Request $request)
    {
        $del_id = $request->state_id;
        // $del_img = $request->b_icon;
        // unlink(public_path("/uploads/state/").$del_img);

        

        city_model::where("state_id",$del_id)->delete();

        state_model::where("state_id",$del_id)->delete();
        return redirect('/State')->with("success","State deleted successfully.");

    }

    public function Updatestate(Request $request)
    {
       
        // $sql=state_model::where("s_name",$request->s_name)->get();

        // if(count($sql) <= 0){
        //echo "call";

        $state_hide = $request->hide_sid; 


        $statename = $request->s_name; 
        
        $obj = state_model::where("state_id",$state_hide)->first();
        $obj->s_name = $statename;
        $obj->save();

        return redirect('/State')->with("success","State update successfully.");

        }
        // else{
        //     return redirect('/Stateadd')->with("danger","State is already exists!");
        // }
        // }

    
    // hide_sid

   
}
