<!DOCTYPE html>
<html>

<head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset('frontend/js/modernizr.js')}}"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    @extends('web.nav')
    @section('navbar')

    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">Your Products Are Great.</h1>
                                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="frontend/images/banner-image.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row d-flex flex-wrap align-items-center">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <h1 class="display-2 text-uppercase text-dark pb-5">Technology Hack You Won't Get
                                    </h1>
                                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image-holder">
                                    <img src="frontend/images/banner-image.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-prev">
            <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
            </svg>
        </div>
        <div class="swiper-icon swiper-arrow swiper-arrow-next">
            <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
            </svg>
        </div>
    </section>
    <section id="company-services" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="cart-outline">
                                <use xlink:href="#cart-outline" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h2 class="card-title text-uppercase text-dark">Free delivery</h2>
                            <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="quality">
                                <use xlink:href="#quality" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h2 class="card-title text-uppercase text-dark">Quality guarantee</h2>
                            <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="price-tag">
                                <use xlink:href="#price-tag" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h2 class="card-title text-uppercase text-dark">Daily offers</h2>
                            <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3">
                    <div class="icon-box d-flex">
                        <div class="icon-box-icon pe-3 pb-3">
                            <svg class="shield-plus">
                                <use xlink:href="#shield-plus" />
                            </svg>
                        </div>
                        <div class="icon-box-content">
                            <h2 class="card-title text-uppercase text-dark">100% secure payment</h2>
                            <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
        <div class="container">
            <div class="row">

                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase" style="margin-left: calc(50% - 50px); font-weight:bold; margin-bottom: 30px">Mobile Products</h2>
                    <div class="btn-right">
                        <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
                    </div>
                </div>
                <div class="swiper product-swiper" method="post" action="{{route('detail')}}">
                    <div class="swiper-wrapper">
                        <div class="row g-3">
                            @foreach($data as $row)

                            <div class="col-lg-4 col-md-6">
                                <div class="swiper-slide" style="height:500px; width: 300px;">
                                    <div class="product-card position-relative">
                                        <div class="image-holder">
                                            <a href="{{ route('detail')}}?id={{ $row->sanphams->maSP }}"><img style="width:300px; height: 250px;" src="{{ asset( $row->anhDaiDien) }}" alt="product-item" class="img-fluid"></a>
                                        </div>
                                        <div class="cart-concern position-absolute">
                                            <div class="cart-button d-flex">
                                                <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline">
                                                        <use xlink:href="#cart-outline"></use>
                                                    </svg></a>
                                            </div>
                                        </div>
                                        <h3 class="card-title text-uppercase tendm">
                                            <a href="{{ route('show.page',['page'=>'detail']) }}">
                                                <h4 style="line-height: 30px; font-weight:bolder;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-top: 20px"></h4>
                                            </a>    
                                        </h3>
                                        <h3 class="card-title text-uppercase tennsx">
                                            <a href="#">
                                                {{ $row->nhasanxuats->tenNhaSX }}
                                            </a>
                                        </h3>
                                        <div class="card-detail d-flex justify-content-center align-items-baseline pt-3">
                                            <h3 class="card-title text-uppercase ">
                                                <a href="#">
                                                    <p class="tensp">{{ $row->tenSP }}</p>
                                                </a>
                                            </h3>
                                        </div>
                                        <span class="item-price text-primary">
                                            <strike style="margin-right: 10px;" id="giaban">{{ $row->giaBan }}</strike><gia id="giasp">{{ $row->giaGiam }}</gia>
                                        </span>
                                        <br>
                                        <span class="item-price text-primary status">{{ $row->trangthaisps->TrangThai }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge" style="background-image: url('frontend/images/single-image1.png');background-position: right; background-repeat: no-repeat;">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-content offset-4 padding-medium">
                    <h3>10% off</h3>
                    <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </section>
    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Latest Posts</h2>
                    <div class="btn-right">
                        <a href="blog.html" class="btn btn-medium btn-normal text-uppercase">Read Blog</a>
                    </div>
                </div>
                <div class="post-grid d-flex flex-wrap justify-content-between">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="frontend/images/post-item1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 22, 2023</span>
                                <span class="meta-category">- Gadgets</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Get some cool gadgets in 2023</a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="frontend/images/post-item2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 25, 2023</span>
                                <span class="meta-category">- Technology</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Technology Hack You Won't Get</a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card border-none me-3">
                            <div class="card-image">
                                <img src="frontend/images/post-item3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body text-uppercase">
                            <div class="card-meta text-muted">
                                <span class="meta-date">feb 22, 2023</span>
                                <span class="meta-category">- Camera</span>
                            </div>
                            <h3 class="card-title">
                                <a href="#">Top 10 Small Camera In The World</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="position-relative">
        <div class="container">
            <div class="row">
                <div class="review-content position-relative">
                    <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
                        <svg class="chevron-left">
                            <use xlink:href="#chevron-left" />
                        </svg>
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="quotation text-center">
                            <svg class="quote">
                                <use xlink:href="#quote" />
                            </svg>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi
                                        sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi suspen dise
                                        sagittis lorem habi tasse morbi.”</blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-half">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                        <svg class="star star-empty">
                                            <use xlink:href="#star-empty"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Emma Chamberlin</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center d-flex justify-content-center">
                                <div class="review-item col-md-10">
                                    <i class="icon icon-review"></i>
                                    <blockquote>“A blog is a digital publication that can complement a website or exist
                                        independently. A blog may include articles, short posts, listicles,
                                        infographics, videos, and other digital content.”</blockquote>
                                    <div class="rating">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-half">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                        <svg class="star star-empty">
                                            <use xlink:href="#star-empty"></use>
                                        </svg>
                                    </div>
                                    <div class="author-detail">
                                        <div class="name text-dark text-uppercase pt-2">Jennie Rose</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
                        <svg class="chevron-right">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
                    <div class="col-md-6 col-sm-12">
                        <div class="display-header pe-3">
                            <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
                            <p>Get latest news, updates and deals directly mailed to your inbox.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <form class="subscription-form validate">
                            <div class="input-group flex-wrap">
                                <input class="form-control btn-rounded-none" type="email" name="EMAIL" placeholder="Your email address here" required="">
                                <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit" name="subscribe">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="instagram" class="padding-large overflow-hidden no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header text-uppercase text-dark text-center pb-3">
                    <h2 class="display-7">Shop Our Insta</h2>
                </div>
                <div class="d-flex flex-wrap">
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="frontend/images/insta-item1.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="frontend/images/insta-item2.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="images/insta-item3.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="frontend/images/insta-item4.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="frontend/images/insta-item5.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <script src="frontend/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="frontend/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="frontend/js/plugins.js"></script>
    <script type="text/javascript" src="frontend/js/script.js"></script>
    @endsection
</body>

</html>