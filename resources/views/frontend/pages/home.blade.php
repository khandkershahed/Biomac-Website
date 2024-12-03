<x-frontend-app-layout :title="'Home'">
    <!-- ============================
        Slider
    ============================== -->
    @if ($sliders)
        <section class="banner-section banner-style-one">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                @foreach ($sliders as $slider)
                    <div class="slide-item">
                        <div class="image-layer"
                            style="background-image: url({{ asset('storage/' . $slider->bg_image) }})"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content-inner">
                                    @if ($slider->badge)
                                        <span class="count-text">0{{ $loop->iteration }}.</span>
                                        <h5>{{ $slider->badge }}</h5>
                                    @endif
                                    @if ($slider->title)
                                        <h2>{{ $slider->title }}</h2>
                                    @endif
                                    {{-- <ul class="list clearfix">
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
                                    </ul> --}}
                                    @if ($slider->button_name && $slider->button_link)
                                        <div class="btn-box">
                                            <a href="{{ $slider->button_link }}" class="theme-btn light">{{ $slider->button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!-- about-style-three -->
    <section class="service-style-two centred">
        <div class="certified-box centred">
            <div class="shape-1"
                style="background-image: url({{ asset('frontend/assets/images/shape/shape-17.png') }});"></div>
            <div class="shape-2"
                style="background-image: url({{ asset('frontend/assets/images/shape/shape-18.png') }});"></div>
            <div class="certified-inner">
                <div class="icon-box">
                    <img src="{{ asset('images/white_fav.png') }}" alt="" style="width: 39px;">
                    {{-- <i class="flaticon-dna"></i> --}}
                </div>
                <h6>BioMac Lab</h6>
                <h5>Hub of Future Oriented Research</h5>
            </div>
        </div>
    </section>
    <!-- about-style-three -->
    <section class="about-style-three sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('frontend/assets/images/shape/shape-23.png') }});">
                            </div>
                            <div class="shape-2"
                                style="background-image: url({{ asset('frontend/assets/images/shape/shape-24.png') }});">
                            </div>
                        </div>
                        <div class="thumb-box">
                            <figure class="thumb thumb-1"><img src="{{ asset('images/about_thumb_one.png') }}"
                                    alt=""></figure>
                            <figure class="thumb thumb-2"><img src="{{ asset('images/about_thumb_two.png') }}"
                                    alt=""></figure>
                            <figure class="thumb thumb-3"><img src="{{ asset('images/about_thumb_three.png') }}"
                                    alt=""></figure>
                        </div>
                        <figure class="image">
                            <img src="{{ asset('images/about_home.png') }}" alt="BioMac Lab">
                        </figure>
                        {{-- <div class="text" style="background: transparent;">
                                <img src="{{asset('images/injamam.jpeg')}}" alt="BioMac Lab" style="border-radius: 50%;">
                            <h4 class="text-black" style="width: 300px;">SK. Injamamul Islam</h4>
                            <h6 class="text-black">Founder</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">About Lab</span>
                            <h2>Transforming bioinformatic analysis with genomics and Machine Learning</h2>
                        </div>
                        <div class="text">
                            <p>
                                As the founder of BioMac Lab, I am excited to share the transformative impact of genomic
                                science and its synergy with machine learning. With Next Generation Sequencing (NGS), we
                                are
                                revolutionizing how we decode complex biological data, rapidly and precisely.
                            </p>

                            <p>
                                Machine
                                learning enables us to uncover patterns, predict outcomes, and derive insights from vast
                                datasets, opening doors to personalized medicine, disease prevention, microbial
                                analysis,
                                and evolutionary studies.
                            </p>

                            <p>
                                At BioMac Lab, we strive to push these boundaries, merging
                                bioinformatics, genomics, and intelligent algorithms to understand life's code, address
                                global health challenges, and drive innovation in biological sciences.
                            </p>
                        </div>
                        <div class="inner-box">

                            <div class="single-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/injamam.jpeg') }}" alt="BioMac Lab"
                                        style="width:80px; border-radius: 50%;">
                                </div>
                                <div style="padding: 1rem 0px;">
                                    <h3 class="m-0" style="margin-top: 1rem;">SK. Injamamul Islam</h3>
                                    <p>Our Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->

    <!-- about-section -->
    <section class="about-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="shape-box">
                            <div class="shape shape-1 hexagon_shape"></div>
                            <div class="shape shape-2 hexagon_shape"></div>
                            <div class="shape shape-3 hexagon_shape"></div>
                        </div>
                        <div class="image-inner hexagon_shape">
                            <figure class="image">
                                <img src="{{ asset('images/image_why_choose.png') }}" alt="" />
                            </figure>
                        </div>
                        <div class="text">
                            <div class="inner">
                                {{-- <h2>12<span>+</span></h2> --}}
                                <h6>Experienced <br/>Researchers</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            {{-- <span class="sub-title">About Lab</span> --}}
                            <h2>
                                Genomic Data Analysis
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Our expertise spans comprehensive metagenomics studies, RNA-seq data analysis, and both
                                reference-based and de novo genome assembly. We offer functional annotation for precise
                                gene characterization, comparative genomics analysis to highlight evolutionary insights,
                                and advanced techniques such as single-cell genomics, epigenomics, ATAC-seq analysis for
                                chromatin accessibility, and DNA methylation profiling to understand epigenetic
                                regulation.
                            </p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column mb-3">
                                    <div class="single-item">
                                        <span class="count-text">01</span>
                                        <h3>Drug Development</h3>
                                        <p>
                                            Streamlining drug discovery with predictive models and data-driven
                                            strategies.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column mb-3">
                                    <div class="single-item">
                                        <span class="count-text">02</span>
                                        <h3>Immunoinformatics</h3>
                                        <p>
                                            Leveraging informatics for breakthroughs in immune system research and
                                            therapies.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column mb-3">
                                    <div class="single-item">
                                        <span class="count-text">03</span>
                                        <h3>Antimicrobial Peptide Prediction</h3>
                                        <p>
                                            Empowering next-generation therapeutics with AI-driven identification and
                                            design of antimicrobial peptides.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="btn-box">
                            <a href="about.html" class="theme-btn">Read More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- processing-section -->
    {{-- <section class="processing-section centred">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
        <div class="outer-container">
            <div class="sec-title light">
                <span class="sub-title">Our Specialities</span>
                <h2>Specimen collection & <br />procedures</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-19.png);">
                            </div>
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-blood-sample"></i></div>
                                <span class="count-text">01</span>
                            </div>
                            <div class="lower-content">
                                <h3>Sample Collection</h3>
                                <p>Litter you copy with more kitty Chases ball of string eat plants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-19.png);">
                            </div>
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-microscope"></i></div>
                                <span class="count-text">02</span>
                            </div>
                            <div class="lower-content">
                                <h3>Sample Processing</h3>
                                <p>Right after you get up for purr for no reason leave everywhere decide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-19.png);">
                            </div>
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-clipboard"></i></div>
                                <span class="count-text">03</span>
                            </div>
                            <div class="lower-content">
                                <h3>Accurate Test Results</h3>
                                <p>Arrested Development fan than generator Make your project stand out.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-cells"></i></div>
                                <span class="count-text">04</span>
                            </div>
                            <div class="lower-content">
                                <h3>Reports Delivered</h3>
                                <p>Know we were calling him Big Bear. We never Maybe it was the eleven months</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- processing-section end -->
    <!-- funfact-section -->
    {{-- <section class="funfact-section centred sec-pad">
        <div class="bg-layer" style="background-image: url({{ asset('images/home_middle_bg.png') }})"></div>
        <div class="auto-container">
            <div class="sec-title light">
                <h2>Pioneering Genomic Discovery through Machine Learning Integration</h2>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-rating"></i>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500"
                                        data-stop="{{ date('Y') }}">0</span><span>/2040</span>
                                </div>
                                <h3>At BioMac Lab, we combine the power of genomics with advanced machine learning to
                                    drive
                                    transformative discoveries. From analyzing complex genomic datasets to accelerating
                                    precision drug development and enhancing immunoinformatics capabilities, our
                                    solutions
                                    unlock the full potential of genomic science</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- funfact-section -->
    <section class="funfact-section about-page alternat-2 centred">
        <div class="auto-container">
            <div class="inner-content bg-light">

                <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="shape-box">
                                    <div class="shape shape-1 hexagon_shape"></div>
                                    <div class="shape shape-2 hexagon_shape"></div>
                                    <div class="shape shape-3 hexagon_shape"></div>
                                    <div class="shape shape-4 hexagon_shape"></div>
                                </div>
                                <div class="icon-box"><i class="flaticon-atom"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500"
                                        data-stop="{{ date('Y') }}">0</span><span>/2040</span>
                                </div>
                                <h3>At BioMac Lab, we combine the power of genomics with advanced machine learning to
                                    drive
                                    transformative discoveries. From analyzing complex genomic datasets to accelerating
                                    precision drug development and enhancing immunoinformatics capabilities, our
                                    solutions
                                    unlock the full potential of genomic science</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- certification-section -->
    <section class="certification-section sec-pad">
        <div class="bg-layer" style="background-image: url({{ asset('images/home_middle_bg.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-inner">
                        <div class="sec-title light">
                            <h2>Pioneering Genomic Discovery through Machine Learning Integration</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- certification-section end -->
    <!-- funfact-section end -->

</x-frontend-app-layout>
