<x-frontend-app-layout :title="'Recent Trainings'">
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
                <h1>Recent Trainings</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                    <li>Recent Trainings</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- blog-grid -->
    <section class="blog-grid sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/news/news-1.jpg') }}" alt=""></figure>
                                <div class="link-btn"><a href="blog-details.html"><i class="flaticon-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="category"><a href="blog-details.html">Laboratory</a></div>
                                <ul class="post-info clearfix">
                                    <li>11 August, 2022</li>
                                    <li><a href="blog-details.html">By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Ensure Your Product Quality with a Biogenix Lab</a></h3>
                                <div class="lower-box">
                                    <div class="link"><a href="blog-details.html">Read More</a></div>
                                    <div class="right-info">
                                        <ul class="social-links clearfix">
                                            <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a>
                                            </li>
                                            <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                        </ul>
                                        <div class="comments-box"><a href="blog-details.html"><i
                                                    class="fa-regular fa-comment-dots"></i>2</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper centred">
                <ul class="pagination clearfix">
                    <li><a href="blog-2.html"><i class="flaticon-left-arrow"></i></a></li>
                    <li><a href="blog-2.html" class="current">01</a></li>
                    <li><a href="blog-2.html">02</a></li>
                    <li><a href="blog-2.html"><i class="flaticon-right-arrow"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- blog-grid end -->
</x-frontend-app-layout>
