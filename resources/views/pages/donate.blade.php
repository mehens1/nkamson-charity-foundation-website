@extends('layouts.app')

@section('title', 'Donate')

@section('subpageHero')

@section('content')

<!-- donate-intro-area start -->
<section class="donate-intro-area pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title text-center mb-50 wow fadeInUp2 animated">
                    <h6 class="left-line pl-75 pr-75">Support Our Mission</h6>
                    <h2>Your Kindness <br>
                        <span>Can Change A Life Today</span></h2>
                    <p>
                        Every contribution you make to Nkamson Charity Foundation
                        directly supports food distribution, education sponsorship,
                        medical outreach, and empowerment programs for vulnerable communities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- donate-intro-area end -->


<!-- main-donation-card start -->
<section class="main-donation-area pb-120">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 wow fadeInUp2 animated">

                <div class="contact-box text-center p-50 shadow-lg" 
                     style="border-radius:20px; background:#ffffff;">

                    <div class="contact-box__icon mb-25">
                        <i class="fal fa-university" style="font-size:45px;"></i>
                    </div>

                    <div class="contact-box__content">

                        <h4 class="mb-10">Bank Transfer Details</h4>
                        <h5 class="mb-25">UBA Bank</h5>

                        <div class="mb-20">
                            <p><strong>Account Name</strong></p>
                            <h5>{{config("contact.name.full")}}</h5>
                        </div>

                        <div class="mb-20">
                            <p><strong>Account Number</strong></p>
                            <h2 style="letter-spacing:3px; font-weight:700;">
                                1024492424
                            </h2>
                        </div>

                        <div class="mb-20">
                            <p><strong>Bank Name</strong></p>
                            <h5>UBA Bank</h5>
                        </div>

                        <hr class="mt-30 mb-30">

                        <p class="mb-20">
                            After making your donation, kindly send proof of payment
                            to <strong>{{ config('contact.emails.support') }}</strong>
                            so we can acknowledge your support.
                        </p>

                        <a href="/contact" class="theme_btn theme_btn_bg">
                            Notify Us <i class="far fa-arrow-right"></i>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- main-donation-card end -->

<!-- appreciation-cta start -->
<section class="cta-area theme-bg pt-55 pb-25">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="cta-wrapper">
                    <div class="section-title mb-30">
                        <h2>Together, We Restore Hope.</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="cta-wrapper">
                    <div class="cta-btn text-left text-md-right">
                        <a class="theme_btn theme_btn_bg" href="/">
                            Back Home <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- appreciation-cta end -->

@endsection