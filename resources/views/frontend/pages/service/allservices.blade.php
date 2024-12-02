<x-frontend-app-layout :title="'Services'">
    <!-- page-title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }})"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- service-page-section -->
    <section class="service-page-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="sub-title">What We offer</span>
                <h2>Reliable diagnostic services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details.html"><img src="assets/images/service/service-1.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-biochemistry"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="service-details.html">Biochemistry Tests</a>
                                </h3>
                                <p>
                                    These cases are perfectly simple and easy distinguish free
                                    hour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details-2.html"><img src="assets/images/service/service-2.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="service-details-2.html">Microbiology Tests</a>
                                </h3>
                                <p>
                                    Mistaken idea of denouncing pleasure pain was we will give
                                    complete.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details-3.html"><img src="assets/images/service/service-3.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box"><i class="flaticon-skin"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="service-details-3.html">Histopatology Tests</a>
                                </h3>
                                <p>
                                    Desires to obtain pain of itself because is pain but
                                    because occasionally.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details.html"><img src="assets/images/service/service-7.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box"><i class="flaticon-skin"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Hormonal Assay</a></h3>
                                <p>
                                    Mistaken idea of denouncing pleasure pain was we will give
                                    complete.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details-2.html"><img src="assets/images/service/service-8.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-biochemistry"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="service-details-2.html">Clinical Pathology</a>
                                </h3>
                                <p>
                                    Desires to obtain pain of itself because is pain but
                                    because occasionally.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="service-details-3.html"><img src="assets/images/service/service-9.jpg"
                                            alt="" /></a>
                                </figure>
                                <div class="icon-box">
                                    <i class="flaticon-microorganism"></i>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details-3.html">Cytopathology</a></h3>
                                <p>
                                    These cases are perfectly simple and easy distinguish free
                                    hour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-page-section end -->
</x-frontend-app-layout>
