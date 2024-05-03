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
    ],

    'success' => [
        'added' => 'Bạn đã thêm sản phẩm thành công.',
        'deleted' => 'Bạn đã xóa sản phẩm thành công',
        'updated' => 'Bạn đã sửa sản phẩm thành công'
    ],

    'error' => [
        'generic' => 'Có lỗi xảy ra, không thêm sản phẩm vào Database được. Vui lòng kiểm tra lại thông tin.',
        'generic2' => 'Có lỗi xảy ra, không xóa sản phẩm được',
        'generic3' => 'Có lỗi xảy ra, không sửa sản phẩm được',
    ],
];