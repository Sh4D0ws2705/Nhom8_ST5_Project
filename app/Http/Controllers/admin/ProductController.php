<?php

namespace App\Http\Controllers\admin;
use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProduct()
    {
        return view('admin.product.list');
    }
    public function addProduct()
    {
        $categories = DB::table('danhmuc')->get(); // Lấy tất cả các danh mục từ cơ sở dữ liệu
        $nhaSX = DB::table('nhasanxuat')->get(); // Lấy tất cả các nsx từ cơ sở dữ liệu
        $trangThai = DB::table('trangthaisp')->get(); // Lấy tất cả các trạng thái từ cơ sở dữ liệu
        // dd($categories);
        
        return view('admin.product.add', compact('categories','nhaSX','trangThai'));//compact chi hiển thị ở giao diện
    }
    //chen du lieu vao db
    public function insertProduct(Request $request)
    {
        $request->validate([
            'maSP' => 'required',
            'tenSP' => 'required',
            'idDanhMuc' => 'required',
            'maNhaSX' => 'required',
            'giaBan' => 'required',
            'giaGiam' => 'required',
            'mauSP' => 'required',
            'soLuongTrongKho' => 'required',
            'anhDaiDien' => 'required',
            'anhChiTiet' => 'required',
        ], [
            'maSP.required' => 'Vui lòng nhập mã sản phẩm.',
            'tenSP.required' => 'Vui lòng nhập tên sản phẩm.',
            'idDanhMuc.required' => 'Vui lòng chọn danh mục.',
            'maNhaSX.required' => 'Vui lòng chọn nhà sản xuất.',
            'giaBan.required' => 'Vui lòng nhập giá bán.',
            'giaGiam.required' => 'Vui lòng nhập giá giảm.',
            'mauSP.required' => 'Vui lòng nhập màu sắc.',
            'soLuongTrongKho.required' => 'Vui lòng nhập số lượng trong kho.',
            'anhDaiDien.required' => 'Vui lòng chọn ảnh đại diện cho sản phẩm.',
            'anhChiTiet.required' => 'Vui lòng chọn ít nhất một ảnh chi tiết cho sản phẩm.',
        ]);
         // Loại bỏ _token từ dữ liệu request
    $data = $request->except('_token');

    // Tạo đối tượng SanPham mới
    $product = new SanPham();
    
    // Đặt các thuộc tính cho sản phẩm
    $product->maSP = $data['maSP'];
    $product->tenSP = $data['tenSP'];
    $product->idDanhMuc = $data['idDanhMuc'];
    $product->maNhaSX = $data['maNhaSX'];
    $product->giaBan = $data['giaBan'];
    $product->giaGiam = $data['giaGiam'];
    $product->mauSP = $data['mauSP'];
    $product->soLuongTrongKho = $data['soLuongTrongKho'];
    $product->thongSoKyThuat = $data['thongSoKyThuat'];
    $product->moTa = $data['moTa'];
    $product->MaTrangThai = $data['MaTrangThai'];
    $product->anhDaiDien = $data['anhDaiDien'];

    // Chuyển đổi mảng ảnh thành chuỗi nếu có
    if (isset($data['anhChiTiet'])) {
        $product_images = implode('*', $data['anhChiTiet']);
        $product->anhChiTiet = $product_images;
    }

    // Lưu sản phẩm vào cơ sở dữ liệu
    $product->save();

    // Chuyển hướng người dùng trở lại trang trước đó
    return redirect()->back();
        
    }
}
