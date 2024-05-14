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
        // Thực hiện validation
        $validator = Validator::make($request->all(), [
            'tenDanhMuc' => 'required',
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
        // Lấy tên danh mục mới và cũ từ dữ liệu đầu vào
        $tenDanhMucNew = $request->input('tenDanhMuc');
        $tenDanhMucOld = $request->input('tenDanhMucOld');

        // Kiểm tra xem trường 'tenDanhMuc' có thay đổi không
        if ($tenDanhMucNew !== $tenDanhMucOld) {
            // Nếu tên danh mục thay đổi, thực hiện kiểm tra unique
            $validator = Validator::make($request->all(), [
                'tenDanhMuc' => 'required|unique:danhmuc',
            ], config('custom_messages.validation'));

            // Kiểm tra nếu validation thất bại
            if ($validator->fails()) {
                // Hiển thị thông báo lỗi và redirect quay lại form
                toastr()->warning($validator->errors()->first('tenDanhMuc'));
                return redirect()->back()->withInput();
            }
        }

        // Loại bỏ _token từ dữ liệu request
        $data = $request->except('_token');
        $category = DanhMuc::find($request->idDanhMuc);

        // Cập nhật các trường dữ liệu
        $category->tenDanhMuc = $data['tenDanhMuc'];
        $category->moTa = $data['moTa'];
        $category->active = $data['active'];

        // Lưu sản phẩm vào cơ sở dữ liệu
        $result = $category->save();

        // Kiểm tra kết quả của việc lưu trữ và hiển thị thông báo tương ứng
        if ($result) {
            toastr()->success(config('custom_messages.success.updatedMenu', ['timeOut' => 5000]));
        } else {
            toastr()->error(config('custom_messages.error.generic5'));
        }

        // Redirect về trang danh sách danh mục
        return redirect('/admin/category/list');
    }
    public function listCategories()
    {
        $categories = DanhMuc::orderBy('idDanhMuc', 'desc')->get();
        // Lặp qua mỗi danh mục và đếm số lượng sản phẩm tương ứng
        foreach ($categories as $category) {
            $soLuongSP = $category->sanPhams()->count(); // Đếm số lượng sản phẩm của danh mục
            $category->soLuongSP = $soLuongSP; // Gán số lượng sản phẩm vào thuộc tính của danh mục
        }
        // $categories = DB::table('danhmuc')->get()->paginate(5);//phân trang
        return view('admin.category.list', compact('categories'));
    }
    public function deleteCategories(Request $request)
    {
        // Kiểm tra xem danh mục có chứa sản phẩm nào không
        $category = DanhMuc::find($request->idDanhMuc);
        $products = $category->sanphams;

        if ($products->isNotEmpty()) {
            // Nếu có sản phẩm, không thực hiện xóa và hiển thị thông báo lỗi
            toastr()->error('Không thể xóa danh mục vì nó chứa sản phẩm.');
            return response()->json(['success' => false]);
        }

        // Nếu không có sản phẩm, thực hiện xóa danh mục
        $result = $category->delete();

        // Xác định kết quả và đặt thông báo
        if ($result) {
            // Xóa danh mục thành công
            toastr()->success(config('custom_messages.success.deletedMenu', ['timeOut' => 5000]));
            return response()->json(['success' => true]);
        } else {
            // Xóa danh mục thất bại
            toastr()->error(config('custom_messages.success.generic6', ['timeOut' => 5000]));
            return response()->json(['success' => false]);
        }
    }

    public function addCategories()
    {
        return view('admin.category.add');
    }
}
