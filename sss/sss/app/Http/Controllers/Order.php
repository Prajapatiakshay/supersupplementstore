<?php

namespace App\Http\Controllers;
use App\Models\order_model;


use Illuminate\Http\Request;

class Order extends Controller
{
    public function orderpage()
    {
        $order_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->get();
        return view('admin.order.order',compact('order_data'));
    }

    public function pandingorderpage()
    {
        // $pending_ord_data = order_model::where("ord_statues","pending")->get();
        $pending_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","pending")->get();
        $processing_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","processing")->get();
        $completed_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","completed")->get();

        return view('admin.order.pandingorder',compact('pending_ord_data','processing_ord_data','completed_ord_data'));
    }

    public function processingorderpage()
    {
        $pending_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","pending")->get();
        $processing_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","processing")->get();
        $completed_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","completed")->get();
        return view('admin.order.processingorder',compact('pending_ord_data','processing_ord_data','completed_ord_data'));
    }

    public function completedorderpage()
    {
        $pending_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","pending")->get();
        $processing_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","processing")->get();
        $completed_ord_data = order_model::select("*")->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")->where("ord_statues","completed")->get();

        // $all_ord_data = order_model::select("*")
        // ->leftjoin("tbl_order_item","tbl_order.ord_id","=","tbl_order_item.ord_id")
        // ->leftjoin("tbl_user","tbl_order.user_id","=","tbl_user.user_id")
        // // ->leftjoin("tbl_order_item","tbl_order_item.pro_id","=","tbl_product.pro_id")
        // ->get();

        return view('admin.order.completedorder',compact('pending_ord_data','processing_ord_data','completed_ord_data'));
    }

//panding order transfer to proccessing order

    public function pending_to_processing($orderid)
    {
        $data = $orderid;
        $status = "Processing";

        $obj = order_model::where("ord_id",$data)->first();
        $obj->ord_statues = $status;
        $obj->save();

        return redirect('/Pandingorder')->with("success","successfully Pending Order will be moved to Processing Order.");

    }

    //proccessing order transfer to complated order

    public function processing_to_complated($orderid)
    {
        $data = $orderid;
        $status = "completed";

        $obj = order_model::where("ord_id",$data)->first();
        $obj->ord_statues = $status;
        $obj->save();

        return redirect('/Processingorder')->with("success","successfully Processing Order Order will be moved to Complated Order.");

    }

    
    public function orderviewpage($id)
    {
        $ord_data = order_model::where("ord_id",$id)->first();
        return view('admin.order.orderview',compact('ord_data'));
    }
    

    
}
