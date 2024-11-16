<header class="header header-layout1">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact-list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li>
                                <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                            </li>
                            @if (optional($setting)->address_line_two)
                                <li>
                                    <i class="icon-location"></i><a href="#">Location:
                                        {{ optional($setting)->address_line_two }}</a>
                                </li>
                            @endif
                            <li>
                                <i class="icon-clock"></i><a href="contact-us.html">Sat - Thurs: 9:00 am - 7:00 pm</a>
                            </li>
                        </ul><!-- /.contact-list -->
                        <div class="d-flex align-items-center">
                            {{-- <ul class="topbar-nav list-unstyled d-flex mb-0 mr-30">
                                <li><a href="#">Insurance</a></li>
                                <li><a href="#">Provider Services</a></li>
                                <li><a href="#">Help</a></li>
                            </ul> --}}
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                @if (optional($setting)->facebook_url)
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if (optional($setting)->instagram_url)
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if (optional($setting)->twitter_url)
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if (optional($setting)->linkedin_url)
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                            </ul><!-- /.social-icons -->
                            <div class="miniPopup-language-area">
                                <button class="miniPopup-language-trigger" type="button">
                                    <img src="{{ asset('frontend/assets/images/flags/en.png') }}" style="width: 15px;"
                                        alt="en">
                                    <span>English</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                    class="logo-dark" alt="BioMac Lab">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="mainNavigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-item-link">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="contact-us.html" class="nav-item-link">Contacts</a>
                    </li> --}}
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">About Us</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('about-us') }}" class="nav-item-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="team.html" class="nav-item-link">Team Members</a>
                            </li>
                            <li class="nav-item">
                                <a href="faqs.html" class="nav-item-link">Help & FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a href="careers.html" class="nav-item-link">Careers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-item-link">Research Papers</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="blog.html" class="nav-item-link">Blog Grid</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-single-post.html" class="nav-item-link">Single Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-item-link">Contact Us</a>
                    </li>

                </ul>
                <ul class="header-actions d-flex align-items-center position-relative list-unstyled mb-0">
                    <li class="d-none d-xl-flex align-items-center">
                        <a href="tests-book-visit.html" class="btn btn-primary btn-outlined btn-contact">
                            Book a Lab Visit
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="action-btn action-btn-cart">
                            <i class="icon-cart"></i><span class="cart-counter">3</span>
                        </a>
                        <div class="cart-minipopup">
                            <ul class="list-unstyled">
                                <li class="cart-item">
                                    <div class="cart-img"><img src="assets/images/products/1.jpg" alt="thumb">
                                    </div>
                                    <div class="cart-content">
                                        <a class="cart-title" href="shop-single.html">Green Tea</a>
                                        <span class="cart-price">$ 4.00</span>
                                        <button class="cart-delete">&times;</button>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="cart-img"><img src="assets/images/products/2.jpg" alt="thumb">
                                    </div>
                                    <div class="cart-content">
                                        <a class="cart-title" href="shop-single.html">Biotin Complex </a>
                                        <span class="cart-price">$ 26.00</span>
                                        <button class="cart-delete">&times;</button>
                                    </div>
                                </li>
                            </ul>
                            <div class="cart-total">
                                <span>Total:</span>
                                <span>$14.00</span>
                            </div>
                            <a href="shopping-cart.html" class="btn btn-secondary btn-block">View Cart</a>
                        </div>
                    </li> --}}
                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div>
            <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                <div class="contact-phone d-flex align-items-center">
                    <div class="contact-icon"><i class="icon-chemical9"></i></div>
                    <div>
                        <span class="d-block">Call Us Now:</span>
                        <a class="phone-link d-block" href="tel:00201061245741">02 01061245741</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
