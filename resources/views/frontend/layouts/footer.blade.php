{{-- <footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget-title">Quick Contacts</h6>
                        <p>If you have any questions or need help, feel free to contact with our team.</p>
                        <ul class="contact-list list-unstyled">
                            <li>
                                <a href="mailto:{{ optional($setting)->info_email }}" class="__cf_email__">
                                    {{ optional($setting)->info_email }}
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{ optional($setting)->support_email }}" class="__cf_email__">
                                    {{ optional($setting)->support_email }}
                                </a>
                            </li>
                            <li>
                                @if (optional($setting)->primary_phone)
                                    <a href="https://wa.me/{{ optional($setting)->whatsapp_number }}">
                                        <i class="contact-icon icon-phone"></i>
                                        <span>{{ optional($setting)->primary_phone }}</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                        <p>{{ optional($setting)->address_line_one }} <br> {{ optional($setting)->address_line_two }}
                        </p>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget-title">About Us</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                <li><a href="{{ route('contact') }}">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget-title">Services</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Training & Certification</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget-title">Links</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget-time">
                        
                        <div class="d-flex align-items-center">
                            <a href="{{ route('contact') }}" class="btn btn-primary btn-block">
                                <span>Contact With Us</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-wrap justify-content-between">
                    <div>
                        <ul class="social-icons list-unstyled mb-0 mr-50">
                            <li><a href="{{ optional($setting)->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{ optional($setting)->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="{{ optional($setting)->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="m-0 d-flex align-items-center">
                        <span>&copy; All Rights Reserved.</span>
                        <a class="color-secondary" href="{{ optional($setting)->copyright_url }}"> &nbsp;
                            {{ optional($setting)->copyright_title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}


<footer class="main-footer">
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <img src="{{ !empty(optional($setting)->site_logo_white) && file_exists(public_path('storage/' . optional($setting)->site_logo_white)) ? asset('storage/' . optional($setting)->site_logo_white) : asset('frontend/images/no-logo(217-55).jpg') }}"
                                class="logo-dark" alt="BioMac Lab" style="height: 70px;">
                        </div>
                        <div class="text">
                            <p>
                                At BioMac Lab, we're unlocking the full potential of genomic science through
                                cutting-edge machine learning and genomics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 footer-column ps-lg-5">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                {{-- <li><a href="{{ route('contact') }}">Careers</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                {{-- <li><a href="index.html">Book a Test</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom justify-content-center">
            <div class="copyright">
                <p>
                    &copy; 2024 <a
                        href="{{ optional($setting)->copyright_url }}">{{ optional($setting)->copyright_title }}</a>
                    All Rights
                    Reserved.
                </p>
            </div>

        </div>
    </div>
</footer>
