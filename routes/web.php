<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\usercontroller;
use App\Http\controllers\productcontroller;


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

Route::get('/login', function () {
    return view('login');
});
Route::Post("/login",[usercontroller::class,'login']);
Route::get("/",[productcontroller::class,'index']);
