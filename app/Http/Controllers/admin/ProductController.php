<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\NhaSanXuat;
use App\Models\SanPham;
use App\Models\TrangThaiSP;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return view('admin.product.list');
    }
    public function addProduct()
    {
        $categories = DanhMuc::all(); // Lấy tất cả các danh mục từ cơ sở dữ liệu
        $nhaSX = NhaSanXuat::all(); // Lấy tất cả các nsx từ cơ sở dữ liệu
        $trangThai = TrangThaiSP::all(); // Lấy tất cả các trạng thái từ cơ sở dữ liệu
        //dd($categories);
        return view('admin.product.add', compact('categories','nhaSX','trangThai'));//compact chi hiển thị ở giao diện
    }
    //chen du lieu vao db
    public function insertProduct(Request $request)
    {
        //dd($request -> all());
        // $request->validate([
        //     'maSP' => 'required',
        //     'tenSP' => 'required',
        //     'idDanhMuc' => 'required',
        //     'tenNhaSX' => 'required',
        //     'giaBan' => 'required',
        //     'giaGiam' => 'required',
        //     'mauSP' => 'required',
        //     'soLuongTrongKho' => 'required',
        //     'image' => 'required',
        //     'product_images' => 'required',
            
        // ]);
        // $data = $request->except('_token');
        // dd($data);
        // $check = SanPham::create([
        //     'maSP' => $data['maSP'],
        //     'tenSP' => $data['tenSP'],
        //     'idDanhMuc' => $data['idDanhMuc'],
        //     'tenNhaSX' => $data['tenNhaSX'],
        //     'giaBan' => $data['giaBan'],
        //     'giaGiam' => $data['giaGiam'],
        //     'mauSP' => $data['mauSP'],
        //     'soLuongTrongKho' => $data['soLuongTrongKho'],
        //     'image' => $data['image'],
        //     'product_images' => $data['product_images'],
        //     'thongSoKyThuat' => $data['thongSoKyThuat'],
        //     'moTa' => $data['moTa'],
        // ]);
            
        $product = new SanPham();
        // product trỏ tới trường name của migration
        $product->maSP = $request->input('maSP');
        $product->tenSP = $request->input('tenSP');
        $product->idDanhMuc = $request->input('idDanhMuc');
        $product->maNhaSX = $request->input('maNhaSX');
        $product->giaBan = $request->input('giaBan');
        $product->giaGiam = $request->input('giaGiam');
        $product->mauSP = $request->input('mauSP');
        $product->soLuongTrongKho = $request->input('soLuongTrongKho');
        $product->thongSoKyThuat = $request->input('thongSoKyThuat');
        $product->moTa = $request->input('moTa');
        $product->MaTrangThai = $request->input('MaTrangThai');
        $product->anhDaiDien = $request->input('anhDaiDien');
        $product_images = implode('*', $request->input('anhChiTiet'));
        $product->anhChiTiet = $product_images;
        $product->save();

        return redirect()->back();
        
    }
}
