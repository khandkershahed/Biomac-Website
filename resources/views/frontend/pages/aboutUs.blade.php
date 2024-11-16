<x-frontend-app-layout :title="'About Us'">
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
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
                            <a href="index.html"><i class="icon-home"></i> <span>Home</span></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- ========================
        About Layout 1
      =========================== -->
    <section class="about-layout1 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-10 col-xl-7">
                    <div class="heading-layout2">
                        <h2 class="heading-subtitle color-body">Excellence, Dedicated, and Experienced Laboratory
                            Technologists
                        </h2>
                        <h3 class="heading-title mb-50">A Trusted Healthcare Partner Providing You With High Quality
                            Test
                            Services to Manage All Health Effectively!</h3>
                    </div>
                    <div class="about-img">
                        <div class="about-badge">
                            <div class="about-icon"><i class="icon-beaker"></i></div>
                        </div>
                        <img src="assets/images/about/1.png" alt="about" class="w-100">
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-10 col-xl-5">
                    <div class="about-Text">
                        <p class="mb-30">With a belief that knowledge is power, we connect directly with patients to
                            deliver their
                            results so they have valuable health information when they need it most, we care about our
                            people and
                            are committed to excellence in the work.
                        </p>
                        <p class="mb-30">While we believe we are more than just numbers, the depth of our laboratories
                            is pretty
                            impressive.</p>
                        <div class="d-flex flex-wrap align-items-center mb-30">
                            <a href="doctors-grid.html" class="btn btn-secondary btn-xl mr-30">
                                <span>Book a Home Visit</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <img src="assets/images/about/singnture.png" alt="singnture">
                        </div>
                        <ul class="features-list list-unstyled mb-0">
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
       Banner Layout 1
      =========================== -->
    <section class="banner-layout1 py-0">
        <div class="top-shape"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-6 banner-content">
                    <div class="banner-text">
                        <div class="heading-layout2 heading-light">
                            <h3 class="heading-title">Supporting Our Communities to Build Positive, Safe & Clear Patient
                                Focused
                                Culture.</h3>
                            <p class="heading-desc mb-40">The purpose of assessing and accrediting laboratories is to
                                evaluate and
                                ensure compliance with established standards, identify areas of excellence and to
                                provide
                                recommendations for improvement.
                            </p>
                        </div>
                        <div class="d-flex flex-wrap flex-wrap mb-60">
                            <a href="pricing.html" class="btn btn-white-style2 mr-30">
                                <span>Insurance Plans</span> <i class="icon-arrow-right"></i>
                            </a>
                            <a href="contact-us.html" class="btn btn-white btn-outlined">
                                Meet our Leaders
                            </a>
                        </div>
                        <div class="fancybox-layout2 fancybox-light">
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-avatar2"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Patient Centered Care </h4>
                                    <p class="fancybox-desc">We work day and night to solve the problems that can help
                                        them move
                                        forward for those who is seeking answers!</p>
                                </div>
                            </div>
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-allotropy"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Quality Improvement </h4>
                                    <p class="fancybox-desc">Our team typically processes over 3 million patient every
                                        month and fifty
                                        of the top drugs developed in 2022.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 banner-img d-flex align-items-center">
                    <div class="bg-img">
                        <img src="assets/images/banners/1.jpg" alt="backgrounds">
                    </div>
                    <div class="banner-shape"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
       fancybox Layout 1
      ========================= -->
    <section class="fancybox-layout1 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <h2 class="heading-subtitle">Commitment to Quality</h2>
                        <h3 class="heading-title">We Bring Diagnostic Testing and Drug Development Together!</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-archives"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Our History</h4>
                            <p class="fancybox-desc">We have grown organically and through targeted acquisitions that
                                have added to
                                its geographic and technological company provides clinical laboratory.</p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-avatar"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Leadership Team</h4>
                            <p class="fancybox-desc">Our executive team contributes to our mission of improving health
                                and
                                improving lives through our world-class diagnostics and drug development practices.
                            </p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-class"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Accreditation & Licensing</h4>
                            <p class="fancybox-desc">Our commitment to excellence and quality improvement, we offer a
                                series of
                                inter related quality control and assurance initiatives for our pre analytical.</p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-clothing"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Careers</h4>
                            <p class="fancybox-desc">If you unraveled all your chromosomes from all of your cells and
                                laid out the
                                uncoiled DNA end to end, the strands would stretch from the Earth to the Sun 65 times.
                            </p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-atom"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Innovation</h4>
                            <p class="fancybox-desc">We are continually pioneering innovative tests, expanding our
                                genetics
                                programs, forging new relationships and investing in technology to deliver tests.</p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-d-4 col-lg-4">
                    <div class="fancybox-item">
                        <div class="fancybox-icon">
                            <i class="icon-avatar2"></i>
                        </div>
                        <div class="fancybox-body">
                            <h4 class="fancybox-title">Sustainability</h4>
                            <p class="fancybox-desc">Led by our values of caring, agile, customer centred, and
                                teamwork, we
                                passionately building a sustainable organization by not only doing what’s right for
                                employees.</p>
                            <a href="services-single.html" class="btn btn-link btn-primary">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                    <p class="font-weight-bold mb-0">Whether you are a provider or patient, when you need trusted
                        information to make confident health decisions, consider us.
                        <a href="#" class="color-secondary underlined-text-secondary">Our Specialty Areas</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
       Banner Layout 3
      =========================== -->
    <section class="banner-layout3 py-0">
        <div class="top-shape"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-6 banner-img d-flex align-items-center">
                    <div class="bg-img">
                        <img src="assets/images/banners/2.jpg" alt="backgrounds">
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="col-12 col-xl-6 banner-content">
                    <div class="banner-text">
                        <div class="heading-layout2 heading-light">
                            <h3 class="heading-title">We are Helping to Advance Health with Clinical Trials and
                                Vaccines
                                Development.</h3>
                            <p class="heading-desc mb-40">We believe in harnessing science for human good, so we work
                                day and
                                night, around the world, to deliver answers for health questions.
                            </p>
                        </div>
                        <div class="fancybox-layout2 fancybox-light">
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-chemistry"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">World Class Diagnostics</h4>
                                    <p class="fancybox-desc">We have developed some of the world's most advanced
                                        testing capabilities
                                        to help improve health and lives.</p>
                                </div>
                            </div>
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-drug"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Leader in Drug Development</h4>
                                    <p class="fancybox-desc">With the support of our diagnostics capabilities to
                                        deliver drug trials
                                        that are both reliable and rigorous.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-80 mt-20">
                            <a href="{{ route('about') }}" class="btn btn-white btn-xl">
                                <span>Looking for More Info!</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
        Blog Grid
      ========================= -->
    <section class="blog-layout2 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-layout2">
                        <h2 class="heading-title mb-50">Tips, News & Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">

                    <div class="post-item featured-post">
                        <div class="post-img">
                            <span class="post-meta-date">
                                <span class="day">30</span>
                                <span class="month">Jan 2022</span>
                            </span>
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                            </a>
                        </div>
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <div class="post-meta-cat">
                                    <a href="#">Mental Health</a>
                                </div>
                                <a class="post-meta-author" href="#">Martin King</a>
                            </div>
                            <h4 class="post-title"><a href="#">Partnership to Increase COVID19 Testing Capacity
                                    and Track All
                                    COVID-19 Variants
                                </a></h4>
                            <p class="post-desc">With 200 access points across the country a comprehensive logistics
                                network, we
                                have proven to be an important partner in the response to COVID-19, having governments
                                with the most
                                successful outcomes followed rules given...</p>
                            <a href="blog-single-post.html" class="btn btn-link">
                                <i class="plus-icon">+</i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">

                    <div class="post-item">
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <span class="post-meta-date">27 Jan 2022</span>
                                <a class="post-meta-author" href="#">Tony Dawny</a>
                            </div>
                            <h4 class="post-title"><a href="#">Preventing Pathogen Passage by Taking Precautions
                                    Against the
                                    Century Pandemic
                                </a></h4>
                        </div>
                        <div class="post-img">
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                            </a>
                        </div>
                    </div>

                    <div class="post-item">
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <span class="post-meta-date">27 Jan 2022</span>
                                <a class="post-meta-author" href="#">Tony Dawny</a>
                            </div>
                            <h4 class="post-title"><a href="#">Driving that Gene, Mutations are Seen Spreading
                                    Trait through a New
                                    Viral
                                </a></h4>
                        </div>
                        <div class="post-img">
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                            </a>
                        </div>
                    </div>

                    <div class="post-item">
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <span class="post-meta-date">27 Jan 2022</span>
                                <a class="post-meta-author" href="#">Tony Dawny</a>
                            </div>
                            <h4 class="post-title"><a href="#">Preventing Pathogen Passage by Taking Precautions
                                    Against the
                                    Century Pandemic
                                </a></h4>
                        </div>
                        <div class="post-img">
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/4.jpg" alt="post image" loading="lazy">
                            </a>
                        </div>
                    </div>

                    <div class="post-item">
                        <div class="post-body">
                            <div class="post-meta d-flex align-items-center">
                                <span class="post-meta-date">27 Jan 2022</span>
                                <a class="post-meta-author" href="#">Tony Dawny</a>
                            </div>
                            <h4 class="post-title"><a href="#">No Cough, No Problem? Medication Concerns and
                                    COVID-19 Symptoms in
                                </a></h4>
                        </div>
                        <div class="post-img">
                            <a href="blog-single-post.html">
                                <img src="assets/images/blog/grid/5.jpg" alt="post image" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
