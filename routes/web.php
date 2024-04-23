<?php

use App\Http\Controllers\admin\AdminPageController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UploadController;
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

//route cho web nguoi dung
Route::get("/{page?}", [PageControl::class, 'showPage'])->name('show.page');
//route cho trang admin
// Route::get("/admin/{page?}", [AdminPageController::class, 'showPageAdmin'])->name('show.pageAdmin');
Route::get('/admin/index',function () {
    return view('admin.index');
});

//route product
Route::post('/admin/product/add', [ProductController::class, 'insertProduct'])->name('insertProduct');
Route::get('/admin/product/create', [ProductController::class, 'addProduct']);
Route::get('/admin/product/list', [ProductController::class, 'listProduct']);



// route lấy đường dẫn hình
Route::post('/upload', [UploadController::class, 'uploadImage']); //lấy 1 ảnh đại diện
Route::post('/uploads', [UploadController::class, 'uploadImages']); //lấy nhiều ảnh sp

Route::post("/detail",[
    'as' => 'detail',
    'uses' => 'PageControl@getvalue'
]);

