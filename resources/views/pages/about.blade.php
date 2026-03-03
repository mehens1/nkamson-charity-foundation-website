@extends('layouts.app')

@section('title', 'About Us')

@section('subpageHero')

@section('content')

<!-- =========================
    ABOUT SECTION
========================= -->
<section class="about-us-area-03 pt-130 pb-100">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="about-img mb-50">
                    <div class="about-img__thumb wow fadeInUp2 animated">
                        <img src="{{asset('assets/img/about/03.jpeg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="about__wrapper pl-65 wow fadeInUp2 animated">
                    <div class="section-title text-left mb-35">
                        <h6 class="left-line pl-75">Who We Are</h6>
                        <h2>Nkamson Charity Foundation<br>
                            <span>Restoring Hope. Empowering Lives.</span>
                        </h2>
                    </div>

                    <p>
                        Founded in 2020, Nkamson Charity Foundation is a nonprofit
                        organization committed to restoring hope, inspiring compassion,
                        and driving sustainable positive change in the lives of vulnerable
                        members of society.
                    </p>

                    <p>
                        We believe every individual deserves access to basic needs,
                        equal opportunities, and the dignity of a fulfilling life.
                        We do not merely provide aid — we build pathways to resilience,
                        independence, and sustainable development.
                    </p>

                    <a href="/donate" class="theme_btn theme_btn_bg mt-25">
                        Donate Now <i class="far fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================
    VISION & MISSION
========================= -->
<section class="pt-120 pb-120"
    style="background: linear-gradient(135deg, #f8f9fa 0%, #eef1f5 100%);">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Vision -->
            <div class="col-xl-5 col-lg-6 col-md-12 mb-40">
                <div class="p-50 text-center"
                     style="background:#ffffff;
                            border-radius:20px;
                            padding: 30px;
                            box-shadow:0 15px 40px rgba(0,0,0,0.05);">

                    <div class="mb-25">
                        <i class="fal fa-eye"
                           style="font-size:50px; color:#ff6b6b;"></i>
                    </div>

                    <h3 class="mb-20">Our Vision</h3>

                    <p>
                        A world where every person enjoys full human rights,
                        equal opportunities, and safe, inclusive environments
                        that nurture their potential and well-being.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-xl-5 col-lg-6 col-md-12 mb-40">
                <div class="p-50 text-center"
                     style="background:#ffffff;
                            border-radius:20px;
                            padding: 20px;
                            box-shadow:0 15px 40px rgba(0,0,0,0.05);">

                    <div class="mb-25">
                        <i class="fal fa-bullseye-arrow"
                           style="font-size:50px; color:#4e73df;"></i>
                    </div>

                    <h3 class="mb-20">Our Mission</h3>

                    <p>
                        To champion human rights, disability inclusion, equality,
                        and meaningful access for the most vulnerable populations —
                        empowering individuals to thrive with dignity and respect.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================
    CORE VALUES
========================= -->
<section class="pt-120 pb-100">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title text-center mb-70">
                    <h6 class="left-line pl-75 pr-75">Our Foundation</h6>
                    <h2>Core <span>Values</span></h2>
                </div>
            </div>
        </div>

        <div class="row">

            @php
                $values = [
                    'Humanity',
                    'Impartiality',
                    'Neutrality',
                    'Independence',
                    'Voluntary Service',
                    'Unity',
                    'Universality'
                ];
            @endphp

            @foreach($values as $value)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-40">
                <div class="text-center p-40"
                     style="background:#f9fafc;
                            border-radius:15px;
                            box-shadow:0 10px 25px rgba(0,0,0,0.03);
                            transition:0.3s;">

                    <div class="mb-20">
                        <i class="fal fa-heart"
                           style="font-size:35px; color:#ff6b6b;"></i>
                    </div>

                    <h5>{{ $value }}</h5>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!-- =========================
    CAUSES WE CARE ABOUT
========================= -->
<section class="pt-120 pb-100"
    style="background:linear-gradient(135deg,#4e73df,#224abe); color:#ffffff;">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title text-center mb-70">
                    <h6 class="left-line pl-75 pr-75 text-white">Our Focus Areas</h6>
                    <h2 class="text-white">The Causes We <span>Care About</span></h2>
                </div>
            </div>
        </div>

        <div class="row text-center">

            @php
                $causes = [
                    ['icon'=>'fa-shield-alt','title'=>'Protection'],
                    ['icon'=>'fa-heartbeat','title'=>'Health'],
                    ['icon'=>'fa-apple-alt','title'=>'Nutrition'],
                    ['icon'=>'fa-book','title'=>'Education'],
                    ['icon'=>'fa-briefcase','title'=>'Livelihood Support'],
                ];
            @endphp

            @foreach($causes as $cause)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-40">
                <div class="p-40"
                     style="background:rgba(255,255,255,0.1);
                            border-radius:15px;
                            backdrop-filter:blur(10px);">

                    <div class="mb-20">
                        <i class="fal {{ $cause['icon'] }}"
                           style="font-size:40px; color:#ffffff;"></i>
                    </div>

                    <h4>{{ $cause['title'] }}</h4>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!-- =========================
    DONATION CTA
========================= -->
<section class="pt-125 pb-125"
    style="background-image:url({{asset('assets/img/events/02.png')}});
           background-size:cover;
           background-position:center;
           position:relative;">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-8">

                <div class="text-center"
                     style="background:rgba(0,0,0,0.6);
                            padding:60px;
                            border-radius:20px;">

                    <div class="section-title white-title mb-40">
                        <h6 class="left-line pl-75 pr-75">Donate Now</h6>
                        <h2 class="text-white">
                            Raise Your Hand To The <br>
                            <span>Right Place</span>
                        </h2>
                    </div>

                    <a class="theme_btn theme_btn_bg mr-15" href="/donate">
                        Donate Now <i class="far fa-arrow-right"></i>
                    </a>

                    <a class="theme_btn theme-border-btn" href="/contact">
                        Contact Us <i class="far fa-arrow-right"></i>
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection