<?php

return [
    'validation' => [
        'maSP.required' => 'Vui lòng nhập mã sản phẩm.',
        'tenSP.required' => 'Vui lòng nhập tên sản phẩm.',
        'idDanhMuc.required' => 'Vui lòng chọn danh mục.',
        'maNhaSX.required' => 'Vui lòng chọn nhà sản xuất.',
        'giaBan.required' => 'Vui lòng nhập giá bán.',
        'mauSP.required' => 'Vui lòng nhập màu sắc.',
        'soLuongTrongKho.required' => 'Vui lòng nhập số lượng trong kho.',
        'anhDaiDien.required' => 'Vui lòng chọn ảnh đại diện cho sản phẩm.',
        'anhDaiDien.image' => 'Ảnh không hợp lệ vui lòng chọn ảnh',
        'anhDaiDien.mimes' => 'Ảnh phải có dịnh dạng png,jpg,jpeg,webp',
        'anhChiTiet.required' => 'Vui lòng chọn ít nhất một ảnh chi tiết cho sản phẩm.',
        'anhChiTiet.image' => 'Ảnh không hợp lệ vui lòng chọn ảnh',
        'anhChiTiet.mimes' => 'Ảnh phải có dịnh dạng png,jpg,jpeg,webp',    
        'tenDanhMuc.required' => 'Vui lòng nhập Tên Danh Mục',
        'tenDanhMuc.unique' => 'Tên Danh Mục Đã Tồn Tại',
    ],
    'success' => [
        'added' => 'Bạn đã thêm sản phẩm thành công.',
        'deleted' => 'Bạn đã xóa sản phẩm thành công',
        'updated' => 'Bạn đã sửa sản phẩm thành công',
        'addedMenu' => 'Bạn đã thêm danh mục thành công.',
        'deletedMenu' => 'Bạn đã xóa danh mục thành công',
        'updatedMenu' => 'Bạn đã sửa danh mục thành công'
    ],

    'error' => [
        'generic' => 'Có lỗi xảy ra, không thêm sản phẩm vào Database được. Vui lòng kiểm tra lại thông tin.',
        'generic2' => 'Có lỗi xảy ra, không xóa sản phẩm được',
        'generic3' => 'Có lỗi xảy ra, không sửa sản phẩm được',
        'generic4' => 'Có lỗi xảy ra, không thêm danh muc được',
        'generic5' => 'Có lỗi xảy ra, không sửa danh muc được',
        'generic6' => 'Có lỗi xảy ra, không xóa danh muc được',
    ],
];