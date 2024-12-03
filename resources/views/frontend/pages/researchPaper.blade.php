<x-frontend-app-layout :title="'Research Papers'">
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
                <h1>Research</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Research Papers</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- research-page-section -->
    <section class="research-page-section sec-pad">
        <div class="auto-container">
            <div class="sortable-masonry">
                <div class="filters centred">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All / 22</li>
                        <li class="filter" data-role="button" data-filter=".hematology">Hematology / 06</li>
                        <li class="filter" data-role="button" data-filter=".biochemistry">Biochemistry / 05</li>
                        <li class="filter" data-role="button" data-filter=".serology">Serology / 03</li>
                        <li class="filter" data-role="button" data-filter=".pathology">Pathology / 02</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all pathology biochemistry serology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-1.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-4.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all hematology serology pathology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-2.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-5.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product biochemistry pathology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-6.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all hematology serology pathology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-18.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-24.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-18.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all business biochemistry">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-19.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-25.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-19.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all hematology serology pathology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-20.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-26.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-20.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all conference serology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-21.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-27.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-21.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Serology</span>
                                        <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all business biochemistry">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-22.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-28.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-22.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Biochemistry</span>
                                        <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all hematology serology pathology">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <div class="static-content">
                                    <figure class="image-box"><img src="assets/images/project/project-23.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/project/project-29.jpg" alt=""></figure>
                                        <div class="view-btn"><a href="assets/images/project/project-23.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                        <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Microbiology</span>
                                        <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                        <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn centred">
                <a href="research.html" class="theme-btn">Load More</a>
            </div>
        </div>
    </section>
    <!-- research-page-section end -->
</x-frontend-app-layout>
