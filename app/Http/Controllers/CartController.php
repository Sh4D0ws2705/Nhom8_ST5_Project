<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\donhang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        // dd($request->all());
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if (is_null(Session::get('cart'))) {
            Session::put('cart', [
                $product_id => $product_qty
            ]);
            return redirect('/shop/cart');
        } else {
            $cart = Session::get('cart');
            if (Arr::exists($cart, $product_id)) {
                $cart[$product_id] = $cart[$product_id] + $product_qty;
                Session::put('cart', $cart);
                return redirect('/shop/cart');
            } else {
                $cart[$product_id] = $product_qty;
                Session::put('cart', $cart);
                return redirect('/shop/cart');
            }
        }
    }
    public function showCart() {
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = SanPham::whereIn('maSP',$product_id)->get();
        return view('web.shopping_cart',[
            'products' => $products
        ]);
    }
    public function deleteCart(Request $request)  {
        $cart = Session::get('cart');
        $product_id = $request->maSP;
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        return redirect('/shop/cart');
    }
    public function updateCart(Request $request) {
      $cart =  $request -> product_id;
      Session::put('cart',$cart);
      return redirect('/shop/cart');
    }
    public function sendCart(Request $request) {
        //tao token
        $token = Str::random(12);
        $order = new donhang();
        $order->tenKhachHang = $request -> input('tenKhachHang');
        $order->email = $request -> input('email');
        $order->diaChi = $request -> input('diaChi');
        $order->ghiChu = $request -> input('ghiChu');
        $order->sdt = $request -> input('sdt');
        $order->token = $request -> $token;
        $order_details = json_encode($request -> input('product_id')) ;
        $order->orderDetails = $order_details;
        $order -> save();
        return redirect('/order/confirm');
    } 
}
