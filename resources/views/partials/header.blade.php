<header id="top-menu">
        <div class="header-top-area  head-top-02 grey-bg pt-15 pb-15 d-none d-lg-block">
            <div class="container custom-container-03">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="top-cta text-left">
                            {{-- <i class="fa-solid fa-phone"></i> --}}
                            <span class="media-link"><i class="fa fa-envelope"></i> <a href="mailto:{{config('contact.emails.general')}}" class="__cf_email__" data-cfemail="1d6e686d6d726f695d7a707c7471337e7270">{{config('contact.emails.general')}}</a></span>

                            <span class="media-link"><i class="fa fa-phone"></i> <a href="mailto:{{config('contact.phones.general')}}" class="__cf_email__" data-cfemail="1d6e686d6d726f695d7a707c7471337e7270">{{config('contact.phones.general')}}</a></span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-none d-xl-block">
                        <div class="top-cta text-right">
                            <span class="media-link"><i class="fa fa-map-marker-alt"></i>{{config('contact.address')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area main-head-02">
            <div class="container custom-container-03">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a class="logo-img img-fluid" href="/">
                                <img class="img-fluid" width="100" src="{{asset('assets/img/logo/logo.png')}}" alt="NCF Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9 d-none d-lg-block text-lg-center text-xl-right">
                        <div class="main-menu main-menu-02 d-none d-lg-block">
                            <nav>
                                <ul>
                                    {{-- <li><a class="active" href="#">Home <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home Style 1</a></li>
                                            <li><a href="index-2.html">Home Style 2</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact</a></li>

                                    {{-- <li><a href="#">Project <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Project One</a></li>
                                        </ul>
                                    </li> --}}


                                    {{-- <li><a href="#">Events <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="events.html">Events Grid</a></li>
                                            <li><a href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                   <li><a href="#">Project <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="project-01.html">Project One</a></li>
                                            <li><a href="project-02.html">Project Two</a></li>
                                            <li><a href="project-03.html">Project Three</a></li>
                                            <li><a href="project-gallery.html">Project Gallery</a></li>
                                            <li><a href="project-image.html">Project Image</a></li>
                                            <li><a href="project-video.html">Project Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blogs <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="history.html">History</a></li>
                                            <li><a href="career.html">Career</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-1 col-md-6 col-6 text-right d-flex align-items-center justify-content-end">
                        <div class="quote-btn mr-10">
                            <a href="contact.html" class="theme_btn theme_btn_bg">get a quote <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="hamburger-menu">
                            <a href="javascript:void(0);">
                                <img src="assets/img/logo/bar-icon-01.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>