<section class="page-title-area" style="background-image:url({{ asset('assets/img/bg/sub_page_hero_bg.jpeg') }});">
    <div class="right-border-shape">
        <img src="{{ asset('assets/img/shape/02.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="page-title-wrapper text-center">
                    <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>
                        {{ $pageTitle ?? '' }}
                    </h1>

                    <div class="breadcrumb">
                        <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <li>
                                <a href="{{ route('home') }}">
                                    Home <i class="far fa-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a class="active" href="#">
                                    {{ $pageTitle ?? '' }}
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>