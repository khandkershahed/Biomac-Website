<x-frontend-app-layout :title="'FAQs'">
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
            <h1>Faq’s</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Faq’s</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- faq-section -->
<section class="faq-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="faq-sidebar">
                    <div class="text">
                        <h3>Ask Our Experts</h3>
                        <p>Ask your questions to our expert team and get answers asap.</p>
                    </div>
                    <div class="form-inner">
                        <form action="https://st.ourhtmldemo.com/new/Biogenix/faq.html" method="post">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Question..."></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn">submit Here</button>
                            </div>
                        </form>
                    </div>
                    <div class="lower-text">
                        <p><span>*</span> We never share your email.</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 content-side">
                <div class="faq-content">
                    <div class="upper-box">
                        <div class="title">
                            <h2 class="text-black">Frequently Asked Questions ?</h2>
                        </div>
                    </div>
                    <ul class="accordion-box">
                        @foreach ($faqs as $faq)
                            <li class="accordion block {{ $loop->first ? 'active-block' : '' }}">
                                <div class="acc-btn {{ $loop->first ? 'active' : '' }}">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow"></i>
                                    </div>
                                    <h4>{{ $faq->question }}</h4>
                                </div>
                                <div class="acc-content {{ $loop->first ? 'current' : '' }}">
                                    <div class="text">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->
</x-frontend-app-layout>
