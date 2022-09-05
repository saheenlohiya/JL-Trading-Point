<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageControllers extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function master()
    {  
        return view('backend.dashbord.index');
    }
}
