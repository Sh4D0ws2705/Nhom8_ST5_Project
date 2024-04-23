@extends('admin.app')
@section('content')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh Sách Sản Phẩm</h1>
</div>
<!-- Table product -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary">
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Bán</th>
                        <th>Giá Giảm</th>
                        <th>Màu</th>
                        <th>Ngày Đăng</th>
                        <th>Trạng Thái</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                </thead>
                <tfoot class="bg-primary">
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Bán</th>
                        <th>Giá Giảm</th>
                        <th>Màu</th>
                        <th>Ngày Đăng</th>
                        <th>Trạng Thái</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('backend/asset/img/ip14.jpg') }}" alt=""></td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>60</td>
                        <td>Đen</td>
                        <td>27/05/2024</td>
                        <td>Hết Hàng</td>
                        <td>
                            <!-- dẫn đường dẫn tới trang sửa sp -->
                            <a class="action-link edit-link" href="">Sửa</a>
                            <a class="action-link del-link" href="">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('backend/asset/img/ip14.jpg') }}" alt=""></td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>60</td>
                        <td>Đen</td>
                        <td>27/05/2024</td>
                        <td>Còn Hàng</td>
                        <td>
                            <a class="action-link edit-link" href="">Sửa</a>
                            <a class="action-link del-link" href="">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>


@endsection