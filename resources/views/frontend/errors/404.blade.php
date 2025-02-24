@extends('frontend.layouts.app')
@section('title', "Indigo - Pakistan's Favorite Grocery Store for Best Prices & Free Delivery")
@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/page-header-bg.webp)">
    </div>
    <div class="page-header__ripped-paper"
        style="background-image: url(frontend/assets/images/shapes/page-header-ripped-paper.png);"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Pages</li>
            </ul>
            <h2>404 error</h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--Error Page Start-->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <div class="error-page__title-box">
                        <h2 class="error-page__title">4<span>0</span>4
                        </h2>
                        <div class="error-page__title-img-1">
                            <img src="frontend/assets/images/resources/error-page-img-1.png" alt="">
                        </div>
                        <div class="error-page__title-img-2">
                            <img src="frontend/assets/images/resources/error-page-img-2.png" alt="">
                        </div>
                    </div>
                    <h3 class="error-page__tagline">Page not found!</h3>
                    <p class="error-page__text">Sorry we can't find that page! The page you are looking <br>
                        for was never existed.</p>
                    <form class="error-page__form">
                        <div class="error-page__form-input">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <a href="index.html" class="thm-btn error-page__btn">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Error Page End-->

<!--Subscribe One Start-->
<section class="subscribe-one">
    <div class="container">
        <div class="subscribe-one__inner">
            <div class="subscribe-one__shape-1">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-1.png" alt="">
            </div>
            <div class="subscribe-one__shape-2">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-2.png" alt="">
            </div>
            <div class="subscribe-one__shape-4">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-4.png" alt="">
            </div>
            <div class="subscribe-one__shape-5">
                <img src="frontend/assets/images/shapes/subscribe-one-shape-5.png" alt="">
            </div>
            <div class="subscribe-one__inner-content">
                <div class="subscribe-one__shape-3">
                    <img src="frontend/assets/images/shapes/subscribe-one-shape-3.png" alt="">
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
                            <div class="subscribe-one__shape-6">
                                <img src="frontend/assets/images/shapes/subscribe-one-shape-6.png" alt="">
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