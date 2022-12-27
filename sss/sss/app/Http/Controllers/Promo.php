<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promo_model;

class Promo extends Controller
{
    public function promopage()
    {
       $promo_data = promo_model::all();
        return view('admin.promo.promo',compact('promo_data'));
    }

    public function promoaddpage()
    {
       
        return view('admin.promo.promoadd');
    }

    public function promoeditpage($id)
    {
        $promo_data = promo_model::where("promo_id",$id)->first();
        return view('admin.promo.promoedit',compact('promo_data'));
    }
    public function Promocodeinsert(Request $request)
    {

        $sql=promo_model::where("p_code",$request->promocode)->get();

        if(count($sql) <= 0){
            $promocode=$request->promocode;
            $pdisc=$request->disc;
            $prodico=$request->prodisc;

            $obj=new promo_model();
            $obj->p_code = $promocode;
            $obj->p_desc = $pdisc;
            $obj->p_discount = $prodico;
            $obj->save();

            return redirect('/Promocode')->with("success","Promo-Code added successfully.");

        }else{
            return redirect('/Promocodeadd')->with("danger","Promo-Code is already exists!");
        }
    }

    // 

    public function Promocodeupdate(Request $request)
        {
            $hidd_pid=$request->hidd_pid;

            $promocode=$request->promocode;
            $pdesc=$request->promo_desc;
            $prodisc=$request->promo_disc;

            // echo $prodisc;

            $obj= promo_model::where("promo_id",$hidd_pid)->first();
            $obj->p_code = $promocode;
            $obj->p_desc = $pdesc;
            // $obj->p_discount = $prodisc;
            $obj->save();

            return redirect('/Promocode')->with("success","Promo-Code update successfully.");

        }

    public function Deletepromocode(Request $request)
    {
        $del_id = $request->hidd_promoid;

        promo_model::where("promo_id",$del_id)->delete();
        return redirect('/Promocode')->with("success","Promo-Code deleted successfully.");

    }


}
