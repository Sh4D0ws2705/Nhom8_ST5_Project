<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Models\NhaSanXuat;

class Api extends Controller
{
    //Controller cho web nguoi dung
    public function ajaxSearch()
    {
        $data = SanPham::search()->get();
        return $data;
    }

    public function index(Request $request){
        $sanpham = SanPham::all();

        $query = $request->input('query');
        if ($query) {
            $results = SanPham::where('tenSP', 'LIKE', "%{$query}%")->orWhere('moTa', 'LIKE',"%{$query}%")->get();
        }
        else {
            $results =[];
        }
        return view('nav', compact('sanpham','query'));
    }
    
}
