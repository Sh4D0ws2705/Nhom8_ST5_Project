<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function insertCategories(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tenDanhMuc' => 'required|unique:danhmuc',
        ], config('custom_messages.validation'));

        // Kiểm tra nếu validation thất bại
        if ($validator->fails()) {
            // Lấy danh sách các lỗi
            $errors = $validator->errors()->all();

            // Tìm các thông báo lỗi tương ứng trong cấu trúc config
            $errorMessages = [];
            foreach ($errors as $error) {
                $key = strtolower($error) . '.required'; // Chuyển đổi lỗi thành key trong cấu trúc config
                if (array_key_exists($key, config('custom_messages.validation'))) {
                    $errorMessages[] = config('custom_messages.validation.' . $key);
                }
            }
            // Xây dựng thông báo chi tiết về các trường nhập thiếu
            $errorMessages = implode('<br>', $errors);

            // Hiển thị thông báo lỗi
            toastr()->warning($errorMessages);
            return redirect()->back()->withInput();
        }
        // Loại bỏ _token từ dữ liệu request
        $data = $request->except('_token');

        $category = new DanhMuc();

        $category->tenDanhMuc = $data['tenDanhMuc'];
        $category->moTa = $data['moTa'];
        $category->active = $data['active'];

        // Lưu sản phẩm vào cơ sở dữ liệu
        $category->save();

        // Hiển thị thông báo thành công
        toastr()->success(config('custom_messages.success.addedMenu', ['timeOut' => 5000]));
        // Redirect về trang trước
        return redirect()->back();
    }
    public function addCategories()
    {
        return view('admin.category.add');
    }
}
