<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maincat_model;
use App\Models\subcat_model;
use App\Models\product_model;
use App\Models\variation_model;

class Maincat extends Controller
{
    public function maincatpage()
    {
       $maincat_data = maincat_model::all();
        return view('admin.category.maincat',compact('maincat_data'));
    }

    public function maincataddpage()
    {
       
        return view('admin.category.maincatadd');
    }

    // public function maincateditpage()
    // {
    //     // $main_edit_data = maincat_model::where("maincat_id",$id)->first;
    //     return view('admin.category.maincatedit');
    // }

    public function maincateditpage($maincatid)
    {
        // echo $maincatid;
        $main_data = maincat_model::where("maincat_id",$maincatid)->first();         
        // $main_edit_data = maincat_model::find($pid)->get();         
        return view('admin.category.maincatedit',compact('main_data'));
    }

  

    

    public function Insertmaincat(Request $request)
    {

        //image upload

        $sql=maincat_model::where("cat_name",$request->maincat_name)->get();

        if(count($sql) <= 0){

        $ext = $request->maincat_img->extension();//jpg
        $filename = time().rand(1111,9999). "." .$ext;
        $request->maincat_img->move(public_path("/upload/category/"),$filename);
       
        //echo "call";
        $maincatname = $request->maincat_name; 
        $maincatimg = $filename;
        
        $obj = new maincat_model();
        $obj->cat_name = $maincatname;
        $obj->cat_img = $maincatimg;
        $obj->save();

        return redirect('/Maincat')->with("success","Main-Category added successfully.");

        }else{
            return redirect('/Maincatadd')->with("danger","Main-Category is already exists!");
        }



    }

    public function Updatemaincat(Request $request)
    {
        
        // $sql=maincat_model::where("cat_name",$request->maincat_name)->get();
        //echo "call";
        $cat_id = $request->txtcatid;
        $old_img = $request->txtoldimage;
        

        if($request->has("maincat_img")){
            unlink(public_path("/upload/category/").$old_img);
            $ext = $request->maincat_img->extension();//jpg
            $filename = time().rand(1111,9999). "." .$ext;
            $request->maincat_img->move(public_path("/upload/category/"),$filename);
        }else{
            $filename = $old_img;
        }

        $maincatname = $request->maincat_name; 
        $maincatimg = $filename;
        
        $obj =  maincat_model::where("maincat_id",$cat_id)->first();
        $obj->cat_name = $maincatname;
        $obj->cat_img = $maincatimg;
        $obj->save();

            return redirect('/Maincat')->with("success","Main-Category updated successfully.");

        

    }

    public function Deletemaincat(Request $request)
    {
        $del_id = $request->hidd_mainid;
        $del_img = $request->hidd_mainimg;

        

        $sub_data = subcat_model::select("*")->where("maincat_id",$del_id);
        foreach($sub_data as $row)
        {

            $pro_data = product_model::select("*")->where("subcat_id",$row->subcat_id);
            foreach($pro_data as $row)
            {
                variation_model::where("pro_id",$row->pro_id)->delete();
            }

            product_model::where("subcat_id",$row->subcat_id)->delete();
        }
        

        subcat_model::where("maincat_id",$del_id)->delete();

        unlink(public_path("/upload/category/").$del_img);
        maincat_model::where("maincat_id",$del_id)->delete();
       

        // product_model::where("subcat_id",)

        return redirect('/Maincat')->with("success","Main-Category deleted successfully.");

    }

    

    
}
