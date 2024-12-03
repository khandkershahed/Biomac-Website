<x-frontend-app-layout :title="'Team Members'">
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
                <h1>Team Members</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About</li>
                    <li>Team Members</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- team-section -->
    <section class="team-section team-page sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="">
                                    </figure>
                                    <div class="share-option">
                                        <div class="share-icon"><i class="flaticon-sharing"></i></div>
                                        <ul class="social-links clearfix">
                                            @if ($team->email)
                                                <li><a href="mailto:{{ $team->email }}" target="_blank"><i
                                                            class="fas fa-envelope"></i></a></li>
                                            @endif
                                            @if ($team->facebook)
                                                <li><a href="{{ $team->facebook }}" target="_blank"><i
                                                            class="fa-brands fa-facebook"></i></a></li>
                                            @endif

                                            @if ($team->linked_in)
                                                <li><a href="{{ $team->linked_in }}" target="_blank"><i
                                                            class="fa-brands fa-linkedin"></i></a></li>
                                            @endif

                                            @if ($team->github)
                                                <li><a href="{{ $team->github }}" target="_blank"><i
                                                            class="fa-brands fa-github"></i></a></li>
                                            @endif

                                            @if ($team->website)
                                                <li><a href="{{ $team->website }}" target="_blank"><i
                                                            class="fa-solid fa-globe"></i></a></li>
                                            @endif

                                            @if ($team->youtube)
                                                <li><a href="{{ $team->youtube }}" target="_blank"><i
                                                            class="fa-brands fa-youtube"></i></a></li>
                                            @endif

                                            @if ($team->discord)
                                                <li><a href="{{ $team->discord }}" target="_blank"><i
                                                            class="fa-brands fa-discord"></i></a></li>
                                            @endif

                                            @if ($team->tiktok)
                                                <li><a href="{{ $team->tiktok }}" target="_blank"><i
                                                            class="fa-brands fa-tiktok"></i></a></li>
                                            @endif

                                            @if ($team->instagram)
                                                <li><a href="{{ $team->instagram }}" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>

                                </div>
                                <div class="lower-content">
                                    <h3><a href="javascript:void(0)">{{ $team->name }}</a></h3>
                                    <span class="designation">{{ $team->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-section end -->
</x-frontend-app-layout>
