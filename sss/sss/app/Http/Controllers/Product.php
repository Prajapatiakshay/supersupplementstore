<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_model;
use App\Models\subcat_model;
use App\Models\brand_model;
use App\Models\variation_model;

class Product extends Controller
{
    public function productpage()
    {
        $pro_data = product_model::select("*")
        ->leftjoin("tbl_subcat","tbl_product.subcat_id","=","tbl_subcat.subcat_id")
        ->leftjoin("tbl_brand","tbl_product.brand_id","=","tbl_brand.brand_id")
        ->get();
        return view('admin.product.product',compact('pro_data'));
    }

    public function productaddpage()
    {
        $subcat_data = subcat_model::all();
        $brand_data = brand_model::all();
        return view('admin.product.productadd',compact('subcat_data','brand_data'));
    }

    public function producteditpage($id)
    {   
        $subcat_data = subcat_model::all();
        $brand_data = brand_model::all();
        $pro_data = product_model::where("pro_id",$id)->first();
        return view('admin.product.productedit',compact('pro_data','subcat_data','brand_data'));
    }

    public function Insertproduct(Request $request)
    {
       
        

        // echo "call";
        $pro_name = $request->pro_name;
        $subcat_id = $request->subcat_id; 
        $pro_desc = $request->pro_desc; 
        $pro_img = $request->pro_img; 
        $brand_id = $request->brand_id;
        $pro_spec = "";
        $pro_active = "Active";


        $ext = $request->pro_img->extension();//jpg
        $filename = time().rand(1111,9999). "." .$ext;
        $request->pro_img->move(public_path("/upload/product/"),$filename);
        
        $obj = new product_model();
        $obj->subcat_id = $subcat_id;
        $obj->p_name = $pro_name;
        $obj->p_desc = $pro_desc;
        $obj->p_image = $filename;
        $obj->brand_id = $brand_id;
        $obj->p_speci = $pro_spec;
        $obj->isactive = $pro_active;
        $obj->save();


        return redirect('/Product')->with("success","Product added successfully.");
        // return redirect('/Variationadd?id=')->$last;

    }

    

    public function Updateproduct(Request $request)
    {
       
        $pro_id = $request->txtproid;
        $old_img = $request->txtoldimage;


        $pro_name = $request->pro_name;
        $subcat_id = $request->subcat_id; 
        $pro_desc = $request->pro_desc; 
        $pro_img = $request->pro_img; 
        $brand_id = $request->brand_id;
        $pro_spec = "";
        $pro_active = "Active";



        if($request->has("pro_img")){
            unlink(public_path("/upload/product/").$old_img);
            $ext = $request->pro_img->extension();//jpg
            $filename = time().rand(1111,9999). "." .$ext;
            $request->pro_img->move(public_path("/upload/product/"),$filename);
        }else{
            $filename = $old_img;
        }

        // echo "call";
       


        // $ext = $request->pro_img->extension();//jpg
        // $filename = time().rand(1111,9999). "." .$ext;
        // $request->pro_img->move(public_path("/upload/product/"),$filename);
        
        $obj = product_model::where("pro_id",$pro_id)->first();
        $obj->subcat_id = $subcat_id;
        $obj->p_name = $pro_name;
        $obj->p_desc = $pro_desc;
        $obj->p_image = $filename;
        $obj->brand_id = $brand_id;
        $obj->p_speci = $pro_spec;
        $obj->isactive = $pro_active;
        $obj->save();


        return redirect('/Product')->with("success","Product update successfully.");
        // return redirect('/Variationadd?id=')->$last;

    }


    //variation

    public function productveriationpage()
    {
       $var_data = variation_model::select("*")->leftjoin("tbl_product","tbl_variation.pro_id","=","tbl_product.pro_id")->get();
        return view('admin.product.variation',compact('var_data'));
    }

    public function Variationaddpage()
    {
        $pro_data = product_model::all();
        $brand_data = brand_model::all();
        return view('admin.product.variationadd',compact('pro_data','brand_data'));
    }

    

    public function veriationeditpage($id)
    {
        $pro_data = product_model::all();
        $brand_data = brand_model::all();
        $var_data = variation_model::where("var_id",$id)->first();
        return view('admin.product.variationedit',compact('pro_data','brand_data','var_data'));
    }



    public function Insertveriation(Request $request)
    {
       
        // echo "call";
        $pro_id = $request->pro_name;
        $pro_flover = $request->pro_flover; 
        $pro_gram = $request->pro_gram; 
        $pro_mrp = $request->pro_mrp; 
        $pro_price = $request->pro_price;
        // $var_pro_img = $request->pro_img;
        $var_pro_img = "";
        $tot_qty = $request->tot_qty;

        // foreach($pro_gram as $gm){
                   
        
        $obj = new variation_model();
        $obj->pro_id = $pro_id;
        $obj->flavor = $pro_flover;
        $obj->gram = $pro_gram;
        $obj->mrp = $pro_mrp;
        $obj->s_price = $pro_price;
        $obj->pro_img = $var_pro_img;
        $obj->tot_qty = $tot_qty;
        $obj->save();

        // }

        return redirect('/Variationadd')->with("success","Product added successfully.");

    }    

    public function Updateveriation(Request $request)
    {

        $var_id = $request->txtvarid;
       
        // echo "call";
        $pro_id = $request->pro_name;
        $pro_flover = $request->pro_flover; 
        $pro_gram = $request->pro_gram; 
        $pro_mrp = $request->pro_mrp; 
        $pro_price = $request->pro_price;
        // $var_pro_img = $request->pro_img;
        $var_pro_img = "r";
        $tot_qty = $request->tot_qty;

        // foreach($pro_gram as $gm){
                   
        
        $obj = variation_model::where("var_id",$var_id)->first();
        $obj->pro_id = $pro_id;
        $obj->flavor = $pro_flover;
        $obj->gram = $pro_gram;
        $obj->mrp = $pro_mrp;
        $obj->s_price = $pro_price;
        $obj->pro_img = $var_pro_img;
        $obj->tot_qty = $tot_qty;
        $obj->save();

        // }

        return redirect('/Variation')->with("success","Product update successfully.");

    } 


    public function Deleteproduct(Request $request)
    {
        $del_id = $request->hidd_proid;
        $del_img = $request->hidd_proimg;

        unlink(public_path("/upload/product/").$del_img);
        product_model::where("pro_id",$del_id)->delete();
        // product_model::where("subcat_id",)

        return redirect('/Product')->with("success","Product deleted successfully.");

    }

    public function Deletevariation(Request $request)
    {
        $var_id = $request->hidd_varid;

        variation_model::where("var_id",$var_id)->delete();
        // product_model::where("subcat_id",)

        return redirect('/Variation')->with("success","Product-Variation deleted successfully.");

    }

    
// product view

public function productviewpage($id)
{
    $pro_data = product_model::select("*")
        ->leftjoin("tbl_subcat","tbl_product.subcat_id","=","tbl_subcat.subcat_id")
        ->leftjoin("tbl_brand","tbl_product.brand_id","=","tbl_brand.brand_id")
        // ->leftjoin("tbl_variation","tbl_product.pro_id","=","tbl_variation.pro_id")
        ->where ("pro_id",$id)
        ->first();
    $var_data = variation_model::where("pro_id",$id)->get();
    return view('admin.product.productview',compact('pro_data','var_data'));
}


}
