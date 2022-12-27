<?php

namespace App\Http\Controllers;

// use Illuminate\\Session;
use Illuminate\Http\Request;
use App\Models\adminlogin_model;
use Session;


class Adminlogin extends Controller
{
    public function loginpage()
    {
        return view('admin.auth.login');
    }

    public function checkloginpage(Request $request)
    {
        $username = $request->username;
        $password = $request->password ;

        $log_inc = md5($password);

        $result = adminlogin_model::select("*")->where("email",$username)->where("password",$log_inc)->get();

        $login_count = count($result);

        foreach($result as $row){
            $adid = $row->admin_id;
            $neekname = $row->username;
            $neekimg = $row->image;
        }
        

        if($login_count <= 0){
            return redirect('/Login')->with("danger","Email or password is wrong!");
        }else{
            // Session::put("islogin","yes");
            session()->put('islogin', 'yes');
            Session()->put('username',$neekname);
            Session()->put('userimg',$neekimg);
            Session()->put('adminid',$adid);
            // Session()->put('password',$log_inc);
            return redirect('/Dashbord');
        }

    }

    public function Logout()
    {
        session()->flush();
        return redirect('/Login')->with("danger","Logout");
    }

    

    public function Forgetpassword()
    {
        return view('admin.auth.forgotpassword');
    }

    

    public function Checkemail(Request $request)
    {
        $useremail = $request->email;

        $result = adminlogin_model::select("*")->where("email",$useremail)->get();

        $count = count($result);

        if($count > 0){

            foreach($result as $row){
                $password=$row->password;
                $admin_id=$row->admin_id;
                //email

                $details=[
                    "pwd"=>$password,
                    "admin_id"=>$admin_id
                ];

                \Mail::to($useremail)->send(new \App\Mail\forgotpasswordemail($details));

                // \Mail::to($useremail)->send(new \App\Mail\forgotpasswordemail($details));

                //email
            }

            

            return redirect('/Forgetpassword')->with("success","Email-address has been founded, Your old password send to your email-address");
        }else{
            return redirect('/Forgetpassword')->with("danger","Email-address not exist.");
        }


    }

    public function Resetpassword($id)
    {
        $admin_data = adminlogin_model::where("admin_id",$id)->first();
        return view('admin.auth.resetpassword',compact('admin_data'));
    }

    

    public function Checkpassword(Request $request)
    {
        $hidd_id = $request->hidd_id;

        $pass1 = $request->pass1;
        $pass2 = $request->pass2 ;

        if($pass1 == $pass2){

            $inc_pass = md5($pass2);

        $obj = adminlogin_model::where("admin_id",$hidd_id)->first();
        $obj->password = $inc_pass;
        $obj->save();

        return redirect('/Login')->with("success","Your password changed successfully, Please try to login.");

        }else{

        return redirect('/Resetpassword/'. $hidd_id)->with("danger","Please enter same password.");

        }

    }

    // pass1

    //admin profile


    // Adminprofile
    public function Adminprofilepage($id)
    {
        $admin_data = adminlogin_model::where("admin_id",$id)->first();
        return view('admin.auth.adminprofile',compact('admin_data'));
    }


    public function updateadmin(Request $request)
    {
        echo "hello";
        $ad_id = $request->txtid;
        $old_img = $request->txtimage;

        if($request->has("admin_img")){
            unlink(public_path("/upload/admin/").$old_img);
            $ext = $request->admin_img->extension();//jpg
            $filename = time().rand(1111,9999). "." .$ext;
            $request->admin_img->move(public_path("/upload/admin/"),$filename);
        }else{
            $filename = $old_img;
        }

        $username = $request->username; 
        $email = $request->email; 
        $mobile = $request->mobile; 
        // $maincatimg = $filename;
        
        $obj = adminlogin_model::where("admin_id",$ad_id)->first();
        $obj->image = $filename;
        $obj->email = $email;
        $obj->mobile = $mobile;
        $obj->username = $username;
        $obj->save();

        Session()->put('username',$username);
        Session()->put('userimg',$filename);

        return redirect('/Dashbord')->with("success","User information updated successfully.");

    }



    

    
    
}
