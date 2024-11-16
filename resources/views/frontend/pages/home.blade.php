<x-frontend-app-layout :title="'Home'">
    <!-- ============================
        Slider
    ============================== -->
    @if ($sliders)
        <section class="slider">
            <div class="slick-carousel carousel-dots-light m-slides-0"
                data-slick='{"slidesToShow": 1,"autoplay": true, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
                @foreach ($sliders as $slider)
                    <div class="slide-item bg-overlay align-v-h">
                        <div class="bg-img"><img src="{{ asset('storage/' . $slider->bg_image) }}" alt="slide img"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                    <div class="slide-content">
                                        <span class="slide-subtitle">{{ $slider->badge }}</span>
                                        <h2 class="slide-title">{{ $slider->title }}</h2>
                                        <p class="slide-desc">
                                            {{ $slider->subtitle }}
                                        </p>
                                        @if (!empty($slider->button_link) || !empty($slider->button_name))
                                            <div class="d-flex flex-wrap align-items-center">
                                                <a href="{{ $slider->button_link }}"
                                                    class="btn btn-white btn-white-style2 mr-30">
                                                    <span>{{ $slider->button_name }}</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        @endif
                                    </div><!-- /.slide-content -->
                                </div><!-- /.col-xl-7 -->
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 offset-xl-1">
                                    <div class="fancybox-layout5 p-0 m-0">
                                        <div class="fancybox-container">
                                            <!-- fancybox item #1 -->
                                            <div class="fancybox-item">
                                                <div class="fancybox-body">
                                                    <div class="fancybox-icon">
                                                        <i class="fas fa-dna"></i>
                                                    </div><!-- /.fancybox-icon -->
                                                    <h4 class="fancybox-title">Enhancing genomics data accuracy &
                                                        performance
                                                    </h4>
                                                </div><!-- /.fancybox-body -->
                                            </div><!-- /.fancybox-item -->
                                            <!-- fancybox item #2 -->
                                            <div class="fancybox-item">
                                                <div class="fancybox-body">
                                                    <div class="fancybox-icon">
                                                        <i class="fas fa-flask"></i>
                                                    </div><!-- /.fancybox-icon -->
                                                    <h4 class="fancybox-title">Ensuring reliable, reproducible protocols
                                                    </h4>
                                                </div><!-- /.fancybox-body -->
                                            </div><!-- /.fancybox-item -->
                                            <!-- fancybox item #3 -->
                                            <div class="fancybox-item">
                                                <div class="fancybox-body">
                                                    <div class="fancybox-icon">
                                                        <i class="fas fa-laptop-code"></i>
                                                    </div><!-- /.fancybox-icon -->
                                                    <h4 class="fancybox-title">Customizing computation for informatics
                                                    </h4>
                                                </div><!-- /.fancybox-body -->
                                            </div><!-- /.fancybox-item -->
                                        </div><!-- /.fancybox-container -->
                                    </div><!-- /.fancybox-layout5 -->
                                </div><!-- /.col-xl-3 -->
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
                        <div class="about-badge">
                            <div class="about-icon"><i class="icon-beaker"></i></div>
                        </div>
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
                                <img src="{{ asset('frontend/assets/images/sk_injamamul_islam.png') }}"
                                    alt="thumb">
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
                            <img src="{{ asset('frontend/assets/images/banners/8.jpg') }}" alt="backgrounds">
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner Layout8 -->

    <!-- ========================
          Services Layout 4
      =========================== -->
    <section class="services-layout4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading-layout2 text-center mb-50">
                        <h2 class="heading-subtitle">Find the Right Test for Your Needs!</h2>
                        <h3 class="heading-title">Providing the Diverse Needs of Your Patient Community</h3>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 1100, "settings": {"slidesToShow": 2}},{"breakpoint": 992, "settings": {"slidesToShow": 1}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <!-- service item #1 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-education4 icon-item"></i>
                                    <i class="icon-education4 icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">General Diagnostic Tests</a>
                                </h4>
                                <p class="service-desc">We are leader in ensuring exceptional quality testing in our
                                    facilities,
                                    driven
                                    by a passion to ensure you have critical information about your health give you
                                    access to
                                    diagnostic...
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/7.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                        <!-- service item #2 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-biology6 icon-item"></i>
                                    <i class="icon-biology6 icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">Specialized Genetic Tests</a>
                                </h4>
                                <p class="service-desc">Genetic testing can be useful at different stages of life, like
                                    discovering
                                    that a family member has a condition that can be passed down or struggling to find a
                                    treatment for
                                    this ....
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/8.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                        <!-- service item #3 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-chemical4 icon-item"></i>
                                    <i class="icon-chemical4 icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">Naturopathic Tests</a>
                                </h4>
                                <p class="service-desc">From hormone levels, to food reactions, to identifying
                                    environmental toxins,
                                    we
                                    provide you with objective information so you can map your path to health and
                                    wellness and more....
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/9.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                        <!-- service item #4 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-allotropy icon-item"></i>
                                    <i class="icon-allotropy icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">Food Sensitivity Tests</a>
                                </h4>
                                <p class="service-desc">IgG food reactions can take hours or days to develop, making
                                    difficult to
                                    determine which food is responsible for the reaction without doing testing fast and
                                    specific way....
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/10.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                        <!-- service item #5 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-drugs icon-item"></i>
                                    <i class="icon-drugs icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">Genova Diagnostics Tests</a>
                                </h4>
                                <p class="service-desc">Genova Diagnostics is an internationally renowned lab committed
                                    to only the
                                    highest standards. Chronic diseases are complex, but with Genova's system-based
                                    testing so the ....
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/11.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                        <!-- service item #6 -->
                        <div class="service-item">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="icon-beaker icon-item"></i>
                                    <i class="icon-beaker icon-item"></i>
                                </div>
                                <h4 class="service-title">
                                    <a href="tests-single-test.html">Hormone Insights Tests</a>
                                </h4>
                                <p class="service-desc">Hormones are essential for the body to function optimally.
                                    Imbalances may
                                    result in many health conditions. Hormone Insights is a detailed urine analysis that
                                    measures....
                                </p>
                            </div><!-- /.service-body -->
                            <div class="service-img">
                                <img src="assets/images/services/12.jpg" alt="service">
                            </div><!-- /.service-img -->
                            <a href="tests-single-test.html" class="service-more">
                                <svg class="service-more-svg">
                                    <path stroke-width="2px" stroke="white" fill="transparent"
                                        d="M105.000,82.843 L104.995,82.843 C104.982,87.968 102.169,92.700 97.606,95.262 L62.390,115.041 C57.816,117.610 52.181,117.610 47.607,115.041 L12.390,95.262 C7.827,92.700 5.014,87.968 5.001,82.843 L5.000,82.843 L5.000,82.821 C5.000,82.817 4.999,82.812 4.999,82.808 L5.000,82.808 L5.000,39.148 L4.992,39.148 C4.992,34.010 7.810,29.262 12.383,26.694 L47.600,6.915 C52.174,4.346 57.809,4.346 62.383,6.915 L97.599,26.694 C102.157,29.253 104.967,33.977 104.987,39.094 L105.000,39.094 L105.000,82.843 Z">
                                    </path>
                                </svg>
                                <i class="plus-icon">+</i>
                            </a>
                        </div><!-- /.service-item -->
                    </div><!-- /.slick-carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="cat-area pt-50 pb-50 mt-60 border-top">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <p class="font-weight-bold">Whether you are a provider or patient, when you need trusted
                            information to
                            make
                            confident health
                            decisions, consider us.
                            <a href="#" class="color-secondary underlined-text-secondary font-weight-bold">Our
                                Specialty Areas</a>
                        </p>
                    </div><!-- /.col-xl-5 -->
                    <div class="col-md-12 col-lg-6 col-xl-6 offset-xl-1 d-flex flex-wrap justify-content-xl-end">
                        <a href="tests-services.html" class="btn btn-primary btn-xl mr-30">
                            <span>Tests and Services</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <div class="contact-phone d-flex align-items-center">
                            <div class="phone-icon mr-20">
                                <i class="icon-phone icon-item"></i>
                            </div>
                            <span class="fz-14">Contact our friendly staff or call us any time 01061245741</span>
                        </div>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.Call to action Area -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 4 -->

    <!-- ========================
        FancyBox Layout 4
      =========================== -->
    <section class="fancybox-layout4 bg-overlay bg-overlay-primary-gradient pt-120">
        <div class=" bg-img"><img src="assets/images/backgrounds/1.jpg" alt="backgrounds">
        </div>
        <div class="container">
            <div class="row heading-layout2 heading-light mb-60">
                <div class="col-12">
                    <h2 class="heading-subtitle">Sets The Standard For High Quality Care Since 1975</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading-title">Unwavering Commitment to Excellence and Quality of our Tests and Results.
                    </h3>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading-desc font-weight-bold mb-20">We process more than 2 million patient specimens per
                        week
                        and
                        help medical professionals and patients make important health decisions. The insights we gain
                        through
                        testing then fuel our drug development practice, by identifying patterns and even individuals
                        who might
                        benefit from enrollment in specific drug trials.</p>
                    <p class="heading-desc mb-30">With the support of our diagnostics capabilities to deliver drug
                        trials that
                        are both reliable and rigorous, we're able to support clinical trial research efforts.
                    </p>
                    <div class="d-flex flex-wrap">
                        <a href="about-us.html" class="btn btn-secondary btn-secondary-style2 mr-30">
                            <span>Values and Culture</span> <i class="icon-arrow-right"></i>
                        </a>
                        <a href="contact-us.html" class="btn btn-light btn-outlined">
                            Prepare for a Test
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel-wrapper">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 1100, "settings": {"slidesToShow": 3}},{"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- fancybox item #1 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/1.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-equipment"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Improving Your Health through Automation</h4>
                                    <p class="fancybox-desc">Through our investment in new high volume chemistry tech,
                                        we have brought
                                        next generation.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #2 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/2.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-drugs"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Partnering for Better Health Outcomes
                                    </h4>
                                    <p class="fancybox-desc">Building a healthier world mean looking at the future
                                        genetics and being
                                        ready for it.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #3 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/3.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical10"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Innovations in Vaccines & Drug Development</h4>
                                    <p class="fancybox-desc">In the face of a growing street drug crisis, quick and
                                        accurate screening
                                        is a matter of life.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #4 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/4.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical11"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Trust Towards our Shared Purpose</h4>
                                    <p class="fancybox-desc">We care for our patients, each other and our communities
                                        and excellence is
                                        the standard.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #5 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/5.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-class"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Empowered to Change, Act, and to Adapt </h4>
                                    <p class="fancybox-desc">We care for our patients, each other and our communities
                                        and excellence is
                                        the standard.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #6 -->
                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="assets/images/features/3.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical10"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Innovations in Vaccines & Drug Development</h4>
                                    <p class="fancybox-desc">In the face of a growing street drug crisis, quick and
                                        accurate screening
                                        is a matter of life.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.slick-carousel -->
                    </div><!-- /.carousel-wrapper -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="d-flex mt-40">
                        <div class="rating d-flex mr-30">
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                        </div>
                        <div>
                            <a href="#" class="color-secondary underlined-text-secondary font-weight-bold">97%
                                Customer
                                Satisfaction</a>
                            <span class="color-gray">based on 750+ reviews from our beloved customers and 20,000
                                natural
                                products!</span>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FancyBox Layout 4 -->

    <div class="bg-pink">
        <!-- ======================
         Call to Action
        ========================= -->

        <!-- ======================
         Banner Layout 7
        ========================= -->
        <section class="banner-layout7 py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 order-2-md">
                        <div class="banner-img"><img src="assets/images/banners/7.jpg" class="w-100"
                                alt="banner"></div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-8 order-1-md">
                        <div class="banner-content">
                            <div class="heading-layout2 mb-50">
                                <h2 class="heading-title">Why People Love Us!</h2>
                            </div>
                            <div class="testimonials-layout3">
                                <div class="testimonials-container">
                                    <div class="slider-has-navs">
                                        <!-- Testimonial #1 -->
                                        <div class="testimonial-item">
                                            <h3 class="testimonial-title">They have cultivated a loyal following of
                                                functional and
                                                integrative medicine professionals, unified by a desire to prevent
                                                disease and attain health.
                                                They alued partners in providing only high quality testing to help us
                                                achieve clinical results
                                                faster .
                                            </h3>
                                        </div><!-- /. testimonial-item -->
                                        <!-- Testimonial #2 -->
                                        <div class="testimonial-item">
                                            <h3 class="testimonial-title">Their doctors include highly qualified
                                                practitioners who come
                                                from
                                                a
                                                range of backgrounds and bring with them a diversity of skills and
                                                special interests. They
                                                also
                                                have
                                                registered nurses on staff who are available to triage any urgent
                                                matters
                                            </h3>
                                        </div><!-- /. testimonial-item -->
                                    </div><!-- /.slick-carousel -->
                                    <div class="slider-nav-thumbnails">
                                        <div class="testimonial-meta d-flex align-items-center">
                                            <div class="testimonial-thmb">
                                                <img src="assets/images/testimonials/thumbs/3.jpg" alt="thumb">
                                            </div>
                                            <div>
                                                <h4 class="testimonial-meta-title">Anna Mudson</h4>
                                                <p class="testimonial-meta-desc">Optime Labs</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-meta d-flex align-items-center">
                                            <div class="testimonial-thmb">
                                                <img src="assets/images/testimonials/thumbs/1.jpg" alt="thumb">
                                            </div>
                                            <div>
                                                <h4 class="testimonial-meta-title">Sami Wade</h4>
                                                <p class="testimonial-meta-desc">Medcity Labs</p>
                                            </div>
                                        </div>
                                    </div><!-- /.slider-nav-thumbnails -->
                                </div><!-- /.testimonials-container -->
                            </div><!-- /.testimonials-layout3 -->
                        </div><!-- /.banner-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Banner Layout 7 -->
    </div>

    <!-- ======================
         Banner Layout 5
      ========================= -->
    <section class="banner-layout5 py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="banner-content">
                        <div class="heading-layout2 mb-50">
                            <h2 class="heading-title">Health Care Practitioner</h2>
                            <p class="heading-desc">We will work with you to develop individualised care plans,
                                including
                                management
                                of chronic diseases. If we cannot assist, we can provide referrals or advice about the
                                type of
                                practitioner you require to treat all enquiries sensitively.
                            </p>
                        </div>
                        <div class="accordion" id="accordion1">
                            <div class="accordion-item">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                                    <a class="accordion-title" href="#">Which Plan Is Right For Me?</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse1" class="collapse" data-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the
                                            best
                                            advice from a reputable company as often</p>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse2">
                                    <a class="accordion-title" href="#">Do I have to commit to a contract?</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse2" class="collapse" data-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the
                                            best
                                            advice from a reputable company as often</p>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item opened">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse3">
                                    <a class="accordion-title" href="#">What Payment Methods Are Available?</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse3" class="collapse show" data-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the
                                            best
                                            advice from a reputable company as often</p>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                        </div><!-- /.accordion -->
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-7 px-0 d-flex justify-content-end">
                    <div class="banner-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner Layout 5 -->

    <!-- ==========================
          contact layout 3
      =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img"><img src="assets/images/banners/6.jpg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 d-flex flex-column justify-content-between">
                    <div>
                        <div class="heading heading-light mb-30">
                            <h3 class="heading-title mb-30">Supporting Our Communities to Build Positive, Safe & Clear
                                Patient
                                Focused Culture.</h3>
                            <p class="heading-desc">The purpose of assessing and accrediting laboratories is to
                                evaluate and ensure
                                compliance with established standards, identify areas of excellence and to provide
                                recommendations for
                                improvement.
                            </p>
                        </div>
                        <div class="d-flex flex-wrap">
                            <a href="about-us.html" class="btn btn-white mr-30">
                                <span>Values and Culture</span> <i class="icon-arrow-right"></i>
                            </a>
                            <a href="find-lab.html" class="btn btn-light btn-outlined">Prepare for a Test</a>
                        </div>
                    </div>
                    <div>
                        <p class="color-white font-weight-bold mb-40">With over 90% of health decisions based on
                            diagnostic
                            results, we are
                            committed to being a trusted healthcare partner you need for decisions.
                        </p>
                        <div class="fancybox-layout2 fancybox-light">
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-avatar2"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Patient Centered Care </h4>
                                    <p class="fancybox-desc">We work day and night to solve the problems that can help
                                        them move
                                        forward for those who is seeking answers!</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-allotropy"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Quality Improvement </h4>
                                    <p class="fancybox-desc">Our team typically processes over 3 million patient every
                                        month and fifty
                                        of the top drugs developed in 2022.</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                        </div>
                    </div>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="contact-panel">
                        <form class="contact-panel-form" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel-title">Book a Lab Visit</h4>
                                    <p class="contact-panel-desc mb-30">Please feel welcome to contact our friendly
                                        reception staff
                                        with any general or medical enquiry. Our doctors will receive or return any
                                        urgent calls.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="service">Select Services</label>
                                        <select id="service" class="form-control">
                                            <option value="1">Genetic Tests</option>
                                            <option value="2">Genetic Tests</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select id="location" class="form-control">
                                            <option value="1">California</option>
                                            <option value="2">NYC</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name"
                                            required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Email"
                                            id="email">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="phone">Phone (required)</label>
                                        <input type="text" class="form-control" placeholder="Phone"
                                            id="phone">
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group form-group-date">
                                        <label for="date">Date (required)</label>
                                        <input type="date" class="form-control" id="date" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group form-group-date">
                                        <label for="time">Time (required)</label>
                                        <input type="time" class="form-control" id="time" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="mb-20">Special Hours and Access</label>
                                        <div class="d-flex flex-wrap checkbox-controls">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6"> Open before
                                                    8:00 am</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">Wheelchair
                                                    Accessible</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Open
                                                    Saturdays</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9"> Serving
                                                    Customers with Autism</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">24 Hour Holter
                                                    Monitoring</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                                        <span>Book Your Visit</span> <i class="icon-arrow-right"></i>
                                    </button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
        Blog Grid
      ========================= -->
    <section class="blog-layout1 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading-layout2 text-center mb-50">
                        <h2 class="heading-subtitle">Recent Articles</h2>
                        <h3 class="heading-title">Tips, News & Updates</h3>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Post Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post-img">
                            <span class="post-meta-date">
                                <span class="day">30</span>
                                <span class="month">Jan 2022</span>
                            </span>
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post-img -->
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <div class="post-meta-cat">
                                    <a href="#">Mental Health</a>
                                </div><!-- /.blog-meta-cat -->
                                <a class="post-meta-author" href="#">Martin King</a>
                            </div>
                            <h4 class="post-title"><a href="#">Partnership to Increase COVID19 Testing Capacity
                                    and Track All
                                    COVID-19 Variants
                                </a></h4>
                            <p class="post-desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed
                                with a
                                condition that’s certainly true if you test positive for COVID-19, or are presumed to be
                                positive...
                            </p>
                            <a href="blog-single-post.html" class="btn btn-link">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div><!-- /.post-body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Post Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post-img">
                            <span class="post-meta-date">
                                <span class="day">27</span>
                                <span class="month">Jan 2022</span>
                            </span>
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post-img -->
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <div class="post-meta-cat">
                                    <a href="#">Pandemic </a>
                                    <a href="#"> COVID-19</a>
                                </div><!-- /.blog-meta-cat -->
                                <a class="post-meta-author" href="#">Tony Dawny</a>
                            </div>
                            <h4 class="post-title"><a href="#">Preventing Pathogen Passage by Taking Precautions
                                    Against the
                                    Century Pandemic
                                </a></h4>
                            <p class="post-desc">The governments with the most successful outcomes followed rules given
                                by the WHO.
                                Additionally, they worked with their citizens to make sure that as many people...
                            </p>
                            <a href="blog-single-post.html" class="btn btn-link">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div><!-- /.post-body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Post Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post-img">
                            <span class="post-meta-date">
                                <span class="day">22</span>
                                <span class="month">Jan 2022</span>
                            </span>
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post-img -->
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <div class="post-meta-cat">
                                    <a href="#"> COVID-19</a>
                                    <a href="#">Pandemic </a>
                                </div><!-- /.blog-meta-cat -->
                                <a class="post-meta-author" href="#">Ahmed</a>
                            </div>
                            <h4 class="post-title"><a href="#">Driving that Gene, Mutations are Seen Spreading
                                    Trait through a New
                                    Viral Population
                                </a></h4>
                            <p class="post-desc">Naturally occurring defense tool for bacteria, had recently been
                                harnessed as
                                remarkably simple and efficient way to edit DNA, this discovery was so remarkable that
                                it...
                            </p>
                            <a href="blog-single-post.html" class="btn btn-link">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div><!-- /.post-body -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="blog.html" class="btn btn-link btn-primary">
                        <span>Check All Blog Posts</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
</x-frontend-app-layout>
