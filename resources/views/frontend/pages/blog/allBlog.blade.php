<x-frontend-app-layout :title="'All Blogs'">
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
                <h1>Blogs</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="blog-grid news-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix text-center">
                @forelse($blog_posts as $blog_post)
                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('storage/' . $blog_post->image) }}" alt="">
                                    </figure>
                                    <div class="link-btn"><a href="{{ route('blog.details', $blog_post->slug) }}"><i
                                                class="flaticon-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a
                                            href="{{ route('blog.details', $blog_post->slug) }}">Laboratory</a></div>
                                    <ul class="post-info clearfix">
                                        <li>11 August, 2022</li>
                                        <li><a href="{{ route('blog.details', $blog_post->slug) }}">By Admin</a></li>
                                    </ul>
                                    <h3><a
                                            href="{{ route('blog.details', $blog_post->slug) }}">{{ $blog_post->title }}</a>
                                    </h3>
                                    <div class="lower-box">
                                        <div class="link">
                                            <a href="{{ route('blog.details', $blog_post->slug) }}">Read More</a>
                                        </div>
                                        <div class="right-info">
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a>
                                                </li>
                                                <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                            </ul>
                                            <div class="comments-box clearfix">
                                                <a href="{{ route('blog.details', $blog_post->slug) }}"><i
                                                        class="fa-regular fa-comment-dots"></i>2</a>
                                                <a href="{{ route('blog.details', $blog_post->slug) }}"><i
                                                        class="fa-regular fa-eye"></i>10</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                        <h3>No Blog Found</h3>
                    </div>
                @endforelse
            </div>
            @if ($blog_posts->hasPages())
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        {{-- Previous Page Link --}}
                        @if ($blog_posts->onFirstPage())
                            <li class="prev disabled"><a href="#">&laquo;</a></li>
                        @else
                            <li class="prev"><a href="{{ $blog_posts->previousPageUrl() }}">&laquo;</a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($blog_posts->links()->elements[0] as $page => $url)
                            @if ($page == $blog_posts->currentPage())
                                <li class="active"><a href="#">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($blog_posts->hasMorePages())
                            <li class="next"><a href="{{ $blog_posts->nextPageUrl() }}">&raquo;</a></li>
                        @else
                            <li class="next disabled"><a href="#">&raquo;</a></li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </section>
    <!-- blog-grid end -->
</x-frontend-app-layout>
