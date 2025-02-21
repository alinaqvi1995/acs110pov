@extends('frontend.layouts.app')
@section('title', 'Home Page')
@section('content')
<!--Main Slider Start-->
<section class="main-slider-two clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__shape-1 zoom-fade-2">
                                    <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                </div>
                                <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                </h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                    <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/main-slider-2-2.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__shape-1 zoom-fade-2">
                                    <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                </div>
                                <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                </h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                    <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/main-slider-2-3.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__shape-1 zoom-fade-2">
                                    <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                </div>
                                <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                </h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                    <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>

    </div>
</section>
<!--Main Slider End-->

<!--Feature Two Start-->
<section class="feature-two">
    <div class="container">
        <div class="row">
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__single">
                    <div class="feature-two__single-inner">
                        <div class="feature-two__shape-1">
                            <img src="assets/images/shapes/feature-two-shape-1.png" alt="">
                        </div>
                        <div class="feature-two__img-box">
                            <div class="feature-two__img">
                                <img src="assets/images/resources/feature-two-img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="feature-two__content">
                            <h3 class="feature-two__title"><a href="agriculture-services.html">Agriculture
                                    products</a></h3>
                            <p class="feature-two__sub-title">Vegetables, fruits & berries</p>
                            <div class="feature-two__btn-box">
                                <a href="agriculture-services.html" class="thm-btn feature-two__btn">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__single">
                    <div class="feature-two__single-inner">
                        <div class="feature-two__shape-1">
                            <img src="assets/images/shapes/feature-two-shape-1.png" alt="">
                        </div>
                        <div class="feature-two__img-box">
                            <div class="feature-two__img">
                                <img src="assets/images/resources/feature-two-img-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="feature-two__content">
                            <h3 class="feature-two__title"><a href="farming-products.html">Farming products</a>
                            </h3>
                            <p class="feature-two__sub-title">Eggs, meat & milk</p>
                            <div class="feature-two__btn-box">
                                <a href="farming-products.html" class="thm-btn feature-two__btn">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
            <!--Feature Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__single">
                    <div class="feature-two__single-inner">
                        <div class="feature-two__shape-1">
                            <img src="assets/images/shapes/feature-two-shape-1.png" alt="">
                        </div>
                        <div class="feature-two__img-box">
                            <div class="feature-two__img">
                                <img src="assets/images/resources/feature-two-img-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="feature-two__content">
                            <h3 class="feature-two__title"><a href="organic-services.html">Dry fruits
                                    products</a></h3>
                            <p class="feature-two__sub-title">Dry fruits, Nuts & product</p>
                            <div class="feature-two__btn-box">
                                <a href="organic-services.html" class="thm-btn feature-two__btn">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature Two Single End-->
        </div>
    </div>
</section>
<!--Feature Two End-->

<!--Categories Two Start-->
<section class="categories-two">
    <div class="categories-two__bg-box">
        <div class="categories-two__bg-img-1"
            style="background-image: url(assets/images/backgrounds/categories-two-bg-img-1.jpg);"></div>
        <div class="categories-two__ripped-paper"
            style="background-image: url(assets/images/shapes/categories-two-ripped-paper.png);"></div>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Checkout New Products</span>
            <h2 class="section-title__title">Introdusing latest products</h2>
        </div>
        <div class="row">
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #9c72cc;">
                    <div class="categories-two__icon">
                        <span class="icon-vegetable"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="agriculture-services.html">Vegetables</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #6cbc94;">
                    <div class="categories-two__icon categories-two__icon-2">
                        <span class="icon-fruits"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="farming-products.html">Fresh fruits</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #50a72c;">
                    <div class="categories-two__icon categories-two__icon-3">
                        <span class="icon-cinnamon"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="organic-services.html">Spices</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #d7a955;">
                    <div class="categories-two__icon categories-two__icon-4">
                        <span class="icon-walnut"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="delivery-services.html">Dry fruits</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #5580d7;">
                    <div class="categories-two__icon categories-two__icon-5">
                        <span class="icon-iced-coffee"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="agriculture-services.html">Beverages</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
            <!--Categories Two Single Start-->
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="categories-two__single" style="--accent-color: #dd637c;">
                    <div class="categories-two__icon categories-two__icon-6">
                        <span class="icon-chop"></span>
                    </div>
                    <h3 class="categories-two__title"><a href="delivery-services.html">Meat</a></h3>
                </div>
            </div>
            <!--Categories Two Single End-->
        </div>
    </div>
</section>
<!--Categories Two End-->

<!--About Two Start-->
<section class="about-two">
    <div class="about-two__shape-4 zoominout">
        <img src="assets/images/shapes/about-two-shape-4.png" alt="">
    </div>
    <div class="about-two__shape-5 img-bounce">
        <img src="assets/images/shapes/about-two-shape-5.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Get to Know us</span>
                        <h2 class="section-title__title">Provider of only organic
                            & healthy food</h2>
                    </div>
                    <p class="about-two__text">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or
                        randomised words which don't look even.</p>
                    <ul class="about-two__points-box list-unstyled">
                        <li>
                            <div class="about-two__content">
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Local growth</p>
                                </div>
                            </div>
                            <p class="about-two__points-text">Lorem ipsum dolor sited amet consectetur notted.
                            </p>
                        </li>
                        <li>
                            <div class="about-two__content">
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Healthy food</p>
                                </div>
                            </div>
                            <p class="about-two__points-text">Lorem ipsum dolor sited amet consectetur notted.
                            </p>
                        </li>
                    </ul>
                    <div class="about-two__btn-box">
                        <a href="about.html" class="about-two__btn thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="about-two__img-1">
                            <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                            <div class="about-two__shape-1 float-bob-y">
                                <img src="assets/images/shapes/about-two-shape-1.png" alt="">
                            </div>
                            <div class="about-two__shape-2 zoominout">
                                <img src="assets/images/shapes/about-two-shape-2.png" alt="">
                            </div>
                            <div class="about-two__shape-3 float-bob-x">
                                <img src="assets/images/shapes/about-two-shape-3.png" alt="">
                            </div>
                        </div>
                        <div class="about-two__img-2">
                            <img src="assets/images/resources/about-two-img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Two End-->

<!--Banner Two Start-->
<section class="banner-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="banner-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="banner-two__inner">
                        <div class="banner-two__img-1">
                            <img src="assets/images/resources/banner-two-img-1.png" alt="">
                        </div>
                        <div class="banner-two__shape-1">
                            <img src="assets/images/shapes/banner-two-shape-1.png" alt="">
                        </div>
                        <p class="banner-two__tagline">10% <span>off</span></p>
                        <h3 class="banner-two__title">Daily Organic
                            <br> Vegetables</h3>
                        <div class="banner-two__btn-box">
                            <a href="product-details.html" class="banner-two__btn thm-btn">Shop selected
                                items</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="banner-two__right wow slideInRight" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="banner-two__inner">
                        <div class="banner-two__img-1">
                            <img src="assets/images/resources/banner-two-img-2.png" alt="">
                        </div>
                        <div class="banner-two__shape-1">
                            <img src="assets/images/shapes/banner-two-shape-2.png" alt="">
                        </div>
                        <p class="banner-two__tagline">10% <span>off</span></p>
                        <h3 class="banner-two__title">Daily Healthy
                            <br> Breakfast</h3>
                        <div class="banner-two__btn-box">
                            <a href="product-details.html" class="banner-two__btn thm-btn">Shop selected
                                items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner Two End-->

<!--Video One Start-->
<section class="video-one">
    <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/video-one-bg.jpg)"></div>
    <div class="video-one-border"></div>
    <div class="video-one-border video-one-border-two"></div>
    <div class="video-one-border video-one-border-three"></div>
    <div class="video-one-border video-one-border-four"></div>
    <div class="video-one-border video-one-border-five"></div>
    <div class="video-one-border video-one-border-six"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <div class="video-one__shape">
                        <img src="assets/images/shapes/video-one-shape-1.png" alt="">
                    </div>
                    <h2 class="video-one__video-title">Be healthy & eat only
                        <br> fresh organic vegetables</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->

<!--Cta One Start-->
<section class="cta-one">
    <div class="cta-one__bg-img" style="background-image: url(assets/images/backgrounds/cta-one-bg-img-1.png);">
    </div>
    <div class="container">
        <div class="cta-one__inner">
            <div class="cta-one__img-1">
                <img src="assets/images/resources/cta-one-img-1.png" alt="">
            </div>
            <div class="cta-one__left">
                <div class="cta-one__title-box">
                    <span class="cta-one__tagline">Need Ogenix Help?</span>
                    <h2 class="cta-one__title">We’re leader in organic market</h2>
                </div>
            </div>
            <div class="cta-one__right">
                <div class="cta-one__btn-box">
                    <a href="about.html" class="cta-one__btn thm-btn">Discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->

<!--Hot Products Two Start-->
<section class="hot-products-two">
    <div class="container">
        <div class="hot-products-two__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Checkout New Products</span>
                        <h2 class="section-title__title">Introdusing new products</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="hot-products-two__filter-box">
                        <ul class="hot-products-two__filter style1 post-filter list-unstyled clearfix">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                            </li>
                            <li data-filter=".fruits"><span class="filter-text">Fruits</span></li>
                            <li data-filter=".vegetables"><span class="filter-text">Vegetables</span></li>
                            <li data-filter=".fresh"><span class="filter-text">Fresh</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hot-products-two__bottom">
            <div class="row filter-layout">
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Bananas</a></h3>
                                <p class="hot-products__price">$18.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item fruits fresh">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Potatos</a></h3>
                                <p class="hot-products__price">$22.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Apples</a></h3>
                                <p class="hot-products__price">$16.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Lettus</a></h3>
                                <p class="hot-products__price">$9.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item fruits">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-5.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Brown Bread</a>
                                </h3>
                                <p class="hot-products__price">$23.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-6.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Lemos</a></h3>
                                <p class="hot-products__price">$10.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-7.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Red grapes</a>
                                </h3>
                                <p class="hot-products__price">$17.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
                <!-- Hot Products Two Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                    <div class="hot-products__single">
                        <div class="hot-products__single-inner">
                            <div class="hot-products__img-box">
                                <div class="hot-products__img">
                                    <img src="assets/images/resources/hot-product-1-8.jpg" alt="">
                                </div>
                            </div>
                            <div class="hot-products__content">
                                <div class="hot-products__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="hot-products__title"><a href="product-details.html">Tomattos</a></h3>
                                <p class="hot-products__price">$23.00</p>
                                <div class="hot-products__btn-box">
                                    <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                </div>
                            </div>
                            <div class="hot-products__icon-boxes">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hot Products Two Single End -->
            </div>
        </div>
    </div>
</section>
<!--Hot Products Two End-->

<!--Gallery One Start-->
<section class="gallery-one gallery-two">
    <div class="section-title text-center">
        <span class="section-title__tagline">Checkout Portfolio</span>
        <h2 class="section-title__title">We recently completed our
            <br> few works</h2>
    </div>
    <div class="container">
        <div class="row">
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/resources/gallery-1-1.jpg" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                            food</a></h3>
                                    <p class="gallery-one__sub-title">Vegan, Organic</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/resources/gallery-1-2.jpg" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                            food</a></h3>
                                    <p class="gallery-one__sub-title">Vegan, Organic</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/resources/gallery-1-3.jpg" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                            food</a></h3>
                                    <p class="gallery-one__sub-title">Vegan, Organic</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="gallery-one__single">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img">
                            <img src="assets/images/resources/gallery-1-4.jpg" alt="">
                        </div>
                        <div class="gallery-one__content-box">
                            <div class="gallery-one__content">
                                <div class="gallery-one__shape-1">
                                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                                </div>
                                <div class="gallery-one__title-box">
                                    <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                            food</a></h3>
                                    <p class="gallery-one__sub-title">Vegan, Organic</p>
                                </div>
                            </div>
                            <div class="gallery-one__arrow-box">
                                <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </div>
</section>
<!--Gallery One End-->

<!--Deal One Start-->
<section class="deal-one">
    <div class="deal-one__shape-4 float-bob-x">
        <img src="assets/images/shapes/deal-one-shape-4.png" alt="">
    </div>
    <div class="deal-one__shape-5 zoominout">
        <img src="assets/images/shapes/deal-one-shape-5.png" alt="">
    </div>
    <div class="deal-one__bg-img"
        style="background-image: url(assets/images/backgrounds/deal-one-bg-img-.jpg);"></div>
    <div class="deal-one__bg-img-2"
        style="background-image: url(assets/images/backgrounds/deal-one-bg-img-2.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="deal-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Sales on Weekly Offers</span>
                        <h2 class="section-title__title">Our special products deal <br>
                            of the day</h2>
                    </div>
                    <p class="deal-one__text">Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse
                        suscipit
                        sagittis leo sit met entum estibu dignissim.</p>
                    <div class="deal-one__coundown-box">
                        <div class="default-coundown">
                            <div class="box">
                                <div class="countdown time-countdown-two" data-countdown-time="2023/12/07">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4">
                <div class="deal-one__right">
                    <div class="deal-one__img wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="assets/images/resources/deal-one-img-1.png" alt="">
                        <div class="deal-one__shape-1 zoominout">
                            <img src="assets/images/shapes/deal-one-shape-1.png" alt="">
                        </div>
                        <div class="deal-one__shape-2 float-bob-x">
                            <img src="assets/images/shapes/deal-one-shape-2.png" alt="">
                        </div>
                        <div class="deal-one__shape-3 zoominout">
                            <img src="assets/images/shapes/deal-one-shape-3.png" alt="">
                        </div>
                        <div class="deal-one__big-text">Healthy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Deal One End-->

<!--News One Start-->
<section class="news-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">From the Blog Posts</span>
            <h2 class="section-title__title">Latest news updates
                <br> & articles</h2>
        </div>
        <div class="row">
            <!--News One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="news-one__content-box">
                        <ul class="news-one__meta list-unstyled">
                            <li>
                                <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                            </li>
                            <li>
                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title"><a href="news-details.html">Which healthy food growth
                                strategies required</a></h3>
                        <div class="news-one__bottom">
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More</a>
                            </div>
                            <div class="news-one__comment">
                                <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>20 Sep</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="news-one__content-box">
                        <ul class="news-one__meta list-unstyled">
                            <li>
                                <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                            </li>
                            <li>
                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title"><a href="news-details.html">Donec aliquet blandit enim
                                feugiat Suspendisse</a></h3>
                        <div class="news-one__bottom">
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More</a>
                            </div>
                            <div class="news-one__comment">
                                <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>20 Sep</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="news-one__content-box">
                        <ul class="news-one__meta list-unstyled">
                            <li>
                                <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                            </li>
                            <li>
                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title"><a href="news-details.html">luctus sit amet eu nibh tempus
                                turpis.</a></h3>
                        <div class="news-one__bottom">
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More</a>
                            </div>
                            <div class="news-one__comment">
                                <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>20 Sep</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
        </div>
    </div>
</section>
<!--Blog One End-->

<!--Subscribe One Start-->
<section class="subscribe-one">
    <div class="container">
        <div class="subscribe-one__inner">
            <div class="subscribe-one__shape-1 float-bob-x">
                <img src="assets/images/shapes/subscribe-one-shape-1.png" alt="">
            </div>
            <div class="subscribe-one__shape-2 float-bob-y">
                <img src="assets/images/shapes/subscribe-one-shape-2.png" alt="">
            </div>
            <div class="subscribe-one__shape-4 float-bob-y">
                <img src="assets/images/shapes/subscribe-one-shape-4.png" alt="">
            </div>
            <div class="subscribe-one__shape-5 zoominout">
                <img src="assets/images/shapes/subscribe-one-shape-5.png" alt="">
            </div>
            <div class="subscribe-one__inner-content">
                <div class="subscribe-one__shape-3 float-bob-x">
                    <img src="assets/images/shapes/subscribe-one-shape-3.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="subscribe-one__left">
                            <div class="icon">
                                <span class="icon-folder"></span>
                            </div>
                            <div class="subscribe-one__title-box">
                                <span class="subscribe-one__tagline">Quisque vel ortor</span>
                                <h2 class="subscribe-one__title">Subscribe to newsletter</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="subscribe-one__right">
                            <div class="subscribe-one__shape-6 float-bob-x">
                                <img src="assets/images/shapes/subscribe-one-shape-6.png" alt="">
                            </div>
                            <div class="subscribe-one__form-box">
                                <form class="subscribe-one__form mc-form" data-url="MC_FORM_URL">
                                    <div class="subscribe-one__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="subscribe-one__btn"><i
                                                class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="mc-form__response"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subscribe One End-->
@endsection