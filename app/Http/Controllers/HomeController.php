<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function procurement()
    {
        //dd(auth()->user());
        return view('pages.newdashboard');
    }

    public function superadmin()
    {
        //dd(auth()->user());
        return view('pages.admin');
    }
}
