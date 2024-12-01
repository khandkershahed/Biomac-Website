<x-frontend-app-layout :title="'Home'">
    <!-- ============================
        Slider
    ============================== -->
    @if ($sliders)
        <section class="banner-section banner-style-one">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                @foreach ($sliders as $slider)
                    <div class="slide-item">
                        <div class="image-layer" style="background-image: url({{ asset('storage/' . $slider->bg_image) }})"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content-inner">
                                    <span class="count-text">01.</span>
                                    <h5>The best at the test</h5>
                                    <h2>Committed to Quality Laboratory Products</h2>
                                    <ul class="list clearfix">
                                        <li>
                                            <div class="icon-box">
                                                <i class="flaticon-laboratory-1"></i>
                                            </div>
                                            <h3>80+</h3>
                                            <h4>Pathology Labs</h4>
                                        </li>
                                        <li>
                                            <div class="icon-box">
                                                <i class="flaticon-laboratory"></i>
                                            </div>
                                            <h3>150+</h3>
                                            <h4>Collection Centers</h4>
                                        </li>
                                    </ul>
                                    <div class="btn-box">
                                        <a href="index.html" class="theme-btn light">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!-- ========================
        About Layout 2
      =========================== -->
    <section class="about-layout2 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8">
                    <div class="about-text mb-30">
                        {{-- <div class="about-badge">
                            <div class="about-icon"><i class="icon-beaker"></i></div>
                        </div> --}}
                        <div class="about-text-banner">
                            <div class="heading-layout2">
                                <h3 class="heading-title mb-0">Unlocking life's code through genomics and machine
                                    learning to drive innovation and transform health.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="about-img d-flex justify-content-end">
                        <img src="{{ !empty(optional($home_slider_bottom_first)->bg_image) && file_exists(public_path('storage/' . optional($home_slider_bottom_first)->bg_image)) ? asset('storage/' . optional($home_slider_bottom_first)->bg_image) : asset('frontend/assets/images/about/2.png') }}"
                            alt="about">
                        {{-- <img src="{{ asset('frontend/assets/images/about/2.png') }}" alt="about"> --}}
                    </div>
                </div><!-- /.col-12 -->
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-4">
                    <div class="about-Text">
                        <p class="mb-30">
                            As the founder of BioMac Lab, I am excited to share the transformative impact of genomic
                            science and its synergy with machine learning. With Next Generation Sequencing (NGS), we are
                            revolutionizing how we decode complex biological data, rapidly and precisely.

                        </p>
                        <p class="mb-30">
                            Machine
                            learning enables us to uncover patterns, predict outcomes, and derive insights from vast
                            datasets, opening doors to personalized medicine, disease prevention, microbial analysis,
                            and evolutionary studies.
                        </p>
                        {{-- <ul class="features-list-layout2 list-unstyled mb-40">
                            <li class="feature-item">
                                <i class="feature-icon"></i>
                                <h4 class="feature-title mb-0">Health, Wellness and Insurance</h4>
                            </li>
                            <li class="feature-item">
                                <i class="feature-icon"></i>
                                <h4 class="feature-title mb-0">97% customer satisfaction rate</h4>
                            </li>
                            <li class="feature-item">
                                <i class="feature-icon"></i>
                                <h4 class="feature-title mb-0">Family Scholarship Program</h4>
                            </li>
                        </ul> --}}
                        <p class="mb-30">
                            At BioMac Lab, we strive to push these boundaries, merging
                            bioinformatics, genomics, and intelligent algorithms to understand life's code, address
                            global health challenges, and drive innovation in biological sciences.
                        </p>
                        <div class="author-meta d-flex flex-wrap align-items-center mr-30">
                            <div class="author-img">
                                <img src="{{ asset('frontend/assets/images/sk_injamamul_islam.png') }}" alt="thumb">
                            </div>
                            <div>
                                <h4 class="author-title">SK Injamamul Islam</h4>
                                <span class="author-desc">Our Founder</span>
                            </div>
                            {{-- <img src="{{ asset('frontend/assets/images/about/singnture2.png') }}" class="author-singnture" alt="singnture"> --}}
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
       Banner Layout 8
      =========================== -->
    <section class="banner-layout8 bg-primary">
        <div class="top-shape"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-5 banner-content">
                    <div class="banner-text">
                        <div class="heading-layout2 heading-light">
                            <h3 class="heading-title">
                                Pioneering Genomic Discovery through Machine Learning Integration
                            </h3>
                            <p class="heading-desc font-weight-bold mb-40">
                                At BioMac Lab, we combine the power of genomics with advanced machine learning to drive
                                transformative discoveries. From analyzing complex genomic datasets to accelerating
                                precision drug development and enhancing immunoinformatics capabilities, our solutions
                                unlock the full potential of genomic science
                            </p>
                        </div>
                        <div class="d-flex flex-wrap mb-90">
                            <a href="{{ route('contact') }}" class="btn btn-white btn-white-style2 mr-30">
                                <span>Looking for More Info!</span> <i class="icon-arrow-right"></i>
                            </a>
                            {{-- <a href="{{ route('contact') }}" class="btn btn-light btn-outlined">Contact Us</a> --}}
                        </div>
                        {{-- <div class="fancybox-layout2 fancybox-light">
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-chemistry"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">World Class Diagnostics</h4>
                                    <p class="fancybox-desc">We have developed some of the world's most advanced
                                        testing capabilities
                                        to help improve health and lives.</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-drug"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Leader in Drug Development</h4>
                                    <p class="fancybox-desc">With the support of our diagnostics capabilities to
                                        deliver drug trials
                                        that are both reliable and rigorous.</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                        </div> --}}
                    </div><!-- /.banner-text -->
                </div><!-- /.col-xl-5 -->
                <div class="col-12 col-xl-7 d-flex align-items-center pl-50 pr-0">
                    <div class="banner-img">
                        <div class="bg-img">
                            <img src="{{ asset('frontend/assets/images/home/genomic_discovery.png') }}"
                                alt="backgrounds">
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner Layout8 -->


</x-frontend-app-layout>
