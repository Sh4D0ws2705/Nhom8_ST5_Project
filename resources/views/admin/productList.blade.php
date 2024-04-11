@extends('admin.app')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sửa Sản Phẩm</h1>
    </div>
    <!-- Begin Add Product -->
    <div class="input-group main-content">
        <div class="admin-content-left col-lg-9">
            <div class="input-group-text mb-4">
                <input type="text" placeholder="Mã Sản Phẩm" class="form-control mr-4">
                <input type="text" placeholder="Tên Sản Phẩm" class="form-control mr-4">
            </div>
            <div class="input-group-text mb-4">
                <select class="form-control mr-4" aria-label="Default select example">
                    <option value="" selected disabled>Danh Mục</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-control" aria-label="Default select example">
                    <option value="" selected disabled>Hãng</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <!-- load danh mục từ db
                    @if(isset($$product_catelogs))
                    @foreach ($product_catelogs as $product_catelog)
                    <optionn value="{{ $product_catelog->id }}">{{ $product_catelog->name }}</optionn>
                    @endforeach
                    @endif -->
            </div>
            <div class="input-group-text mb-4">
                <input type="text" placeholder="Giá Bán" class="form-control mr-4">
                <input type="text" placeholder="Giá Giảm" class="form-control mr-4">
            </div>
            <div class="input-group-text mb-4">
                <input type="text" placeholder="Màu Sắc" class="form-control mr-4">
                <input type="text" placeholder="Số Lượng" class="form-control mr-4">
            </div>
            <!-- gọi class của ckEditor -->
            <div class="specs">
                <textarea name="specs" {{ old('specs') }} id="" class="editor1 form-control" cols="25" rows="20" placeholder="Thông Số Kĩ Thuật"></textarea>
            </div>
            <textarea name="decs" {{ old('decs') }} id="" class="editor2 form-control" cols="25" rows="20" placeholder="Mô tả"></textarea>
            <button class="btn btn-primary mt-4" type="button">Sửa Sản Phẩm</button>
        </div>
        <!-- Begin add img -->
        <div class="admin-content-right col-lg-3">
            <div class="admin-content-image ml-5 mt-2">
                <label for="file">Ảnh Đại Diện</label>
                <input id="file" type="file">
                <input type="hidden" value="">
                <div class="img-show">
                    <img src="">
                </div>
            </div>
            <div class="admin-content-images ml-5 mt-4">
                <label for="file">Ảnh Sản Phẩm</label>
                <input id="file" type="file">
                <input type="hidden" value="">
                <div class="imgs-show">
                    <img src="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- đường dẫn ckEditor -->
<script src="{{ asset('ckEditor5/js/ckeditor.js') }}"></script>
<script src="{{ asset('ckEditor5/js/script.js') }}"></script>
@endsection