@extends('admin.app')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Chi Tiết Hóa Đơn</h1>
    </div>
    <!-- table order -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                            <th>Tùy Chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('front-end/img/ip14.jpg') }}" alt=""></td>
                            <td>Iphone 14</td>
                            <td>15.500.000 vnd</td>
                            <td>1</td>
                            <td>15.500.000 vnd</td>
                            <td><a class="action-link del-link" href="">Xóa</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('front-end/img/ip14.jpg') }}" alt=""></td>
                            <td>Iphone 14</td>
                            <td>15.500.000 vnd</td>
                            <td>1</td>
                            <td>15.500.000 vnd</td>
                            <td><a class="action-link del-link" href="">Xóa</a></td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-white">
                        <tr>
                            <th class="total" colspan="5">Tổng Tiền</th>
                            <th class="total" colspan="2">31.000.000 vnd</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection