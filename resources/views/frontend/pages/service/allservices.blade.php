<x-frontend-app-layout :title="'Services'">
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer"
            style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }})"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- service-page-section -->
    <section class="service-page-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="sub-title">What We offer</span>
                <h2>Research sectors in which we are recently working now</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-1.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-biochemistry"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="javascript:void(0)">Comparative Genomic Analysis </a>
                                </h3>
                                <p>
                                    Analyzing and comparing genetic material across different species or populations
                                    to identify similarities, differences, and evolutionary relationships.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-2.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="javascript:void(0)">Metagenomics Data Analysis </a>
                                </h3>
                                <p>
                                    Studying genetic material recovered directly from environmental samples, such
                                    as soil, water, or microbiomes, to understand microbial communities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-3.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box"><i class="flaticon-skin"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="javascript:void(0)">RNA-Seq Analysis</a>
                                </h3>
                                <p>
                                    Analyzing RNA sequences to assess gene expression, alternative splicing, and other
                                    transcriptomic features.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details.html"><img
                                            src="{{ asset('frontend/assets/images/service/service-4.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box"><i class="flaticon-skin"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Cancer Genomics Data Analysis</a></h3>
                                <p>
                                    Analyzing genetic data from cancer patients to identify mutations, biomarkers, and
                                    therapeutic targets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-5.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-biochemistry"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="javascript:void(0)">Drug Design with Machine Learning Integration</a>
                                </h3>
                                <p>
                                    Using machine learning algorithms to predict and design effective drug molecules,
                                    improving the drug discovery process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-6.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="javascript:void(0)">Peptide Design and Peptide-Based Drug Discovery</a>
                                </h3>
                                <p>
                                    Designing peptides for therapeutic applications, including
                                    identifying novel drug candidates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-7.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="javascript:void(0)">Machine Learning-Based Protein-Protein Interaction
                                        Prediction </a></h3>
                                <p>
                                    Using machine learning to predict interactions between
                                    proteins, essential for understanding cellular processes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-8.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="javascript:void(0)">NGS Data Analysis </a></h3>
                                <p>
                                    Analyzing Next-Generation Sequencing (NGS) data for a wide range of applications,
                                    including whole-genome sequencing, exome sequencing, and targeted sequencing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('frontend/assets/images/service/service-9.jpg') }}"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="javascript:void(0)">Others</a></h3>
                                <p>
                                    Additional genomic and bioinformatics services, tailored to specific client needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-page-section end -->
</x-frontend-app-layout>
