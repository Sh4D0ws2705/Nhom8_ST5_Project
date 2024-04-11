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
    // public function page($name = 'index')
    // {
    //     $products  = SanPham::orderBy('maSP')->get();
    //     $danhmucs = DanhMuc::orderBy('idDanhMuc')->get();
    //     $nhasanxuats = NhaSanXuat::orderBy('maNhaSX')->get();
    //     $trangthaisps = TrangThaiSP::orderBy('MaTrangThai')->get();
    //     return view(@$name, ['data' => $products, 'datadm' => $danhmucs, 'datansx' => $nhasanxuats, 'data_trangthai' => $trangthaisps]);
    // }

    //Controller cho web nguoi dung
    public function showPage($page = 'home')
    {
        // Kiểm tra xem view có tồn tại không
        if (view()->exists("web.$page")) {
            // Lấy dữ liệu từ cơ sở dữ liệu
            $products  = SanPham::orderBy('maSP')->get();
            $danhmucs = DanhMuc::orderBy('idDanhMuc')->get();
            $nhasanxuats = NhaSanXuat::orderBy('maNhaSX')->get();
            $trangthaisps = TrangThaiSP::orderBy('MaTrangThai')->get();

            // Chuyển dữ liệu vào view và trả về nó
            return view("web.$page", ['data' => $products, 'datadm' => $danhmucs, 'datansx' => $nhasanxuats, 'data_trangthai' => $trangthaisps]);
        }

        // Nếu view không tồn tại, trả về lỗi 404
        return abort(404);
    }

     //Controller cho web admin
     public function showPageAdmin($page = 'index') {
        //ktra xem web co ton tai khong
        if (view()->exists("admin.$page")) {
            return view("admin.$page");
        }
         // Nếu view không tồn tại, bạn có thể trả về một trang lỗi hoặc trang mặc định
         return abort(404);
    }
}
