@extends('site.layouts.main')

@section('page-content')
    <main>
        <!-- home-slider start -->
        <section class="slider-content">
            <div class="home-slider swiper" id="home-slider">
                <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="{{ asset('assets/img/slider/slider-02.jpg') }}" class="img-fluid desk-img"
                                alt="backery-slider-02">
                            <img src="img/slider/mobile-slider-02.jpg" class="img-fluid mobile-img" alt="mobile-slider-02">
                            <div class="container slider-info-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text-info slider-content-center slider-text-center">
                                            <div class="slider-info-wrap">
                                                {{-- <span class="slider-lable e1">
                          <span class="slider-lable_title" style="color:#ffffff;">Only for discount</span>
                          <span class="slider-lable-discount" style="color:#fff831;">80% OFF</span>
                        </span> --}}
                                                <h2 class="e1">
                                                    <span>Komal Plastics</span>

                                                </h2>
                                                {{-- <div class="slider-custom-text e1">
                          <span class="custom-text-1">$25.00</span>
                          <span class="custom-text-2">$30.00</span>
                        </div> --}}
                                                <a href="collection.html" class="btn btn-style e1">Shop collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="{{ asset('assets/img/slider/slider-02.jpg') }}" class="img-fluid desk-img"
                                alt="backery-slider-02">
                            <img src="img/slider/mobile-slider-02.jpg" class="img-fluid mobile-img" alt="mobile-slider-02">
                            <div class="container slider-info-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text-info slider-content-center slider-text-center">
                                            <div class="slider-info-wrap">
                                                {{-- <span class="slider-lable e1">
                          <span class="slider-lable_title" style="color:#ffffff;">Only for discount</span>
                          <span class="slider-lable-discount" style="color:#fff831;">80% OFF</span>
                        </span> --}}
                                                <h2 class="e1">
                                                    <span>Komal Plastics</span>

                                                </h2>
                                                {{-- <div class="slider-custom-text e1">
                          <span class="custom-text-1">$25.00</span>
                          <span class="custom-text-2">$30.00</span>
                        </div> --}}
                                                <a href="collection.html" class="btn btn-style e1">Shop collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-image">
                            <img src="{{ asset('assets/img/slider/slider-02.jpg') }}" class="img-fluid desk-img"
                                alt="backery-slider-02">
                            <img src="img/slider/mobile-slider-02.jpg" class="img-fluid mobile-img" alt="mobile-slider-02">
                            <div class="container slider-info-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text-info slider-content-center slider-text-center">
                                            <div class="slider-info-wrap">
                                                {{-- <span class="slider-lable e1">
                          <span class="slider-lable_title" style="color:#ffffff;">Only for discount</span>
                          <span class="slider-lable-discount" style="color:#fff831;">80% OFF</span>
                        </span> --}}
                                                <h2 class="e1">
                                                    <span>Komal Plastics</span>

                                                </h2>
                                                {{-- <div class="slider-custom-text e1">
                          <span class="custom-text-1">$25.00</span>
                          <span class="custom-text-2">$30.00</span>
                        </div> --}}
                                                <a href="collection.html" class="btn btn-style e1">Shop collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-buttons">
                    <button class="swiper-prev"><i class=" feather-arrow-left"></i></button>
                    <button class="swiper-next"><i class=" feather-arrow-right"></i></button>
                </div>
                <div class="swiper-dots">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- home-slider end -->
        <!-- slider-category start -->

        {{-- hero text section --}}
        <section class="container py-5">
            <h6>Best Manufacturer of Plastic Bottle in Mumbai, Maharashtra | Best Manufacturer of Pet Container in Mumbai,
                Maharashtra | Best Manufacturer of Plastic Jar in Mumbai, Maharashtra | Manufacturer, Exporter, Supplier and
                Trader of qua ...</h6>
            <div class="d-flex justify-content-center pt-5 gap-2">
                <a class="read-btn btn btn-style2">Read More</a>
                <a class="read-btn btn btn-style2">Contact Us</a>
            </div>
        </section>

        {{-- our products section --}}
        <section class="slider-category section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Our Products</h2>
                            </div>
                        </div>
                        <div class="category-block">
                            <div class="swiper" id="category-template">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-dots">
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <a class="read-btn btn btn-style2 ">View All Products</a>
                </div>
            </div>
        </section>

        {{-- about section --}}
        <section class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/app/komal.jpg') }}" alt="komal">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column ">
                    <h3>About our organization</h3>
                    <p>Best Manufacturer of Plastic Bottle in Mumbai, Maharashtra | Best Manufacturer of Pet Container in
                        Mumbai, Maharashtra | Best Manufacturer of Plastic Jar in Mumbai, Maharashtra | Manufacturer,
                        Exporter, Supplier and Trader of qua...</p>
                    <a href="">Read More</a>
                </div>
            </div>
        </section>

        {{-- gallery section --}}
        <section class="slider-category section-pt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2>Our Gallery</h2>
                            </div>
                        </div>
                        <div class="category-block">
                            <div class="swiper" id="category-template">
                                <div class="swiper-wrapper">
                                   
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100 ">
                                        <div class="category-item">
                                            <a href="collection.html" class="icon-block">
                                                <div class="category-text">
                                                   
                                                    <div class="title-block mb-2">
                                                        <span class="cat-title">Hdpe Jars</span>
                                                    </div>
                                                </div>
                                                <div class="cat-image mb-4">
                                                    <span class="cat-img">
                                                        <img  src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg"
                                                            class="img-fluid rounded " alt="cat-01">
                                                    </span>
                                                </div>
                                                <div class="category-button">
                                                    <span class="button-title">VIEW DETAILS</span>
                                                    <span class="button-block"><i class="feather-arrow-right"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-dots">
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- slider-category end -->
      
        <!-- blog-wrap start -->
        <section class="blog-wrap section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="grid-wrap">
                            <div class="section-capture">
                                <div class="section-title">
                                    <h2>
                                        <span>Every latest blog</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="grid-wrapper slider-wrapper">
                                <div class="blog-slider swiper" id="blog-template">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="img/blog/packging-blog-01.jpg" class="img-fluid"
                                                            alt="packging-blog-01">
                                                        <span class="blog-element date-time">
                                                            <span class="date">14</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">Who avoids a pain that?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-post banner-hover">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="img/blog/packging-blog-02.jpg" class="img-fluid"
                                                            alt="packging-blog-02">
                                                        <span class="blog-element date-time">
                                                            <span class="date">15</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">Why do we use it?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-post banner-hover">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="img/blog/packging-blog-03.jpg" class="img-fluid"
                                                            alt="packging-blog-03">
                                                        <span class="blog-element date-time">
                                                            <span class="date">16</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">Which of ever undertakes?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-post banner-hover">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="img/blog/packging-blog-04.jpg" class="img-fluid"
                                                            alt="packging-blog-04">
                                                        <span class="blog-element date-time">
                                                            <span class="date">14</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">Who avoids a pain that?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-post banner-hover">
                                                <div class="blog-main-img">
                                                    <a href="" class="blog-img">
                                                        <img src="img/blog/packging-blog-05.jpg" class="img-fluid"
                                                            alt="packging-blog-05">
                                                        <span class="blog-element date-time">
                                                            <span class="date">14</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">What is lorem ipsum?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-post banner-hover">
                                                <div class="blog-main-img">
                                                    <a href="article-post.html" class="blog-img">
                                                        <img src="img/blog/packging-blog-06.jpg" class="img-fluid"
                                                            alt="packging-blog-06">
                                                        <span class="blog-element date-time">
                                                            <span class="date">14</span>
                                                            <span class="time">May</span>
                                                            <span class="year">2024</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <h6 class="blog-title">
                                                        <a href="article-post.html">Why do we use it?</a>
                                                    </h6>
                                                    <p class="blog-desc">It is a long established fact that a reader will
                                                        be distracted by the readable content of a page when looking at its
                                                        layout.</p>
                                                    <a href="article-post.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class=" feather-arrow-left"></i></button>
                                        <button class="swiper-next"><i class=" feather-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-wrap end -->

    </main>
@endsection
