<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.passwords.change');
    }
    public function changePassword(Request $request){
        //return $request->all();
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);
        $password=Auth::user()->password;
        $oldpassword=$request->oldpassword;
        if(Hash::check($oldpassword,$password)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            Session::flash('success', 'Password Change Succedfully !!!!!');
            return Redirect()->route('login');

        }
        else{
            Session::flash('error', 'Old Password does not match  !!!!!');
            return Redirect()->back();
        }

    }
}
