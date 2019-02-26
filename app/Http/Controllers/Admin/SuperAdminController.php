<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class SuperAdminController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
        return view('admin.admin_dashboard');
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/admin');
    }
    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }
    }
}