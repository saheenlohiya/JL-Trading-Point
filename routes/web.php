<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageControllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomePageControllers::class, 'index'])->name('home.page');
Route::get('user/dashboard', [HomePageControllers::class, 'master'])->name('user.dashboard');
Route::get('aboutus', [HomePageControllers::class, 'aboutus'])->name('aboutus');
