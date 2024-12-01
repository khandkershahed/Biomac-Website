<x-frontend-app-layout :title="'About Us'">
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="{{ asset('frontend/assets/images/page-titles/1.jpg') }}" alt="background">
            {{-- <img src="{{ asset('frontend/assets/images/page-titles/1.jpg') }}" alt="background"> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle-heading">About Us</h1>
                    <p class="pagetitle-desc">Your focus is on providing patients the best possible care and we’re here
                        to
                        help. To complement our comprehensive menu of tests, we provide resources to registered
                        healthcare
                        professionals to support your testing needs.
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="tests-services.html" class="btn btn-secondary mr-30">
                            <span>Tests and Services</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="team.html" class="btn btn-white  btn-white-style2">
                            <span>Meet our Leaders</span>
                        </a>
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
    <section class="fancybox-layout5 bg-overlay bg-overlay-primary-gradient pt-120 pb-110 bg-img"
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
