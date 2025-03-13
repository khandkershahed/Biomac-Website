{{-- <!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left">
                <a href="{{ route('home') }}"><img src="assets/images/logo-7.png" alt="" /></a>
            </figure>
            <div class="close-search pull-right">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="https://st.ourhtmldemo.com/new/Biogenix/{{ route('home') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Type your keyword and hit" required />
                            <button type="submit">
                                <i class="flaticon-magnifying-glass"></i>
                            </button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- main header -->
<header class="main-header header-style-one">
    <div class="logo-box">
        <figure class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ !empty(optional($setting)->site_logo_white) && file_exists(public_path('storage/' . optional($setting)->site_logo_white)) ? asset('storage/' . optional($setting)->site_logo_white) : asset('frontend/images/no-logo(217-55).jpg') }}"
                    alt="" />
            </a>
        </figure>
    </div>
    <div class="btn-box">
        <a href="{{ route('home') }}" class="header-btn"><i class="flaticon-calendar"></i>Appointment</a>
    </div>
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list clearfix">
                    @if (optional($setting)->address_line_two)
                        <li>
                            <div class="icon-box"><i class="flaticon-map"></i></div>
                            {{ optional($setting)->address_line_two }}
                        </li>
                    @endif
                </ul>
                <div class="top-right">
                    <ul class="social-links clearfix">
                        @if (optional($setting)->whatsapp_url)
                            <li>
                                <a href="{{ optional($setting)->whatsapp_url }}">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->facebook_url)
                            <li>
                                <a href="{{ optional($setting)->facebook_url }}">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->youtube_url)
                            <li>
                                <a href="{{ optional($setting)->youtube_url }}">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->instagram_url)
                            <li>
                                <a href="{{ optional($setting)->instagram_url }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->twitter_url)
                            <li>
                                <a href="{{ optional($setting)->twitter_url }}">
                                    <i class="fa-brands fa-square-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->linkedin_url)
                            <li>
                                <a href="{{ optional($setting)->linkedin_url }}">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        @endif

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current">
                                    <a href="{{ route('home') }}">Home</a>

                                </li>
                                <li class="">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('services') }}">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="{{ route('research.papers') }}">Research</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('training') }}">Recent Trainings</a>
                                </li>
                                <li class="">
                                    <li class="dropdown">
                                    <a href="{{ route('blog') }}">Blog</a>

                                </li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content">
                    <li class="support-box">
                        <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                        <a href="https://wa.me/{{ optional($setting)->whatsapp_number }}">
                            {{ optional($setting)->primary_phone }}
                        </a>
                    </li>
                    <li class="user-box">
                        <a href="{{ route('home') }}"><i class="flaticon-add-user"></i></a>
                    </li>
                    <li class="search-box-outer search-toggler">
                        <i class="flaticon-magnifying-glass"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <ul class="menu-right-content">
                    <li class="support-box">
                        <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                        <a href="https://wa.me/{{ optional($setting)->whatsapp_number }}">
                            {{ optional($setting)->primary_phone }}
                        </a>
                    </li>
                    <li class="user-box">
                        <a href="{{ route('home') }}"><i class="flaticon-add-user"></i></a>
                    </li>
                    <li class="search-box-outer search-toggler">
                        <i class="flaticon-magnifying-glass"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo">
            <a href="{{ route('home') }}"><img src="assets/images/logo-2.png" alt="" title="" /></a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li>
                    <a href="https://wa.me/{{ optional($setting)->whatsapp_number }}">
                        {{ optional($setting)->primary_phone }}
                    </a>
                </li>
                <li>
                    <a href="mailto:{{ optional($setting)->support_email }}">
                        {{ optional($setting)->support_email }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                @if (optional($setting)->whatsapp_url)
                    <li>
                        <a href="{{ optional($setting)->whatsapp_url }}">
                            <span class="fab fa-whatsapp"></span>
                        </a>
                    </li>
                @endif
                @if (optional($setting)->facebook_url)
                    <li>
                        <a href="{{ optional($setting)->facebook_url }}">
                            <span class="fa-brands fa-facebook"></span>
                        </a>
                    </li>
                @endif
                @if (optional($setting)->youtube_url)
                    <li>
                        <a href="{{ optional($setting)->youtube_url }}">
                            <span class="fa-brands fa-youtube"></span>
                        </a>
                    </li>
                @endif
                @if (optional($setting)->instagram_url)
                    <li>
                        <a href="{{ optional($setting)->instagram_url }}">
                            <span class="fab fa-instagram"></span>
                        </a>
                    </li>
                @endif
                @if (optional($setting)->twitter_url)
                    <li>
                        <a href="{{ optional($setting)->twitter_url }}">
                            <span class="fa-brands fa-square-twitter"></span>
                        </a>
                    </li>
                @endif
                @if (optional($setting)->linkedin_url)
                    <li>
                        <a href="{{ optional($setting)->linkedin_url }}">
                            <span class="fa-brands fa-linkedin"></span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu --> --}}


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo-3.png" alt=""></a>
            </figure>
            <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="https://st.ourhtmldemo.com/new/Biogenix/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Type your keyword and hit" required>
                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- main header -->
<header class="main-header header-style-two">
    <!-- header-top -->
    <div class="header-top-two">
        <div class="top-inner">
            <div class="top-left">
                <div class="link"><span>Training</span><a href="index-2.html">Upcoming<i
                            class="flaticon-right-arrow"></i></a></div>
                <ul class="info-list clearfix">
                    <li><i class="fa-solid fa-graduation-cap text-white"></i><a class="ms-3" href="tel:180045678901">1800.45.6789.01</a>
                    </li>
                    {{-- <li><i class="flaticon-map"></i>Corporate: 24 Global Str, SF 94112</li> --}}
                </ul>
            </div>
            {{-- <ul class="right-info clearfix">
                <li><a href="index-2.html">Career</a></li>
                <li><a href="index-2.html">Corporate Office</a></li>
                <li><a href="index-2.html">Download Report</a></li>
                <li><a href="index-2.html">Feedback</a></li>
            </ul> --}}
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="support-box">
            <div class="light-icon"><i class="flaticon-calendar-1"></i></div>
            <div class="inner">
                <div class="icon-box"><i class="flaticon-blood-test"></i></div>
                <a href="index-2.html">Book For 24/7</a>
                <h6>Sample Collection</h6>
                <div class="link"><a href="index-2.html"><i class="flaticon-right-arrow"></i></a></div>
            </div>
        </div>
        <div class="outer-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="{{ route('home') }}">
                            <img class="header-logo" src="{{ !empty(optional($setting)->site_logo_black) && file_exists(public_path('storage/' . optional($setting)->site_logo_black)) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/images/logo_black.png') }}"
                                alt="">
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                <li class="current"><a href="{{ route('about') }}">About</a></li>
                                <li class="current"><a href="{{ route('services') }}">Services</a></li>
                                <li class="current"><a href="{{ route('research.papers') }}">Research</a></li>
                                <li class="current"><a href="{{ route('training') }}">Recent Trainings</a></li>
                                <li class="current"><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="current"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    {{-- <ul class="menu-right-content">

                        <li class="user-box">
                            <a href="index.html"><i class="flaticon-add-user"></i></a>
                        </li>
                        <li class="search-box-outer search-toggler">
                            <i class="flaticon-magnifying-glass"></i>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index-2.html"><img src="assets/images/logo-3.png"
                                alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <ul class="menu-right-content">
                        <li class="cart-box">
                            <a href="shop.html"><i class="flaticon-add-to-cart"></i><span>0</span></a>
                        </li>
                        <li class="user-box">
                            <a href="index.html"><i class="flaticon-add-user"></i></a>
                        </li>
                        <li class="search-box-outer search-toggler">
                            <i class="flaticon-magnifying-glass"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-4.png" alt=""
                    title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
