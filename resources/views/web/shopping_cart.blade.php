<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/carts.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Giỏ Hàng</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="frontend/images/banner-image.png"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col product-qty">
                            <input class='form-control text-center me-3' style='max-width: 4rem' type="number"
                                value="1" min="0">
                        </div>
                        <div class="col">& ; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="frontend/images/banner-image.png"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col product-qty">
                            <input class='form-control text-center me-3' style='max-width: 4rem' type="number"
                                value="1" min="0">
                        </div>
                        <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="frontend/images/banner-image.png"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col product-qty">
                            <input class='form-control text-center me-3' style='max-width: 4rem' type="number"
                                value="1" min="0">
                        </div>
                        <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <!-- tra lai trang home -->
                <div class="back-to-shop"><a href=" {{ url('/home') }}">&leftarrow;<span class="text-muted">Back to
                        shop</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Thông Tin Giao Hàng</b></h5>
                </div>
                <hr>
                <form>
                    @csrf
                    <input type="text" placeholder="Tên" name="" class="form-control mb-2" value="">
                    <input type="tel" placeholder="Số Điện Thoại" name="" class="form-control mb-2" value="">
                    <input type="email" placeholder="Email" name="" class="form-control mb-2" value="">
                    <input type="text" placeholder="Địa chỉ" name="" class="form-control mb-2" value="">
                    <input type="text" placeholder="Ghi Chú" name="" class="form-control mb-2" value="">
                </form>
                <button type="submit" class="btn" >Gửi Đơn Hàng</button>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{ asset('frontend/js/apiprovince.js') }}"></script>
</html>
