<footer class="footer-area heding-bg pos-rel pt-100" style="background-image:url(assets/img/bg/02.png)">
        <div class="container">
            <div class="footer-bottom-area">
                <div class="row mb-30">
                    
                    <div class="col-xl-8 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.7s'>
                        <div class="footer__widget mb-25 pl-85">
                            <h5 class="semi-title mb-25">About Us</h5>
                            <p class="mb-10">Nkamson Charity Foundation, founded in 2020, is a nonprofit organization committed to restoring hope, inspiring compassion, and driving sustainable positive change in the lives of the less privileged and vulnerable members of society. We believe that every individual, regardless of background or circumstance, deserves access to basic needs, equal opportunities, and the dignity of a fulfilling life.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.9s'>
                        <div class="footer__widget fot_abot mb-30 pl-85">
                            <h5 class="semi-title mb-25">Reach Us</h5>
                            <ul class="fot-list address-list">
                                {{-- <li><a href="#"><i class="fa fa-map-marker-alt"></i>{{config('contact.address')}}</a></li> --}}
                                <li><a href="#"><i class="fa fa-map-pin"></i>{{config('contact.address')}}</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> <span class="__cf_email__" data-cfemail="e4979194948b9690a48389858d88ca878b89">{{config('contact.emails.general')}}</span></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>{{config('contact.phones.general')}}</a></li>
                            </ul>

                            <!-- Social Media -->
        <div class="footer-social mt-20">
            <h6 class="mb-15">Follow Us</h6>

            <a href="{{config("contact.socials.facebook")}}" target="_blank" class="socials"
               style="background:#3b5998;">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="{{config("contact.socials.instagram")}}" target="_blank" class="socials"
               style="background:#E1306C">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="{{config("contact.socials.twitter")}}" target="_blank" class="socials"
               style="background:#1DA1F2">
                <i class="fab fa-twitter"></i>
            </a>

            <a href="{{config("contact.socials.linkedin")}}" target="_blank" class="socials"
               style="background:#0077B5">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copy-right-area pt-30">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="copyright mb-30 text-md-center">
                            <p>© 2026 {{config('contact.name.full')}}. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>