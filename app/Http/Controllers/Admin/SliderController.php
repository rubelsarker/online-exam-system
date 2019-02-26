<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class SliderController extends Controller
{
    public function add_slider(){
        return view('admin.add_slider');
    }
    public function save_slider(Request $request)
    {
        $data=array();
        $data['publication_status']=$request->publication_status;
        $image = $request->file('slider_image');
        if ($request->hasFile('slider_image')){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['slider_image']=$image_url;
                DB::table('sliders')->insert($data);
                Session::flash('success', 'Slider Image added succedfully!');
                return back();
            }
        }
    }

    public function slider_index(){
        $all_slider_info = DB::table('sliders')
            ->get();
        $manage_slider= view('admin.slider_index')
            ->with('all_slider_info',$all_slider_info);
        return view('admin.admin_layout')
            ->with('admin.slider_index',$manage_slider);
    }

    public function unactive($id)
    {
        DB::table('sliders')
            ->where('id',$id)
            ->update(['publication_status' => 0]);
        Session::flash('success', 'Update succedfully!');
        return redirect::to(url('/slider-index'));


    }
    public function active($id)
    {
        DB::table('sliders')
            ->where('id',$id)
            ->update(['publication_status' => 1]);
        Session::flash('success', 'Update succedfully!');
        return redirect::to(url('/slider-index'));


    }
    public function delete($id)
    {
        DB::table('sliders')
            ->where('id',$id)
            ->delete();
        Session::flash('success', 'delete succedfully!');
        return redirect::to(url('/slider-index'));
    }
}
