@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero section --}}
    <div class="slider-area slider-area-02 pos-rel">
        <div class="right-border-shape">
            <img src="assets/img/shape/02.png" alt="">
        </div>
        <div class="slider-active">
            <div class="single-slider slider-height-02 pos-rel d-flex align-items-center" style="background-image: url(assets/img/slider/slider1.jpg); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="slider__content slider__content__02 text-left">
                                <h1 class="main-title mb-25" data-animation="fadeInUp2" data-delay=".2s">Restoring Hope. Empowering Lives. Building Brighter Futures.</h1>
                                <ul class="btn-list btn-list-02">
                                    <li><a class="theme_btn theme_btn2 theme_btn_bg_02" href="/about" data-animation="fadeInLeft" data-delay=".5s">explore more <i
                                                class="fa fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn theme_btn_bg_02" href="/contact" data-animation="fadeInLeft" data-delay=".5s">donate now <i
                                                class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-02 pos-rel d-flex align-items-center" style="background-image: url(assets/img/slider/slider2.jpg); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="slider__content slider__content__02 text-left">
                                <h1 class="main-title mb-25" data-animation="fadeInUp2" data-delay=".2s">Together, We Create a World of Dignity, Inclusion, and Opportunity for All.</h1>
                                <ul class="btn-list">
                                    <li><a class="theme_btn theme_btn2 theme_btn_bg_02" href="/about" data-animation="fadeInLeft" data-delay=".7s">explore more <i
                                                class="fa fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn theme_btn_bg_02" href="/contact" data-animation="fadeInLeft" data-delay=".7s">donate now <i
                                                class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- About Section --}}
     <section class="about-us-area about-area-02 pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="about-img mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="about-img__thumb">
                            <img src="assets/img/about/02.jpg" alt="">
                        </div>
                        <div class="about-img__style-text">
                            <img src="assets/img/about/02.png" alt="">
                        </div>
                        <div class="about-img__style-dot d-none d-lg-inline-block">
                            <img src="assets/img/shape/03.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="about__wrapper about-wrapper-02 pl-70">
                        <div class="section-title text-left mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6 class="left-line pl-75">Who We Are</h6>
                            <h2>Give Your Hand To<br>
                                <span>The Right Place</span></h2>
                            <p>Nkamson Charity Foundation, founded in 2020, is a nonprofit organization committed to restoring hope, inspiring compassion, and driving sustainable positive change in the lives of the less privileged and vulnerable members of society. We believe that every individual, regardless of background or circumstance, deserves access to basic needs, equal opportunities, and the dignity of a fulfilling life.</p>
                        </div>
                        <a class="theme_btn theme_btn_bg" href="about.html" data-animation="fadeInUp2" data-delay=".1s">explore more <i
                                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection