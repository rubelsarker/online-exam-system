<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Exam;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::where('created_by',Auth::user()->id)->get();
        return view('home',compact('exams'));
    }
}
