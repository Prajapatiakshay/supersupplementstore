<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand_model;


class Brand extends Controller
{
    public function brandpage()
    {
        $brand_data = brand_model::all();
        return view('admin.brand.brand',compact('brand_data'));
    }

    public function brandaddpage()
    {
       
        return view('admin.brand.brandadd');
    }

   
    public function Insertbrand(Request $request)
    {
             //image upload
            //abc.jpg
            
            $sql=brand_model::where("b_name",$request->b_name)->get();

            if(count($sql) <= 0){

            $ext = $request->b_icon->extension();//jpg
            $filename = time().rand(1111,9999).".".$ext;//5313548614512.jpg
            $request->b_icon->move(public_path("/uploads/brand/"),$filename);


                //echo "call";
                $brandname = $request->b_name; 
                $brandimg = $filename;
                
                $obj = new brand_model();
                $obj->b_name = $brandname;
                $obj->b_icon = $brandimg;
                $obj->save();

                return redirect('/Brand')->with("success","Brand added successfully.");
            }else{
                return redirect('/Brandadd')->with("danger","Brand is already exists!");
            }
    }
    public function brandeditpage($id)
    {
    
            
        $singledata =  brand_model::where("brand_id",$id)->first(); 
        return view('admin.brand.brandedit',compact('singledata'));
    }


    public function brandupdate(Request $request){
             //image upload
            //abc.jpg

            // $sql=brand_model::where("b_name",$request->b_name)->get();
            $bname= $request->old_b_name;
            $bicon = $request->old_b_icon;
        

            // $ext = $request->b_icon->extension();//jpg
            // $filename = time().rand(1111,9999).".".$ext;//5313548614512.jpg
            // $request->b_icon->move(public_path("/uploads/brand/"),$filename);

            if($request->has("b_icon")){
                unlink(public_path("/uploads/brand/").$bicon);
                $ext = $request->b_icon->extension();//jpg
                $filename = time().rand(1111,9999).".".$ext;//5313548614512.jpg
                $request->b_icon->move(public_path("/uploads/brand/"),$filename);
            }
            else{
                $filename = $bicon;
            }

                //echo "call";
                $brandname = $request->b_name; 
                $brandimg = $filename;
                
                $obj = brand_model::where("brand_id",$bname)->first();
                $obj->b_name = $brandname;
                $obj->b_icon = $brandimg;
                $obj->save();

                return redirect('/Brand')->with("success","Brand update successfully.");
    }

    public function Deletebrand(Request $request)
    {
        $del_id = $request->brand_id;
        $del_img = $request->b_icon;
        unlink(public_path("/uploads/brand/").$del_img);


        brand_model::where("brand_id",$del_id)->delete();
        return redirect('/Brand')->with("success","Brand deleted successfully.");

    }   
    // public function Brandedit($id)
    // {
    //     $singledata =  Brand::where("brand_id",$id)->first(); 
    //     // return view('admin.brand.brandedit');
    // }
}
