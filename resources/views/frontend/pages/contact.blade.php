<x-frontend-app-layout :title="'Contact Us'">
    <section class="map py-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d879.1423525109836!2d90.4121280370128!3d23.75705914325334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8874da10a55%3A0x6f93a6077e0a68fc!2s9%2FF%20Modhubag%20Rd%2C%20Dhaka%201217!5e0!3m2!1sen!2sbd!4v1717174022561!5m2!1sen!2sbd"
            width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-container">
            <div class="contact-panel p-0">
                <div class="panel-header">
                    <h3 class="panel-title color-white mb-0">Offices and Main Labs</h3>
                </div>
                <div class="accordion" id="accordion">
                    <div class="accordion-item opened">
                        <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                            <a class="accordion-title" href="#">Dhaka Office</a>
                        </div>
                        <div id="collapse1" class="collapse show" data-parent="#accordion">
                            <div class="accordion-body">
                                <ul class="contact-list list-unstyled mb-0">
                                    @if (optional($setting)->primary_phone)
                                        <li>Phone: {{ optional($setting)->primary_phone }}</li>
                                    @endif
                                    <li>Email: <a href="mailto:{{ optional($setting)->info_email }}"
                                            class="__cf_email__">
                                            {{ optional($setting)->info_email }}
                                        </a> <br>
                                        <a href="mailto:{{ optional($setting)->support_email }}" class="__cf_email__">
                                            {{ optional($setting)->support_email }}
                                        </a>
                                    </li>
                                    <li>Address: {{ optional($setting)->address_line_one }} <br>
                                        {{ optional($setting)->address_line_two }}
                                    </li>
                                    <li> Hours: Sat - Thurs: 9:00 am - 7:00 pm </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" data-toggle="collapse" data-target="#collapse2">
                            <a class="accordion-title" href="#">Canada Office</a>
                        </div>
                        <div id="collapse2" class="collapse" data-parent="#accordion">
                            <div class="accordion-body">
                                <ul class="contact-list list-unstyled mb-0">
                                    @if (optional($setting)->alternative_phone)
                                        <li>Phone: {{ optional($setting)->alternative_phone }}</li>
                                    @endif
                                    <li>Email: <a href="mailto:{{ optional($setting)->info_email }}"
                                            class="__cf_email__">
                                            {{ optional($setting)->info_email }}
                                        </a> <br>
                                        <a href="mailto:{{ optional($setting)->support_email }}" class="__cf_email__">
                                            {{ optional($setting)->support_email }}
                                        </a>
                                    </li>
                                    <li>Address: Prince Edward Island, Canada</li>
                                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================
          contact layout 1
      =========================== -->
    <section class="contact-layout1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="heading-layout2 mb-50">
                        <h2 class="heading-subtitle">Contact Us And We Will Respond Soon
                        </h2>
                        <h3 class="heading-title">Get In Touch With Us
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="text-block">
                        <p class="text-block-desc">
                            If you're interested in personalized training in bioinformatics and machine learning within
                            genomic science, we offer tailored one-on-one sessions based on your preferences.
                        </p>
                        <p class="text-block-desc">
                            We also
                            provide internships focused on specific genomic science projects. Contact us to learn more
                            and start your research journey!
                        </p>
                    </div>
                    {{-- <a href="about-us.html" class="btn btn-primary">
                        <span>Accreditation & Licensing</span> <i class="icon-arrow-right"></i>
                    </a> --}}
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <form class="contact-panel-form" method="post" action="{{ route('contact.add') }}"
                        id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                        name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Messages" id="contact-message" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block btn-xhight mt-10">
                                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
        FancyBox Layout 3
      =========================== -->
    <section class="fancybox-layout3 bg-overlay bg-overlay-primary-gradient pt-120 pb-110">
        <div class="bg-img"><img src="{{ asset('frontend') }}/assets/images/backgrounds/1.jpg" alt="backgrounds">
        </div>
        <div class="container">
            <div class="row heading-layout2 heading-light mb-60">
                <div class="col-12">
                    <h2 class="heading-subtitle">Sets The Standard For High Quality Care Since 1975</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading-title">Unwavering Commitment to Excellence and Quality of our Tests and Results.
                    </h3>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading-desc font-weight-bold mb-20">We process more than 2 million patient specimens per
                        week
                        and
                        help medical professionals and patients make important health decisions. The insights we gain
                        through
                        testing then fuel our drug development practice, by identifying patterns and even individuals
                        who might
                        benefit from enrollment in specific drug trials.</p>
                    <p class="heading-desc mb-30">With the support of our diagnostics capabilities to deliver drug
                        trials that
                        are both reliable and rigorous, we're able to support clinical trial research efforts.
                    </p>
                    <div class="d-flex flex-wrap">
                        <a href="about-us.html" class="btn btn-secondary btn-secondary-style2 mr-30">
                            <span>Values and Culture</span> <i class="icon-arrow-right"></i>
                        </a>
                        <a href="contact-us.html" class="btn btn-light btn-outlined">
                            Prepare for a Test
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel-wrapper">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 1100, "settings": {"slidesToShow": 3}},{"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/1.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-equipment"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Improving Your Health through Automation</h4>
                                    <p class="fancybox-desc">Through our investment in new high volume chemistry tech,
                                        we have brought
                                        next generation.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/2.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-drugs"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Partnering for Better Health Outcomes
                                    </h4>
                                    <p class="fancybox-desc">Building a healthier world mean looking at the future
                                        genetics and being
                                        ready for it.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/3.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical10"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Innovations in Vaccines & Drug Development</h4>
                                    <p class="fancybox-desc">In the face of a growing street drug crisis, quick and
                                        accurate screening
                                        is a matter of life.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/4.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical11"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Trust Towards our Shared Purpose</h4>
                                    <p class="fancybox-desc">We care for our patients, each other and our communities
                                        and excellence is
                                        the standard.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/5.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-class"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Empowered to Change, Act, and to Adapt </h4>
                                    <p class="fancybox-desc">We care for our patients, each other and our communities
                                        and excellence is
                                        the standard.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>

                            <div class="fancybox-item">
                                <div class="fancybox-img">
                                    <img src="{{ asset('frontend') }}/assets/images/features/3.jpg" alt="feature">
                                </div>
                                <div class="fancybox-icon">
                                    <i class="icon-chemical10"></i>
                                </div>
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Innovations in Vaccines & Drug Development</h4>
                                    <p class="fancybox-desc">In the face of a growing street drug crisis, quick and
                                        accurate screening
                                        is a matter of life.
                                    </p>
                                    <a href="blog-single-post.html" class="btn btn-link btn-secondary">
                                        <i class="icon-arrow-right icon-filled"></i>
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                    <div class="d-flex mt-40">
                        <div class="rating d-flex mr-30">
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                        </div>
                        <div>
                            <a href="#" class="color-secondary underlined-text-secondary font-weight-bold">97%
                                Customer
                                Satisfaction</a>
                            <span class="color-gray">based on 750+ reviews from our beloved customers and 20,000
                                natural
                                products!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
         Banner Layout 6
      ========================= -->
    <section class="banner-layout6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="banner-img"><img src="{{ asset('frontend') }}/assets/images/banners/4.jpg"
                            alt="banner"></div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
                    <div class="banner-content">
                        <div class="heading-layout2 mb-50">
                            <h2 class="heading-title">Helping Patients Around the Globe!!</h2>
                            <p class="heading-desc">We will work with you to develop individualised care plans,
                                including
                                management
                                of chronic diseases. If we cannot assist, we can provide referrals or advice about the
                                type of
                                practitioner you require to treat all enquiries sensitively.
                            </p>
                        </div>
                        <div class="accordion" id="accordion1">
                            <div class="accordion-item">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse11">
                                    <a class="accordion-title" href="#">Which Plan Is Right For Me?</a>
                                </div>
                                <div id="collapse11" class="collapse" data-parent="#accordion11">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the best
                                            advice from a reputable company as often</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse12">
                                    <a class="accordion-title" href="#">Do I have to commit to a contract?</a>
                                </div>
                                <div id="collapse12" class="collapse" data-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the best
                                            advice from a reputable company as often</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item opened">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse13">
                                    <a class="accordion-title" href="#">What Payment Methods Are Available?</a>
                                </div>
                                <div id="collapse13" class="collapse show" data-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>With any financial product that you buy, it is important that you know you
                                            are getting the best
                                            advice from a reputable company as often</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
         clients
      ========================= -->
    <section class="clients pt-50 pb-50 border-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/1.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/2.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/3.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/4.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/5.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/6.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="{{ asset('frontend') }}/assets/images/clients/4.png" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
