<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function insertCategories(Request $request){
        dd($request -> all());
    }
    public function addCategories() {
        return view('admin.category.add');
    }
}
