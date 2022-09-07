<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class LoginControllers extends Controller
{

    public function userLogin()
    {
        return view('frontend.login.login');
    }
    public function adminLogin()
    {
        return view('backend.pages.login');
    }
    
    public function userLoginPost(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password'); 
        $user = User::where('email', $credentials['email'])->first();
        if($user->role_id == 2){
            if (Auth::attempt($credentials)) {
                return redirect()->intended('user/dashboard')
                            ->withSuccess('Signed in');
            }
            return redirect("login")->withSuccess('Login details are not valid');
        }
        return redirect("login")->withSuccess('You are not Access User Dashboard'); 
    }

    public function adminLoginPost(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password'); 
        $user = User::where('email', $credentials['email'])->first(); 
        if($user->role_id == 1){
            if (Auth::attempt($credentials)) {
                return redirect()->intended('admin/dashboard')
                            ->withSuccess('Signed in');
            }
            return redirect("admin")->withSuccess('Login details are not valid');
        }
        return redirect("admin")->withSuccess('You are not Access Admin Panel');
    }   
    

    public function registration()
    {
        return view('backend.pages.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'number' => 'required',
        ]);
           
        $data = $request->all(); 
        User::create([
            'name' => $data['name'],
            'email' => $data['email'], 
            'password' => Hash::make($data['password']), 
            'number' => $data['number'], 
            'role_id' => $data['role_id'], 
        ]);
        return redirect('admin')->with('success', 'Registration Completed , now You can login');
    }

    public function adminDashboard()
    {
        if(Auth::check())
        {
            return view('backend.dashbord.index');
        }
        return redirect('admin')->with('success', 'you are not Access Admin Panel');
    }

    public function userDashboard()
    {
        if(Auth::check())
        {
            return view('frontend.dashboard.pages.index');
        }

        return redirect('admin')->with('success', 'you are not Access Admin Panel');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}


