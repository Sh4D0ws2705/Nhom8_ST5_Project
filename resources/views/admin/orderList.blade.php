@extends('admin.app')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh Sách Hóa Đơn</h1>
    </div>
    <!-- table order -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Ghi Chú</th>
                            <th>Chi Tiết</th>
                            <th>Ngày</th>
                            <th>Trạng Thái</th>
                            <th>Tùy Chỉnh</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Ghi Chú</th>
                            <th>Chi Tiết</th>
                            <th>Ngày</th>
                            <th>Trạng Thái</th>
                            <th>Tùy Chỉnh</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nguyen Van A</td>
                            <td>09090922202</td>
                            <td>22211tt@mail.com</td>
                            <td>420a Nơ trang long,F13 Bình Thạnh</td>
                            <td>Giao Hỏa Tốc</td>
                            <!-- xem chi tiết hóa đơn -->
                            <td><a class="action-link edit-link" href="{{ route('show.pageAdmin' ,['page' => 'orderDetails']) }}">Xem</a></td>
                            <td>7/4/2024</td>
                            <td><a class="action-link confirm-link" href="">Đã Xác Nhận</a></td>
                            <td>
                                <a class="action-link del-link" href="">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nguyen Van B</td>
                            <td>09090922202</td>
                            <td>nguyenvanB@mail.com</td>
                            <td>420 Phạm Văn Đồng,Thủ Đức</td>
                            <td>Giao Nhanh</td>
                            <td><a class="action-link edit-link" href="{{ route('show.pageAdmin' ,['page' => 'orderDetails']) }}">Xem</a></td>
                            <td>17/4/2024</td>
                            <td><a class="action-link confirm-link" href="">Chưa Xác Nhận</a></td>
                            <td>
                                <a class="action-link del-link" href="">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection