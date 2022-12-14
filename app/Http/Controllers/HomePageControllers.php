<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageControllers extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function aboutus()
    {
        return view('frontend.home.abouts');
    }
    
    public function contactus()
    {
        return view('frontend.home.contact');
    }
}
