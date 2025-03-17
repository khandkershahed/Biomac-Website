<x-frontend-app-layout :title="'Contact Us'">

        <!-- page-title -->
        <section class="page-title">
            <div class="bg-layer"
                style="background-image: url({{ !empty(optional($banner)->bg_image) ? asset('storage/' . optional($banner)->bg_image) : asset('frontend/assets/images/background/page-title.jpg') }});">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Get In Touch</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-info-section -->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                            <figure class="image-box">
                                <img src="{{ asset('images/image_5.jpeg') }}" alt=""
                                    style="border-top-left-radius: 90px;
                                border-bottom-right-radius: 90px;">
                            </figure>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="sub-title">Get in Touch</span>
                                    <h2>Have a question to ask us?</h2>
                                </div>
                                <div class="text">
                                    <p class="mb-3">
                                        If you're interested in personalized training in bioinformatics and machine
                                        learning within
                                        genomic science, we offer tailored one-on-one sessions based on your
                                        preferences.
                                    </p>
                                    <p class="mb-3">
                                        We also
                                        provide internships focused on specific genomic science projects. Contact us to
                                        learn more
                                        and start your research journey!
                                    </p>
                                    <p class="mb-3">To get in touch with us, please submit the form below or use given
                                        contact
                                        information.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-question"></i></div>
                                    <h3>Frequntly asked questions.</h3>
                                    <h6>
                                        <a href="{{ route('faq') }}">Faq’s<i class="flaticon-right-arrow"></i>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <h3>Location</h3>
                                <p>{{ optional($setting)->address_line_one }}</p>
                                <h6>
                                    <a href="{{ route('contact') }}">
                                        Check Location<i class="flaticon-right-arrow"></i>
                                    </a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-phone-call-1"></i></div>
                                <h3><a
                                        href="tel:{{ optional($setting)->primary_phone }}">{{ optional($setting)->primary_phone }}</a>
                                </h3>
                                <p>Mon to Sat: 9.00am to 5.00pm <br />Sun: 9.00am to 12.00pm</p>
                                {{-- <h6>
                                    <a href="{{ route('contact') }}">
                                        Get Call Back<i class="flaticon-right-arrow"></i>
                                    </a>
                                </h6> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-message"></i></div>
                                <h3><a
                                        href="Mall:{{ optional($setting)->info_email }}">{{ optional($setting)->info_email }}</a>
                                </h3>
                                <p>To better connect with our team send your mail.</p>
                                <h6><a href="#contact-form">Contact Form<i
                                            class="flaticon-right-arrow"></i></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- location-style-two -->
        <section class="location-style-two bg-color-1">
            <div class="pattern-layer"
                style="background-image: url({{ asset('frontend/assets/images/shape/shape-22.png') }});"></div>
            <div class="google-map-inner">
                <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                    data-icon-path="{{ asset('frontend/assets/images/icons/map-marker.png') }}"
                    data-map-title="Dhaka, Bangladesh" data-map-zoom="12"
                    data-markers='{
                        "marker-1": [5.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 Dhaka</p>","{{ asset('frontend/assets/images/icons/map-marker.png') }}"]
                    }'>

                </div>
                <div class="map-content">
                    <div class="image-box">
                        <img src="{{ asset('frontend/assets/images/resource/map-1.jpg') }}" alt="">
                    </div>
                    <div class="inner-box">
                        {{-- <h6>B</h6> --}}
                        <h3>{{ optional($setting)->address_line_two }}</h3>
                        <ul class="info clearfix">
                            <li>{{ optional($setting)->address_line_one }}</li>
                            <li><a
                                    href="tel:{{ optional($setting)->primary_phone }}">{{ optional($setting)->primary_phone }}</a>
                            </li>
                        </ul>
                        <div class="link"><a href="{{ route('contact') }}">Send Mail</a></div>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Locations</span>
                                <h2>Find nearest branch</h2>
                            </div>
                            <div class="select-box">
                                <select class="selectmenu">
                                    <option selected="selected">Bangladesh</option>
                                </select>
                            </div>
                            {{-- <ul class="others-branches clearfix">
                                <li>We’ve Find 4 Branches Near You,</li>
                                <li><a href="javascript:void(0)">Dhaka<i class="flaticon-right-arrow"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- location-style-two end -->


        <!-- contact-section -->
        <section class="contact-section sec-pad centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 inner-column">
                        <div class="inner-box">
                            <div class="sec-title">
                                <span class="sub-title">Send a Message</span>
                                <h2>Drop your message & get a reply <br />from us</h2>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="{{ route('contact.add') }}" id="contact-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <input type="text" name="name" placeholder="Your Name"
                                                required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <i class="fa-solid fa-envelope"></i>
                                            <input type="email" name="email" required="example@example.com">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone</label>
                                            <i class="fa-solid fa-phone-flip"></i>
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Subject <span class="text-danger">*</span></label>
                                            <i class="fa-solid fa-check-circle"></i>
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Message <span class="text-danger">*</span></label>
                                            <i class="fa-sharp fa-solid fa-text-width"></i>
                                            <textarea name="message" required></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn" name="submit-form">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

    @push('scripts')
        <script>
            $(document).ready(function() {
                var contactForm = $("#contactForm"),
                    contactResult = $('.contact-result');

                contactForm.validate({
                    debug: false,
                    submitHandler: function(form) {
                        contactResult.html('Please Wait...');
                        $.ajax({
                            type: "POST",
                            url: "{{ route('contact.add') }}",
                            data: $(form).serialize(),
                            dataType: 'json',
                            timeout: 20000,
                            success: function(response) {
                                if (response.status === 'success') {
                                    contactResult.html(
                                            '<div class="alert alert-success" role="alert"><strong>' +
                                            response.message + '</strong></div>').delay(3000)
                                        .fadeOut(2000);
                                }
                            },
                            error: function(xhr) {
                                if (xhr.status === 422) {
                                    var errors = xhr.responseJSON.messages;
                                    contactResult.html(
                                        '<div class="alert alert-danger" role="alert"><strong>' +
                                        errors.join('<br>') + '</strong></div>');
                                } else {
                                    contactResult.html(
                                        '<div class="alert alert-danger" role="alert"><strong>There was an error submitting your request. Please try again later.</strong></div>'
                                    );
                                }
                            }
                        });
                        return false;
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
