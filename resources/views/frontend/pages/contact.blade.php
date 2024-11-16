<x-frontend-app-layout :title="'Contact Us'">
    <section class="map py-0">
        @if (optional($banner)->bg_image)
            <img class="img-fluid" src="{{ asset('storage/' . optional($banner)->bg_image) }}" alt="">
        @endif
        {{-- <iframe
            src="{{ asset('frontend/assets/images/banners/8.jpg') }}"
            width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <div class="map-container">
            <div class="contact-panel p-0">
                <div class="panel-header">
                    <h3 class="panel-title color-white mb-0" style="text-transform:initial;">Offices and Main Labs</h3>
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


    <!-- ======================
         clients
      ========================= -->
    {{-- <section class="clients pt-50 pb-50 border-top">
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
    </section> --}}
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
