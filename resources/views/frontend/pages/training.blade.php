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
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Recent Trainings</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- blog-grid -->
    <section class="blog-grid sec-pad">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('images/training_3.png') }}" alt="">
                                </figure>
                                <div class="link-btn"><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/"><i
                                            class="flaticon-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="category"><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/">Online
                                        Training</a></div>
                                <ul class="post-info clearfix">
                                    <li>17th April, 2025 to 21st April, 2025</li>
                                </ul>
                                <h3><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/">Online Training on
                                        Metagenomics Data Analysis: From Raw Data to Biological Insights</a></h3>
                                <div class="lower-box">
                                    <div class="link"><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/">Read
                                            More</a></div>
                                    <div class="right-info">
                                        <ul class="social-links clearfix">
                                            <li><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/"><i
                                                        class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="https://www.facebook.com/share/p/12HbcYv8n6Q/"><i
                                                        class="fa-brands fa-whatsapp"></i></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.linkedin.com/posts/biomac-lab_metagenomics-bioinformatics-onlinetraining-activity-7305709710802857985-7tbh?utm_source=share&utm_medium=member_desktop&rcm=ACoAACk3_osBdT2YaoPKyTq_OT5hk4jobnwnY9w">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        {{-- <div class="comments-box"><a
                                                href="https://www.facebook.com/share/p/12HbcYv8n6Q/"><i
                                                    class="fa-regular fa-comment-dots"></i>2</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="pagination-wrapper centred">
                <ul class="pagination clearfix">
                    <li><a href="blog-2.html"><i class="flaticon-left-arrow"></i></a></li>
                    <li><a href="blog-2.html" class="current">01</a></li>
                    <li><a href="blog-2.html">02</a></li>
                    <li><a href="blog-2.html"><i class="flaticon-right-arrow"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </section>
    <!-- blog-grid end -->
</x-frontend-app-layout>
