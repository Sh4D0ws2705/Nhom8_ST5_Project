<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\donhang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList() {
        $order = donhang::all();
        return view('admin.order.list',[
            'orders' => $order
        ]);
    }
    public function orderDetail(Request $request) {
        $order_detail = json_decode($request->order_detail,true);
        // dd( $order_detail);
        $product_id =  array_keys($order_detail);
        $products = SanPham::whereIn('maSP',$product_id)->get();
        // dd($products);
        return view('admin.order.detail',[
            'products' => $products,
            'order_detail' => $order_detail
        ]);
    }
    public function orderDelete(Request $request) {
        $result = donhang::find($request->maDonHang)->delete();
        // Xác định kết quả và đặt thông báo vào session flash
        if ($result) {
            // Xóa đơn hàng thành công
            toastr()->success("Xóa Đơn Hàng Thành Công", ['timeOut' => 5000]);
        } else {
            // Xóa đơn Hàng thất bại
            toastr()->error("Xóa Đơn Hàng Thất Bại", ['timeOut' => 5000]);
        }
        // Trả về kết quả dưới dạng JSON
        return response()->json(['success' => true]);
    }
}
