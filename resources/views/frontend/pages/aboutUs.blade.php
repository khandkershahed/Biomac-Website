<x-frontend-app-layout :title="'About Us'">
    <!-- page-title -->
    <section class="page-title">
        @if (optional($banner)->bg_image)
            <div class="bg-layer" style="background-image: url({{ asset('storage/' . optional($banner)->bg_image) }});">
            </div>
        @else
            <div class="bg-layer"
                style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }});"></div>
        @endif
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- about-style-two -->
    <section class="about-style-two sec-pad">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box">
                            <img src="{{ asset('images/about_image_1.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Genomics & AI Innovation</span>
                                <h2>Advancing Genomics with AI Solutions</h2>
                            </div>
                            <div class="text">
                                <p class="mb-3">
                                    Pioneering the fusion of bioinformatics, genomics, and AI to transform precision
                                    medicine.
                                </p>
                                <p class="mb-3">
                                    Specializing in complex genomic analysis, pangenomics, antimicrobial resistance, and
                                    AI-driven drug design, we push the boundaries of microbial genomics and precision
                                    medicine, fostering innovative solutions for global healthcare challenges.
                                </p>
                                <p class="mb-3">
                                    Our expertise spans microbial genomics, machine learning, and innovative pangenomics
                                    approaches, pushing the boundaries of genomic science to tackle global health
                                    challenges and accelerate transformative discoveries in drug development and disease
                                    research.
                                </p>

                            </div>
                            {{-- <div class="inner-box">
                                <div class="piechart" data-fg-color="#0f5ff1" data-value=".30"><canvas width="100"
                                        height="100"></canvas>
                                    <span>30</span>
                                </div>
                                <h3>Hospital & Lab Served</h3>
                                <p>Taking the mick know your onions pulled</p>
                                <a href="index-2.html"><i class="flaticon-down-arrow-1"></i>Download</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->

    <!-- industries-section end -->
    <section class="industries-section sec-pad">
        <div class="pattern-layer"
            style="background-image: url({{ asset('frontend/assets/images/shape/shape-3.png') }});"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="bg-layer" style="background-image: url({{ asset('images/image_one.jpeg') }});"></div>
                <div class="content-box">
                    <div class="shape-box">
                        <div class="shape shape-1 hexagon_shape"></div>
                        <div class="shape shape-2 hexagon_shape"></div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-dna"></i></div>
                                    {{-- <h6>Industry 01</h6> --}}
                                    <h3><a href="javascript:void(0)">Genomic Data Analysis & Pangenomics</a></h3>
                                    <p>Integrating whole genome sequencing, annotation, and comparative pangenome
                                        studies to understand genetic diversity, functional elements, and evolutionary
                                        patterns across prokaryotes and eukaryotes.</p>
                                    <div class="link">
                                        <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-syringe"></i></div>
                                    {{-- <h6>Industry 02</h6> --}}
                                    <h3><a href="javascript:void(0)">Immunoinformatics & Vaccine Design</a></h3>


                                    <p>Utilizing computational and immunoinformatics approaches to design and optimize
                                        vaccines, enhancing immune responses against infectious diseases through
                                        predictive modeling and data-driven insights.</p>
                                    <div class="link">
                                        <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-robot"></i></div>
                                    <h3><a href="javascript:void(0)">Machine Learning in Genomics</a></h3>
                                    <p>Applying machine learning for predictive modeling, antimicrobial peptide
                                        design, and computer-aided drug discovery to enhance the precision and
                                        efficiency of genomic analyses.</p>

                                    <div class="link">
                                        <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title mr-0 light">
                                {{-- <span class="sub-title">our industries</span> --}}
                                <h2>Research and Technology</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                                    <h3><a href="javascript:void(0)">Population Genomics & Evolutionary Studies</a></h3>
                                    <p>Analyzing genetic diversity, population structures, and evolutionary
                                        relationships to uncover patterns of adaptation and species evolution in diverse
                                        organisms.</p>
                                    <div class="link">
                                        <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-bacteria"></i></div>
                                    <h3><a href="javascript:void(0)">Microbiome & Biosynthetic Gene Clusters</a></h3>
                                    <p>Exploring microbial communities and biosynthetic pathways, focusing on
                                        functional profiling and novel compound discovery to understand microbial
                                        ecology and potential therapeutic applications.</p>

                                    <div class="link">
                                        <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- industries-section end -->



    <!-- team-section -->
    <section class="team-section sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">Meet Our Team</span>
                <h2>Our Researchers</h2>
            </div>
            <div class="row clearfix">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="">
                                    </figure>
                                    <div class="share-option">
                                        <div class="share-icon"><i class="flaticon-sharing"></i></div>
                                        <ul class="social-links clearfix">
                                            @if ($team->email)
                                                <li><a href="mailto:{{ $team->email }}" target="_blank"><i
                                                            class="fas fa-envelope"></i></a></li>
                                            @endif
                                            @if ($team->facebook)
                                                <li><a href="{{ $team->facebook }}" target="_blank"><i
                                                            class="fa-brands fa-facebook"></i></a></li>
                                            @endif

                                            @if ($team->linked_in)
                                                <li><a href="{{ $team->linked_in }}" target="_blank"><i
                                                            class="fa-brands fa-linkedin"></i></a></li>
                                            @endif

                                            @if ($team->github)
                                                <li><a href="{{ $team->github }}" target="_blank"><i
                                                            class="fa-brands fa-github"></i></a></li>
                                            @endif

                                            @if ($team->website)
                                                <li><a href="{{ $team->website }}" target="_blank"><i
                                                            class="fa-solid fa-globe"></i></a></li>
                                            @endif

                                            @if ($team->youtube)
                                                <li><a href="{{ $team->youtube }}" target="_blank"><i
                                                            class="fa-brands fa-youtube"></i></a></li>
                                            @endif

                                            @if ($team->discord)
                                                <li><a href="{{ $team->discord }}" target="_blank"><i
                                                            class="fa-brands fa-discord"></i></a></li>
                                            @endif

                                            @if ($team->tiktok)
                                                <li><a href="{{ $team->tiktok }}" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a></li>
                                            @endif

                                            @if ($team->instagram)
                                                <li><a href="{{ $team->instagram }}" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>

                                </div>
                                <div class="lower-content">
                                    <h3><a href="javascript:void(0)">{{ $team->name }}</a></h3>
                                    <span class="designation">{{ $team->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('images/imtiaz.jpeg') }}" alt="">
                                </figure>
                                <div class="share-option">
                                    <div class="share-icon"><i class="flaticon-sharing"></i></div>
                                    <ul class="social-links clearfix">

                                        <li><a href="mailto:imtiaz.24160107@bau.edu.bd" target="_blank"><i
                                                    class="fas fa-envelope"></i></a></li>

                                        {{-- @if ($team->facebook)
                                                <li><a href="{{ $team->facebook }}" target="_blank"><i
                                                            class="fa-brands fa-facebook"></i></a></li>
                                            @endif

                                            @if ($team->linked_in)
                                                <li><a href="{{ $team->linked_in }}" target="_blank"><i
                                                            class="fa-brands fa-linkedin"></i></a></li>
                                            @endif

                                            @if ($team->github)
                                                <li><a href="{{ $team->github }}" target="_blank"><i
                                                            class="fa-brands fa-github"></i></a></li>
                                            @endif

                                            @if ($team->website)
                                                <li><a href="{{ $team->website }}" target="_blank"><i
                                                            class="fa-solid fa-globe"></i></a></li>
                                            @endif

                                            @if ($team->youtube)
                                                <li><a href="{{ $team->youtube }}" target="_blank"><i
                                                            class="fa-brands fa-youtube"></i></a></li>
                                            @endif

                                            @if ($team->discord)
                                                <li><a href="{{ $team->discord }}" target="_blank"><i
                                                            class="fa-brands fa-discord"></i></a></li>
                                            @endif

                                            @if ($team->tiktok)
                                                <li><a href="{{ $team->tiktok }}" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a></li>
                                            @endif

                                            @if ($team->instagram)
                                                <li><a href="{{ $team->instagram }}" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a></li>
                                            @endif --}}
                                    </ul>
                                </div>

                            </div>
                            <div class="lower-content">
                                <h3><a href="javascript:void(0)">Md Imtiaz Ahamed</a></h3>
                                <span class="designation">Junior Researcher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($teams) > 4)
                <div class="more-btn" id="show-more-btn">
                    <a href="javascript:void(0)" class="theme-btn">Show More</a>
                </div>
            @endif

            <!-- All Members button (hidden initially) -->
            <div class="more-btn" id="all-members-btn" style="display: none;">
                <a href="{{ route('team') }}" class="theme-btn">All Members</a>
            </div>
        </div>
    </section>
    <!-- team-section end -->




    {{-- <!-- statements-section -->
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
    </section> --}}

    @push('scripts')
        <script>
            $(document).ready(function() {
                $(".four-item-carousel").each(function() {
                    var itemsCount = $(this).data('items'); // Get the data-items attribute
                    $(this).owlCarousel({
                        items: itemsCount, // Dynamically set the number of items
                        loop: itemsCount > 1, // Enable looping only if there are more than one item
                        margin: 20,
                        nav: true,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1 // Show 1 item on small screens
                            },
                            768: {
                                items: itemsCount >= 2 ? 2 :
                                    1 // Show 2 items on medium screens, but limit to 1 if only 1 item
                            },
                            1024: {
                                items: itemsCount >= 4 ? 4 : itemsCount // Limit to available items
                            }
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                let currentIndex = 4; // Initially show 4 items
                const totalTeams = {{ count($teams) }}; // Total number of team members
                const teamsPerLoad = 4; // Load 4 more teams each time

                // Show more teams when "Show More" button is clicked
                $('#show-more-btn').click(function() {
                    // Show the next 4 teams
                    let teamsToShow = $(".team-block").slice(currentIndex, currentIndex + teamsPerLoad);
                    teamsToShow.fadeIn();

                    // Update the index
                    currentIndex += teamsPerLoad;

                    // If there are no more teams to show, hide the "Show More" button and show the "All Members" button
                    if (currentIndex >= totalTeams) {
                        $('#show-more-btn').hide();
                        $('#all-members-btn').show();
                    }
                });

                // Initially hide all team members after the first 4
                $(".team-block").slice(4).hide();
            });
        </script>
    @endpush


</x-frontend-app-layout>
