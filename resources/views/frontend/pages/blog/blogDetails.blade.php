<x-frontend-app-layout :title="'All Blogs'">
    <style>
        p {
            font-family: 'DM Sans', sans-serif;
            color: #000316;
            font-weight: 500;
        }

        .page-title {
            padding: 160px 0px 22px 0px;
        }

        .page-title h1 {
            margin-bottom: 80px;
        }

        .page-title:before {
            background: #16436f;
        }

        .page-title:after {
            background: -webkit-linear-gradient(0deg, rgb(14 65 115 / 90%), #486a8a 100%);
        }

        @media only screen and (max-width: 767px) {
            .page-title {
                padding-top: 30px;
            }

            .page-title h1 {
                font-size: 40px;
                line-height: 1.5;
            }
        }
    </style>
    <!-- page-title -->
    <section class="page-title blog-details">
        {{-- @if (optional($blog)->banner_image)
            <div class="bg-layer" style="background-image: url({{ asset('storage/' . optional($blog)->banner_image) }});">
            </div>
        @else
            <div class="bg-layer"
                style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }});"></div>
        @endif --}}
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ optional($blog)->title }}</h1>
                <div class="post-discription">
                    <ul class="post-info clearfix">
                        @if (optional($blog->blogCategory)->title)
                            <div class="category"><a
                                    href="{{ route('blog.details', $blog->slug) }}">{{ optional($blog->blogCategory)->title }}</a>
                            </div>
                        @endif
                        <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}</li>
                        @if ($blog->author)
                            <li><a href="{{ route('blog.details', $blog->slug) }}">By {{ $blog->author }}</a>
                            </li>
                        @endif
                    </ul>
                    {{-- <div class="right-info">
                        <ul class="social-links clearfix">
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-square-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-solid fa-basketball"></i></a></li>
                        </ul>
                        <div class="comments-box clearfix">
                            <a href="{{ route('blog.details', $blog->slug) }}"><i
                                    class="fa-regular fa-comment-dots"></i>3</a>
                            <a href="{{ route('blog.details', $blog->slug) }}"><i class="fa-regular fa-eye"></i>26</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-one">
                            <figure class="image-box">
                                @if (optional($blog)->image)
                                    <img src="{{ asset('storage/' . optional($blog)->image) }}" alt="">
                                @endif
                            </figure>
                            <div class="text">
                                <p>
                                    {!! nl2br(optional($blog)->short_description) !!}
                                </p>
                            </div>
                        </div>
                        <div class="content-two">
                            <p>
                                {!! nl2br(optional($blog)->long_description) !!}
                            </p>
                        </div>
                        @php
                            $tags = json_decode($blog->tags, true) ?? [];
                        @endphp

                        @if (count($tags) > 0)
                            <div class="post-tags">
                                <ul class="tags-list clearfix">
                                    <li>
                                        <h4>Tags:</h4>
                                    </li>
                                    @foreach ($tags as $tag)
                                        <li><a href="javascript:void(0)">{{ $tag['value'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="post-nav-btn">
                            @if ($prev_post || $next_post)
                                <div class="inner-box">
                                    @if ($prev_post)
                                        <div class="single-btn prev-btn">
                                            <figure class="image-box">
                                                <img src="{{ asset('storage/' . optional($prev_post)->logo) }}"
                                                    alt="">
                                            </figure>
                                            <a href="{{ route('blog.details', optional($prev_post)->slug) }}"><i
                                                    class="flaticon-left-arrow"></i>Prev Post</a>
                                            <h5>{{ optional($prev_post)->title }}</h5>
                                        </div>
                                    @endif
                                    @if ($next_post)
                                        <div class="single-btn next-btn">
                                            <figure class="image-box">
                                                <img src="{{ asset('storage/' . optional($next_post)->logo) }}"
                                                    alt="">
                                            </figure>
                                            <a href="{{ route('blog.details', optional($next_post)->slug) }}"><i
                                                    class="flaticon-right-arrow"></i>Next Post</a>
                                            <h5>{{ optional($next_post)->title }}</h5>
                                        </div>
                                    @endif
                                </div>
                            @endif
                            <div class="btn-box">
                                <a href="{{ route('blog') }}"><span>Back to Blog Post</span></a>
                            </div>
                        </div>
                        <div class="author-box">
                            <h2>About Author</h2>
                            <div class="inner-box">
                                <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt="">
                                </figure>
                                <h6>Post By</h6>
                                <h3>{{ $blog->author }}</h3>
                                {{-- <p></p>
                                <ul class="social-links clearfix">
                                    <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a></li>

                                    <li><a href="javascript:void(0)"><i class="fa-brands fa-square-twitter"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                        {{-- <div class="comments-box">
                            <h2>Comments</h2>
                            <div class="comment-inner">
                                <div class="comment">
                                    <figure class="comment-thumb"><img src="assets/images/news/comment-1.jpg"
                                            alt=""></figure>
                                    <div class="comment-info">
                                        <h4>Isaac Herman</h4>
                                        <span class="comment-date">June 14, 2022 [11.00am]</span>
                                    </div>
                                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born and
                                        I will give you a complete account of the system.</p>
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="reply-btn">Reply</a>
                                </div>
                                <div class="comment replay-comment">
                                    <figure class="comment-thumb"><img src="assets/images/news/comment-2.jpg"
                                            alt=""></figure>
                                    <div class="comment-info">
                                        <h4>William Cobus</h4>
                                        <span class="comment-date">June 14, 2022 [11.20am]</span>
                                    </div>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it
                                        but who has any right to find fault.</p>
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="reply-btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <div class="text">
                                <h2>Add Your Comments</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="form-inner">
                                <form action="https://st.ourhtmldemo.com/new/Biogenix/{{ route('blog.details', $blog->slug) }}"
                                    method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Comments</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Name*</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email*</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">Save my name, email, and website in this
                                                        browser for the next time I comment.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ($blog_categorys as $blog_category)
                                        <li>
                                            <a href="{{ route('blog') }}">{{ $blog_category->name }}<i
                                                    class="flaticon-right-arrow"></i>
                                                <span>{{ optional($blog_category->blogPost)->count() }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @if ($blog_posts->count() > 0)
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($blog_posts as $blog_post)
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <a href="{{ route('blog.details', $blog_post->slug) }}">
                                                    <img src="{{ asset('storage/' . $blog_post->image) }}"
                                                        alt="{{ $blog_post->title }}">
                                                </a>
                                            </figure>
                                            <span
                                                class="post-date">{{ \Carbon\Carbon::parse($blog_post->created_at)->format('d F, Y') }}</span>
                                            <h5>
                                                <a
                                                    href="{{ route('blog.details', $blog_post->slug) }}">{{ $blog_post->title }}</a>
                                            </h5>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                        {{-- <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    @foreach ($blog_tags as $key => $blog_tag)
                                    @php
                                        $tags = json_decode($blog_tag, true) ?? [];
                                    @endphp
                                        @foreach ($tags as $tag)
                                            <li><a href="javascript:void(0)">{{ $tag['value'] }}</a></li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}
                        <div class="subscribe-widget centred">
                            <div class="inner-box" style="background-image: url(assets/images/resource/sidebar-2.jpg);">
                                <div class="icon-box"><i class="flaticon-newsletter"></i></div>
                                <h3>Subscribe Us</h3>
                                <p>Subscribe us to get latest news & articles in your inbox.</p>
                                <div class="form-inner">
                                    <form action="{{ route('newsletter.add') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <i class="fa-sharp fa-solid fa-envelope-open"></i>
                                            <input type="email" name="email" placeholder="Email Address..."
                                                required>
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
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
</x-frontend-app-layout>
