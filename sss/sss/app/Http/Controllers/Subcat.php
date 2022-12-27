<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcat_model;
use App\Models\maincat_model;

class Subcat extends Controller
{
    public function subcatpage()
    {
        $subcat_data = subcat_model::select("*")->leftjoin("tbl_maincat","tbl_subcat.maincat_id","=","tbl_maincat.maincat_id")->get();
        return view('admin.category.subcat',compact('subcat_data'));
    }

    public function subcataddpage()
    {
        
        $maincat_data = maincat_model::all();
        return view('admin.category.subcatadd',compact('maincat_data'));
    }

    public function subcateditpage($id)
    {
        $maincat_data = maincat_model::all();
        $sub_data = subcat_model::where("subcat_id",$id)->first();
        return view('admin.category.subcatedit',compact('maincat_data','sub_data'));
    }   

    public function Insertsubcat(Request $request)
    {
       
        //echo "call";
        $sql=subcat_model::where("subcat_name",$request->subcat_name)->where("maincat_id",$request->maincat_name)->get();

        if(count($sql) <= 0){

        $maincatid = $request->maincat_name;
        $subcatname = $request->subcat_name; 
        
        $obj = new subcat_model();
        $obj->maincat_id = $maincatid;
        $obj->subcat_name = $subcatname;
        $obj->save();

        return redirect('/Subcat')->with("success","Sub-Category added successfully.");;

    }else{
        return redirect('/Subcatadd')->with("danger","Sub-Category is already exists!");;
    }


    }

    

    public function Updatesubcat(Request $request)
    {
        $subcatid = $request->txtcatid;
       
        $maincatid = $request->maincat_name;
        $subcatname = $request->subcat_name; 
        
        $obj = subcat_model::where("subcat_id",$subcatid)->first();
        $obj->maincat_id = $maincatid;
        $obj->subcat_name = $subcatname;
        $obj->save();

        return redirect('/Subcat')->with("success","Sub-Category updated successfully.");;


    }

    public function Deletesubcat(Request $request)
    {
        $del_id = $request->hidd_subid;

        subcat_model::where("subcat_id",$del_id)->delete();
        return redirect('/Subcat')->with("success","Sub-Category deleted successfully.");

    }

    
}
