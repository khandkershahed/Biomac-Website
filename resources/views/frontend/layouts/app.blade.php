<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="title" content="{{ optional($setting)->site_title ?: config('app.name', 'BioMac Lab') }}" />
    <meta name="description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="og:title" content="{{ optional($setting)->site_title ?: config('app.name', 'BioMac Lab') }}" />
    <meta property="og:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    @php
        $slider = \App\Models\PageBanner::active()->where('page_name', 'home_slider')->latest('id')->first(['bg_image']);
    @endphp
    <meta property="og:image"
        content="{{ !empty($slider->bg_image) ? asset('storage/' . $slider->bg_image) : asset('images/image_why_choose.png') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="twitter:title" content="{{ optional($setting)->site_title ?: config('app.name', 'BioMac Lab') }}" />
    <meta property="twitter:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="twitter:image"
        content="{{ !empty($slider->bg_image) ? asset('storage/' . $slider->bg_image) : asset('images/image_why_choose.png') }}" />

    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="shortcut icon" type="image/png">

    <title>
        {{ optional($setting)->site_title ? optional($setting)->site_title : config('app.name', 'BioMac Lab') }}
    </title>

    <!-- Google Fonts -->
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet"> --}}

    <link href="{{ asset('frontend/assets/css/dm_sans_font.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/saira_font.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/timePicker.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/color.css?v=' . time()) }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css?v=' . time()) }}">

    <link href="{{ asset('frontend/assets/css/responsive.css?v=' . time()) }}" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4628201672342521"
        crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GC9HKRKQT3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GC9HKRKQT3');
    </script>
    {{ $setting->google_analytics ?? '' }}
    {{ $setting->google_adsense ?? '' }}
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4628201672342521"
        crossorigin="anonymous"></script> --}}
</head>

<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner_loader">
                            <div class="spinner-border"></div>
                            <div class="spinner-image"></div>
                        </div>

                        <div class="txt-loading">
                            <span data-text-preloader="B" class="letters-loading"> B </span>
                            <span data-text-preloader="i" class="letters-loading"> i </span>
                            <span data-text-preloader="o" class="letters-loading"> o </span>
                            <span data-text-preloader="M" class="letters-loading"> M </span>
                            <span data-text-preloader="a" class="letters-loading"> a </span>
                            <span data-text-preloader="c" class="letters-loading"> c </span>
                            <span data-text-preloader="" class="letters-loading">&nbsp;</span>
                            <span data-text-preloader="L" class="letters-loading"> L </span>
                            <span data-text-preloader="a" class="letters-loading"> a </span>
                            <span data-text-preloader="b" class="letters-loading"> b </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        {{-- Header --}}
        @include('frontend.layouts.header')
        {{-- Header --}}
        {{ $slot }}
        {{-- Footer --}}
        @include('frontend.layouts.footer')
        {{-- Footer --}}

        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-up-arrow"></i>
        </button>

    </div>

    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/timePicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>


    @stack('scripts')
</body>
