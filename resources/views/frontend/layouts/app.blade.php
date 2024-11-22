<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="title" content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta name="description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="og:title" content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta property="og:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="og:image"
        content="{{ optional($setting)->site_logo_black && file_exists(public_path('storage/' . optional($setting)->site_logo_black)) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="twitter:title" content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta property="twitter:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="twitter:image"
        content="{{ optional($setting)->site_logo_black && file_exists(public_path('storage/' . optional($setting)->site_logo_black)) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}" />

    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="shortcut icon" type="image/png">

    <title>
        {{ optional($setting)->site_title ? optional($setting)->site_title : config('app.name', 'BioMac Lab') }}
    </title>

    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/libraries.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_awesome_5_15_1.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div><!-- /.preloader -->
        {{-- Header --}}
        @include('frontend.layouts.header')
        {{-- Header --}}
        {{ $slot }}
        {{-- Footer --}}
        @include('frontend.layouts.footer')
        {{-- Footer --}}
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

        <svg class="svg-pathes" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">

            <clipPath id="hexagon-clippath" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
                </path>
            </clipPath>
            <clipPath id="hexagon-clippath2" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
                </path>
            </clipPath>
            <clipPath id="path-direction-right" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.006,1 C0.156,1,0.295,0.972,0.371,0.926 L0.95,0.574 C1,0.528,1,0.472,0.95,0.426 L0.371,0.074 C0.295,0.028,0.156,0,0.006,0 L0.006,1">
                </path>
            </clipPath>
            <clipPath id="path-direction-left" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.892,1 L0.892,0 L1,0 L1,1 L0.892,1 M0.05,0.574 C-0.017,0.528,-0.017,0.472,0.05,0.426 L0.567,0.074 C0.634,0.028,0.757,0,0.892,0 L0.892,1 C0.757,1,0.634,0.972,0.567,0.926 L0.05,0.574">
                </path>
            </clipPath>
            <clipPath id="path-direction-left2" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0 C0.85,0,0.711,0.028,0.635,0.074 L0.056,0.426 C-0.019,0.472,-0.019,0.528,0.056,0.574 L0.635,0.926 C0.711,0.972,0.85,1,1,1 L1,0">
                </path>
            </clipPath>
            <clipPath id="path-direction-right2" clipPathUnits="objectBoundingBox">
                <path
                    d="M0,0 C0.151,0,0.289,0.028,0.365,0.074 L0.944,0.426 C1,0.472,1,0.528,0.944,0.574 L0.365,0.926 C0.289,0.972,0.151,1,0,1 L0,0">
                </path>
            </clipPath>
            <clipPath id="path-direction-up" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.258 C1,0.258,1,0.258,1,0.258 L1,0.258 L1,0.976 C1,0.989,0.993,1,0.983,1 L0.017,1 C0.007,1,0,0.989,0,0.976 L0,0.257 L0,0.257 C0,0.219,0.028,0.183,0.074,0.164 L0.426,0.015 C0.472,-0.005,0.528,-0.005,0.574,0.015 L0.926,0.164 C0.972,0.183,1,0.219,1,0.257 L1,0.257 L1,0.258">
                </path>
            </clipPath>
            <clipPath id="path-direction-down" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.859 C0.998,0.88,0.97,0.898,0.926,0.909 L0.574,0.992 C0.528,1,0.472,1,0.426,0.992 L0.074,0.909 C0.03,0.898,0.002,0.88,0,0.859 L0,0.859 L0,0.857 C0,0.856,0,0.856,0,0.856 L0,0.856 L0,0 L1,0 L1,0.859 L1,0.859">
                </path>
            </clipPath>
            <clipPath id="path-direction-down2" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.743 C1,0.781,0.972,0.817,0.926,0.836 L0.574,0.985 C0.528,1,0.472,1,0.426,0.985 L0.074,0.836 C0.028,0.817,0,0.781,0,0.743 L0,0.743 L0,0.742 C0,0.742,0,0.742,0,0.742 L0,0.742 L0,0.024 C0,0.011,0.007,0,0.017,0 L0.983,0 C0.993,0,1,0.011,1,0.024 L1,0.743 L1,0.743">
                </path>
            </clipPath>
            <clipPath id="path-direction-down-sm" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.686 C0.997,0.732,0.969,0.773,0.926,0.796 L0.574,0.982 C0.528,1,0.472,1,0.426,0.982 L0.074,0.796 C0.03,0.773,0.003,0.732,0,0.686 L0,0.686 L0,0.681 C0,0.68,0,0.68,0,0.679 L0,0.679 L0,0.042 C0,0.019,0.011,0,0.024,0 L0.976,0 C0.989,0,1,0.019,1,0.042 L1,0.686 L1,0.686">
                </path>
            </clipPath>

            <clipPath id="path-direction-left-large" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.301,1 L0.301,0 L1,0 L1,1 L0.301,1 M0.191,0.926 L0.017,0.574 C-0.006,0.528,-0.006,0.472,0.017,0.426 L0.191,0.074 C0.214,0.028,0.256,0,0.301,0 L0.301,1 C0.256,1,0.214,0.972,0.191,0.926">
                </path>
            </clipPath>
            <clipPath id="path-direction-right-large" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.983,0.574 L0.809,0.926 C0.786,0.972,0.744,1,0.699,1 L0.699,0 C0.744,0,0.786,0.028,0.809,0.074 L0.983,0.426 C1,0.472,1,0.528,0.983,0.574 M0,0 L0.699,0 L0.699,1 L0,1 L0,0">
                </path>
            </clipPath>
        </svg>

    </div><!-- /.wrapper -->

    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
