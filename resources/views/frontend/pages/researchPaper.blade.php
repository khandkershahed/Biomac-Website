<x-frontend-app-layout :title="'Research Papers'">
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="{{ asset('frontend/assets/images/page-titles/1.jpg') }}" alt="background">
            {{-- <img src="{{ asset('frontend/assets/images/page-titles/1.jpg') }}" alt="background"> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle-heading">Research Papers</h1>
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
</x-frontend-app-layout>
