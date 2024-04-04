<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\danhmuc;
use App\Models\DanhMuc as ModelsDanhMuc;
use App\Models\SanPham;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PageControl extends Controller
{
    public function page($name = 'index'){
        $products  = SanPham::orderBy('maSP')->get();
        return view(@$name,['data'=>$products]);
    } 

  
}
