<aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="/">
                    <img src="assets/img/logo/logo.png" alt="NCF Logo" width="100">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        Nkamson Charity Foundation, founded in 2020, is a nonprofit organization committed to restoring hope, inspiring compassion, and driving sustainable positive change in the lives of the less privileged and vulnerable members of society. We believe that every individual, regardless of background or circumstance, deserves access to basic needs, equal opportunities, and the dignity of a fulfilling life.
                    </p>
                    <a class="theme_btn theme_btn_bg" href="/about">Know Us More</a>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Contact Info</h4>
                    <p> <i class="fal fa-address-book"></i>{{config('contact.address')}}</p>
                    <p> <i class="fal fa-phone"></i>{{config('contact.phones.general')}}</p>
                    <p> <i class="fal fa-envelope-open"></i> <a href="mailto:{{config('contact.emails.general')}}" class="__cf_email__" data-cfemail="157c7b737a55706d74786579703b767a78">{{config('contact.emails.general')}}</a> </p>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                 @include('partials.navbar')
            </ul>
        </nav>
    </aside>

    <div class="body-overlay"></div>