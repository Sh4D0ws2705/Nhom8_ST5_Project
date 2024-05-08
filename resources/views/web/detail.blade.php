<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/detail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
    </style>
</head>

<body>
    <section class="py-5">
        <div class="container px-3 px-lg-2 my-1" style="max-height: 700px; overflow:hidden;">
            <div class="row gx-4 gx-lg-4 align-items-center">
                <div class="col-md-4" style="max-width: 900px;">
                    <img src="{{ asset($product->anhDaiDien) }}"
                        style="width: 100%; height: auto;">
                </div>
                <div class='col-md-4'>
                    <div class='tenSP'>{{ $product->tenSP }}</div>
                    <!-- <div class='decription'>{{ $product->moTa }}</div> -->
                    <div class='fs-5 mb-5 background'>
                        <span class='text-decoration-line-through giagiam'>{{ $product->giaGiam }}</span>|
                        <span class="giaban">{{ $product->giaBan }}</span>
                    </div>
                    <div class='d-flex'>
                        <input class='form-control text-center me-3' id='inputQuantity' type='num' value='1'
                            style='max-width: 3rem' />
                        <button class='btn btn-outline-dark flex-shrink-0' type='button'>
                            <i class='bi-cart-fill me-1'></i>
                            Add to cart
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="bg-light">
        <div class="row detail">
            <div class="col-sm-7">
                <div class='decription'>{!! $product->moTa !!}</div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 20px;">Chi tiết mô tả</button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $product->tenSP }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                 {!! $product->moTa !!}
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class='decription'>{!! $product->thongSoKyThuat !!}</div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detail" style="margin: 20px;">Thông số kỹ thuật</button>
                <div class="modal fade" id="detail">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $product->tenSP }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                 {!! $product->thongSoKyThuat !!}
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @forelse ($relatedProducts as $relatedProduct)
                <div class="col mb-5">
                    <div class="card h-100" style="width: 400px; margin: ">
                        <!-- Product image-->
                        <div class="card">
                            <img src="{{ asset( $relatedProduct -> anhDaiDien) }}" alt="{{ $relatedProduct->tenSP }}" />
                        </div>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center text">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $relatedProduct->tenSP }}</h5>
                            </div>

                            <div class="price">
                                {{ $relatedProduct->giaGiam }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- <div class="col mb-5"> -->
                    <!-- <div class="card h-100"> -->
                        <!-- Sale badge-->
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale -->
                        <!-- </div> -->
                        <!-- Product image-->
                        <!-- <img class="card-img-top" src="" alt="..." /> -->
                        <!-- Product details-->
                        <!-- <div class="card-body p-4"> -->
                            <!-- <div class="text-center"> -->
                                <!-- Product name-->
                                <!-- <h5 class="fw-bolder">Special Item</h5> -->
                                <!-- Product reviews-->
                                <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div> -->
                                <!-- Product price-->
                                <!-- <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00 -->
                            <!-- </div> -->
                        <!-- </div> -->

                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </section>
</body>

</html>