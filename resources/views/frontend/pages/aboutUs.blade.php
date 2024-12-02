<x-frontend-app-layout :title="'About Us'">
    <!-- page-title -->
    <section class="page-title">
        @if (optional($banner)->bg_image)
        <div class="bg-layer" style="background-image: url({{ asset('storage/' . optional($banner)->bg_image) }});"></div>
        @else
        <div class="bg-layer" style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }});"></div>
        @endif
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- about-style-three -->
    <section class="about-style-three sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-23.png') }});"></div>
                            <div class="shape-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-24.png') }});"></div>
                        </div>
                        <div class="thumb-box">
                            <figure class="thumb thumb-1">
                                <img src="{{ asset('images/about_thumb_4.png') }}" alt="">
                            </figure>
                            <figure class="thumb thumb-2">
                                <img src="{{ asset('images/about_thumb_5.png') }}" alt="">
                            </figure>
                            <figure class="thumb thumb-3">
                                <img src="{{ asset('images/about_thumb_6.png') }}" alt="">
                            </figure>
                        </div>
                        <figure class="image">
                            <img src="{{ asset('images/image_2.jpeg') }}" alt="">
                        </figure>
                        <div class="text">
                            <h2>12<span>+</span></h2>
                            <h6>Years of Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">About Lab</span>
                            <h2>Experiment with the best lab products</h2>
                        </div>
                        <div class="text">
                            <p>Human happiness the way they make shows is, they make one show that show's called a pilot
                                then they show that show to the people who make shows, and on the pilots get picked and
                                become.</p>
                        </div>
                        <div class="inner-box">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                <h3>Highly Advanced <br />Laboratory</h3>
                                <p>Sportacus andrew weatherall goose Refined gentlemen mario des lynam alpha trion zap
                                    rowsdower</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-test-tube"></i></div>
                                <h3>Comprehensive <br />Test Menu</h3>
                                <p>Sound like a true meathead in your mockups withIpsum specializing in a lorem ipsum
                                    made up.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- funfact-section -->
    <section class="funfact-section about-page alternat-2 centred">
        <div class="auto-container">
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-rating"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="4.5">0</span><span>/5</span>
                                </div>
                                <h3>Rating from Over 2.5k Beneficiaries</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-atom"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="36789">0</span>
                                </div>
                                <h3>Tests Completed Rapidly and Precisely.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-lab"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                </div>
                                <h3>Accurate and Precise in Test Results</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- certification-section -->
    <section class="certification-section">
        <div class="bg-layer" style="background-image: url(assets/images/background/certification-bg.jpg);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-inner">
                        <div class="shape-box">
                            <div class="shape shape-1 hexagon_shape"></div>
                            <div class="shape shape-2 hexagon_shape"></div>
                            <div class="shape shape-3 hexagon_shape"></div>
                            <div class="shape shape-4 hexagon_shape"></div>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <figure class="image-box"><img src="assets/images/resource/certification-1.png"
                                    alt=""></figure>
                            <figure class="image-box"><img src="assets/images/resource/certification-1.png"
                                    alt=""></figure>
                            <figure class="image-box"><img src="assets/images/resource/certification-1.png"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- certification-section end -->


    <!-- statements-section -->
    <section class="statements-section centred">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">Statements</span>
                <h2>The most competitive and <br />productive service</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one">
                        <div class="inner-box">
                            <div class="text">
                                <h3>Mission Statement</h3>
                                <p>The way they make shows is they make one show that show to the people.</p>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/statements-1.jpg"
                                        alt=""></figure>
                                <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                                <div class="pattern-1"
                                    style="background-image: url(assets/images/shape/shape-26.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/statements-2.jpg"
                                        alt=""></figure>
                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                <div class="pattern-1"
                                    style="background-image: url(assets/images/shape/shape-26.png);"></div>
                            </div>
                            <div class="text">
                                <h3>Vision Statement</h3>
                                <p>Some pilots get picked & become television programs don't, become nothing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one">
                        <div class="inner-box">
                            <div class="text">
                                <h3>Our Commitment</h3>
                                <p>Taking the mick know your onions pulled a right corker anorak mince pies.</p>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/statements-3.jpg"
                                        alt=""></figure>
                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                <div class="pattern-1"
                                    style="background-image: url(assets/images/shape/shape-26.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statements-section end -->


    <!-- chooseus-section -->
    <section class="chooseus-section about-page bg-color-1">
        <div class="bg-layer" style="background-image: url(assets/images/background/chooseus-bg.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">Why Choose Us</span>
                <h2>Leaders in diagnostic <br />services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Quality Services</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Accurate Report</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Quick Process</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Patient Support</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Modern Tech</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);">
                            </div>
                            <div class="icon-box"><i class="flaticon-check-mark"></i></div>
                            <span>We provide</span>
                            <h3>Expert Technicians</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->
    <section class="page-title-layout1 page-title-light pb-0 bg-parallax">
        <div class="bg-img">
            @if (optional($banner)->bg_image)
                <img class="img-fluid" src="{{ asset('storage/' . optional($banner)->bg_image) }}" alt="">
            @endif
            {{-- <img src="{{ asset('frontend/assets/images/page-titles/1.jpg') }}" alt="background"> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle-heading">About Us</h1>
                    <p class="pagetitle-desc">
                        Our Lab focuses on integrating bioinformatics, genomics, and machine learning to drive
                        innovative solutions. We specialize in complex genomic analysis, pangenomics, antimicrobial
                        resistance studies, and machine learning applications in drug design and microbial genomics,
                        pushing the boundaries of genomic science and precision medicine.
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        {{-- <a href="tests-services.html" class="btn btn-secondary mr-30">
                            <span>Tests and Services</span>
                            <i class="icon-arrow-right"></i>
                        </a> --}}
                        <a href="{{ route('contact') }}" class="btn btn-white  btn-white-style2">
                            <span>Contact Us</span>
                        </a>
                        {{-- <a href="team.html" class="btn btn-white  btn-white-style2">
                            <span>Meet our Leaders</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"><i class="icon-home"></i> <span>Home</span></a>
                        </li>
                        {{-- <li class="breadcrumb-item">
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li> --}}
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- ========================
        About Section 1
      =========================== -->
    <section class="fancybox-layout5 pt-120 pb-110 bg-img"
        style="background-image: url({{ asset('backend/assets/images/backgrounds/1.jpg') }}); background-size: cover; background-position: center center;">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading-layout2 text-center heading-light mb-50">
                        <h2 class="heading-subtitle color-secondary">Your Trusted Partner in Medicine Tesing!</h2>
                        <h3 class="heading-title">Unwavering Commitment to Excellence and Quality of our Tests and
                            Results.</h3>
                        <p class="heading-desc mb-30">With the support of our diagnostics capabilities to deliver drug
                            trials
                            that
                            are both reliable and rigorous, we're able to support clinical trial research efforts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 fancybox-container">
                    <!-- fancybox item #1 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-equipment"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Improving Health through Automation</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #2 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-drugs"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Partnering for Better Health Outcomes</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #3 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-chemical10"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Innovations Vaccines Drug Development</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #4 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-chemical11"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Trust Towards our Shared Purpose</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #5 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-class"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Empowered Change, Act, and to Adapt</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #6 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-chemical9"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">New Advanced Instruments</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #7 -->
                    <div class="fancybox-item bg-img"
                        style="background-image: url({{ asset('backend/assets/images/features/1.jpg') }}); background-size: cover; background-position: center center;">

                        <div class="fancybox-body">
                            <div class="fancybox-icon">
                                <i class="icon-chemical2"></i>
                            </div><!-- /.fancybox-icon -->
                            <h4 class="fancybox-title">Strict Quality Practices</h4>
                            <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                <i class="icon-arrow-right icon-filled"></i>
                            </a>
                        </div><!-- /.fancybox-body -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <p class="color-white font-weight-bold mt-50 mb-40">Your focus is on providing patients the best
                        possible
                        care and we’re here to help.</p>
                    <a href="contact-us.html" class="btn btn-secondary btn-secondary-style2 btn-xl">
                        <span>Accreditation &amp; Licensing</span> <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- ========================
        About Section 1
      =========================== -->
    <!-- ========================
        About Section 1
      =========================== -->
    <!-- ========================
        About Section 1
      =========================== -->

</x-frontend-app-layout>
