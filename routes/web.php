<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageControllers;
use App\Http\Controllers\LoginControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin Login And Registration  //
Route::controller(LoginControllers::class)->group(function(){
    Route::get('login', 'userLogin')->name('user.login'); 
    Route::post('user/login', 'userLoginPost')->name('user.login.post'); 
    Route::get('admin', 'adminLogin')->name('admin.login'); 
    Route::post('admin/login', 'adminLoginPost')->name('admin.login.post'); 
    Route::get('registration', 'registration')->name('admin.registration'); 
    Route::post('admin/registration/post', 'customRegistration')->name('admin.registration.post'); 
    Route::get('admin/logout', 'logout')->name('admin.logout'); 
    Route::get('admin/dashboard', 'adminDashboard')->name('admin.dashboard'); 
    Route::get('user/dashboard', 'userDashboard')->name('user.dashboard'); 
});

// Pages //
Route::controller(HomePageControllers::class)->group(function(){
    Route::get('/','index')->name('home.page');
    Route::get('aboutus','aboutus')->name('aboutus');
    Route::get('contactus','contactus')->name('contactus');
});
