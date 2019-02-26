<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function admin_login(){
        return view('admin.admin_login');
    }
    public function dashboard(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result=DB::table('admin')
            ->where('admin_email',$admin_email)
            ->where('admin_password',$admin_password)
            ->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');

        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/admin');
        }

    }

}
