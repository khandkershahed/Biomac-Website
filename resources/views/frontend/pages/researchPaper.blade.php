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
                <h1>Our Research Papers</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Research Papers</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- research-page-section -->
    <section class="sidebar-page-container blog-small-image sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-classic-content">
                        @foreach ($papers as $paper)
                            <div class="news-block-two">
                                <div class="inner-box">
                                    {{-- <div class="image-inner">
                                        <div class="category"><a href="blog-details.html">Laboratory</a></div>
                                        <figure class="image-box">
                                            <a href="blog-details.html"><img src="assets/images/news/news-27.jpg" alt=""></a>
                                        </figure>
                                    </div> --}}
                                    <div class="content-box">
                                        <div class="d-flex justify-content-between">
                                            <div class="me-3">
                                                <ul class="post-info clearfix">
                                                    <li>{{ Carbon\Carbon::parse($paper->date)->format('d M, Y') }}                                                    </li>
                                                    <li><a href="javascript:void(0)">By {{ $paper->author }}</a></li>
                                                    <li>Impact Factor: {{ $paper->impact_factor }}</li>
                                                </ul>
                                                <h3><a href="{{ $paper->link }}">{{ $paper->name }}</a></h3>
                                                <h6 class="mb-2">DOI : {{ $paper->doi }}</h6>
                                                <p>{{ $paper->journal_name }}</p>
                                            </div>
                                            @if (!empty($paper->citation))
                                                <div class="text-center">
                                                    <ul class="post-info clearfix">
                                                        <li>Cited By</li>
                                                    </ul>
                                                    <h3><a href="{{ $paper->link }}">{{ $paper->citation }}</a></h3>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="lower-box">
                                            <div class="link"><a href="{{ $paper->link }}">Read More</a></div>
                                            {{-- <div class="right-info">
                                                <ul class="social-links clearfix">
                                                    <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                                    <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                                    <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                                </ul>
                                                <div class="comments-box clearfix">
                                                    <a href="{{ $paper->link }}"><i class="fa-regular fa-comment-dots"></i>3</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="blog-4.html"><i class="flaticon-left-arrow"></i></a></li>
                                <li><a href="blog-4.html" class="current">01</a></li>
                                <li><a href="blog-4.html">02</a></li>
                                <li><a href="blog-4.html"><i class="flaticon-right-arrow"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-inner">
                                <form action="https://st.ourhtmldemo.com/new/Biogenix/blog-4.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Enter Keyword..." required="">
                                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="blog-details.html">Chemicals<i class="flaticon-right-arrow"></i><span>05</span></a></li>
                                    <li><a href="blog-details.html">Equipments<i class="flaticon-right-arrow"></i><span>02</span></a></li>
                                    <li><a href="blog-details.html">Laboratory<i class="flaticon-right-arrow"></i><span>14</span></a></li>
                                    <li><a href="blog-details.html">Laboratory<i class="flaticon-right-arrow"></i><span>03</span></a></li>
                                    <li><a href="blog-details.html">Technology<i class="flaticon-right-arrow"></i><span>09</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <span class="post-date">16 July, 2022</span>
                                    <h5><a href="blog-details.html">All you Need to <br />Know about this Liver Disease</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <span class="post-date">11 August, 2022</span>
                                    <h5><a href="blog-details.html">Ensure Your Product Quality with a Biogenix Lab</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <span class="post-date">21 July, 2022</span>
                                    <h5><a href="blog-details.html">In the Pursuit of <br />Quality a Laboratory Perspective</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="blog-details.html">Agriculture</a></li>
                                    <li><a href="blog-details.html">Burners</a></li>
                                    <li><a href="blog-details.html">Clamp</a></li>
                                    <li><a href="blog-details.html">Digital</a></li>
                                    <li><a href="blog-details.html">Equipment</a></li>
                                    <li><a href="blog-details.html">Food</a></li>
                                    <li><a href="blog-details.html">Health</a></li>
                                    <li><a href="blog-details.html">Hormone</a></li>
                                    <li><a href="blog-details.html">Research</a></li>
                                    <li><a href="blog-details.html">Residue</a></li>
                                    <li><a href="blog-details.html">Pathology</a></li>
                                    <li><a href="blog-details.html">Pharmaceutical</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="subscribe-widget centred">
                            <div class="inner-box" style="background-image: url(assets/images/resource/sidebar-2.jpg);">
                                <div class="icon-box"><i class="flaticon-newsletter"></i></div>
                                <h3>Subscribe Us</h3>
                                <p>Subscribe us to get latest news & articles in your inbox.</p>
                                <div class="form-inner">
                                    <form action="https://st.ourhtmldemo.com/new/Biogenix/contact.html" method="post">
                                        <div class="form-group">
                                            <i class="fa-sharp fa-solid fa-envelope-open"></i>
                                            <input type="email" name="email" placeholder="Email Address..." required="">
                                            <button type="submit">Subscribe Us</button>
                                        </div>
                                    </form>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">Terms & Conditions.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
    <!-- research-page-section end -->
</x-frontend-app-layout>
