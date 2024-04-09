<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\NhaSanXuat;
use App\Models\TrangThaiSP;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PageControl extends Controller
{
    public function page($name = 'index'){
        $products  = SanPham::orderBy('maSP')->get();
        $danhmucs = DanhMuc::orderBy('idDanhMuc')->get();
        $nhasanxuats = NhaSanXuat::orderBy('maNhaSX')->get();
        $trangthaisps = TrangThaiSP::orderBy('MaTrangThai')->get();
        return view(@$name,['data'=>$products,'datadm'=>$danhmucs,'datansx'=>$nhasanxuats,'data_trangthai'=>$trangthaisps]);
    } 
}