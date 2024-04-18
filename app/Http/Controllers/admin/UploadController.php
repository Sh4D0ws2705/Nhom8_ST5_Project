<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //xử lý yêu cầu gửi một hình ảnh từ trình duyệt của người dùng
    public function uploadImage(Request $request)
    {
        // dd($request ->all()); //debug
        $fileName = time() . '-' . $_FILES['file']['name']; //tạo một tên file mới cho hình ảnh được tải lên
        $request->file('file')->storeAs('public/images', $fileName); //hình ảnh được tải lên vào thư mục public/images
        $url = '/storage/images/' . $fileName; //tạo ra đường dẫn đầy đủ đến hình ảnh vừa được tải lên, để sau đó trả về cho người dùng.
        /* Dòng này trả về một phản hồi JSON cho người dùng với dữ liệu
         về việc upload hình ảnh thành công và đường dẫn đến hình ảnh vừa được tải lên.*/
        return response()->json([
            'success' => true,
            'path' => $url
        ]);
    }
}
