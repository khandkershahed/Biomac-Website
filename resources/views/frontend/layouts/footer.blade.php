<footer class="footer">
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
                                        <i class="contact-icon icon-phone"></i> <span>{{ optional($setting)->primary_phone }}</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                        <p>{{ optional($setting)->address_line_one }} <br> {{ optional($setting)->address_line_two }}</p>

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
                        {{-- <h6 class="footer-widget-title">Working Hours</h6>
                        <ul class="time-list list-unstyled">
                            <li>
                                <span class="day">Sat - Thurs</span><span class="time">09.00 - 22:00</span>
                            </li>
                            <li>
                                <span class="day">Friday</span><span class="time">Day off</span>
                            </li>
                        </ul> --}}
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
                            <li><a href="{{ optional($setting)->facebook_url }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ optional($setting)->linkedin_url }}"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="{{ optional($setting)->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="m-0 d-flex align-items-center">
                        <span>&copy; All Rights Reserved.</span>
                        <a class="color-secondary" href="{{ optional($setting)->copyright_url }}"> &nbsp; {{ optional($setting)->copyright_title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
