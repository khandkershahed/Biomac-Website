<x-frontend-app-layout :title="'Terms & Conditions'">
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
                <h1>{{ $terms->title ?? 'Terms & Conditions' }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $terms->title ?? 'Terms & Conditions' }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- faq-section -->
    <section class="faq-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 content-side">
                    <div class="faq-content">
                        <div class="upper-box">
                            <div class="title text-center">
                                <h2 class="text-black">{{ $terms->title ?? 'Terms & Condition' }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 content-side">
                    <div class="faq-content">
                        {!! $terms->content ?? '<h5 class="text-center">No terms and conditions available.</h5>' !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- faq-section end -->
</x-frontend-app-layout>
