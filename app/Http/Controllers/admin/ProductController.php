<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //chen du lieu vao db
    public function insertProduct(Request $request) {
        dd($request -> all());
    }
}
