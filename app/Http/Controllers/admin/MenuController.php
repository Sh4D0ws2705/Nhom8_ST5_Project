<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function insertCategories(Request $request)
    {
        $categoryId = $danhmuc ? $danhmuc->idDanhMuc : null;

        $validator = Validator::make($request->all(), [
            'tenDanhMuc' => [
                'required',
                Rule::unique('danhmuc')->ignore($categoryId),
            ],
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
    public function editCategories(Request $request)
    {
        $categories = DanhMuc::find($request->idDanhMuc);
        // dd( $categories);
        return view('admin.category.edit', [
            'categories' => $categories
        ]);
    }
    public function updateCategories(Request $request)
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
        $category = DanhMuc::find($request->idDanhMuc);

        $category->tenDanhMuc = $data['tenDanhMuc'];
        $category->moTa = $data['moTa'];
        $category->active = $data['active'];

        // Lưu sản phẩm vào cơ sở dữ liệu
        $result = $category->save();
        if ($result == true) {
            // Hiển thị thông báo thành công
            toastr()->success(config('custom_messages.success.updatedMenu', ['timeOut' => 5000]));
        } else {
            toastr()->success(config('custom_messages.success.generic5', ['timeOut' => 5000]));
        }
        // Redirect về trang trước
        return redirect('/admin/category/list');
    }
    public function listCategories()
    {
        $categories = DanhMuc::all();
        // $categories = DB::table('danhmuc')->get()->paginate(5);//phân trang
        return view('admin.category.list', [
            'categories'  => $categories,
        ]);
    }
    public function deleteCategories(Request $request)
    {
        $result = DanhMuc::find($request->idDanhMuc)->delete();
        // Xác định kết quả và đặt thông báo 
        if ($result) {
            // Xóa sản phẩm thành công
            toastr()->success(config('custom_messages.success.deletedMenu', ['timeOut' => 5000]));
        } else {
            // Xóa sản phẩm thất bại
            toastr()->error(config('custom_messages.success.generic6', ['timeOut' => 5000]));
        }

        // Trả về kết quả dưới dạng JSON
        return response()->json(['success' => true]);
    }

    public function addCategories()
    {
        return view('admin.category.add');
    }
}
