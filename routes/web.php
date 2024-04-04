<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\PageControl;
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
// Route::get("/",function(){
//     return view("index");
// });

//Route::get("/{name?}",function($name = "index"){
//    return view(@$name);
//})->name('page');

// Route::get("crud", function(){
//     return view('crud');
// });
// // Route::get("/login",function(){
//     return view("login");
// });

Route::get("/{name?}",[PageControl::class,'page'])->name('page');
//Route::get("/{name?}",[PageControl::class,'hienthidanhmuc'])->name('page');