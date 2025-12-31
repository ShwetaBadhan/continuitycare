@extends("frontend.layout.master")
@section("title", "Supported Independent Living")
@section("content")
    <div class="services-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="details-content">
                        <img src="assets/images/services-details-img.jpg" class="rounded-4" alt="services-details">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <h3>Independently living at your happiest.</h3>
                        <p>Our mission is to create meaningful impact by delivering innovative, reliable, and sustainable
                            solutions that empower individuals communities we are committed to integrity, collaboration, and
                            excellence in everything we do, striving to foster growth, inspire progress</p>
                    </div>
                </div>
            </div>





            <!-- Start Case Study Area -->
            <div class="case-study-area pb-120 pt-80 pt-120">
                <div class="container mw-1685">

                    <div class="row g-4">
                        <div class="details-content">
                            <h3>Choose your preferred Supported Independent Living home</h3>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <a href="{{ route("accommodation-details") }}"
                                class="case-study-single-item-three d-block position-relative z-1">
                                <img src="assets/images/case-study8.jpg" class="img" alt="case-study">

                                <div class="case-study-content">
                                    <span class="counseling">North Strathfield</span>
                                    <h6 class="text-white">This brand-new development offers 14 architecturally designed SDA
                                        apartments. </h6>
                                </div>
                                <span class="read-btn">
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <a href="{{ route("accommodation-details") }}"
                                class="case-study-single-item-three d-block position-relative z-1">
                                <img src="assets/images/case-study9.jpg" class="img" alt="case-study">

                                <div class="case-study-content">
                                    <span class="counseling">Liverpool</span>
                                    <h6 class="text-white">Experience a new era of comfort, accessibility, and community.
                                    </h6>
                                </div>
                                <span class="read-btn">
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <a href="{{ route("accommodation-details") }}"
                                class="case-study-single-item-three d-block position-relative z-1">
                                <img src="assets/images/case-study10.jpg" class="img" alt="case-study">

                                <div class="case-study-content">
                                    <span class="counseling">Bathurst</span>
                                    <h6 class="text-white">Nestled in the heart of Bathurst, these brand-new villas redefine
                                        exceptional living.</h6>
                                </div>
                                <span class="read-btn">
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </a>
                        </div>




                    </div>
                </div>
            </div>
            <!-- End Case Study Area -->

            <div class="row">

                <div class="col-md-6">
                    <div class="details-content">
                        <h3>Applying for SIL funding</h3>
                        <p>Our mission is to create meaningful impact by delivering innovative, reliable, and sustainable
                            solutions that empower individuals communities we are committed to integrity, collaboration, and
                            excellence in everything we do, striving to foster growth, inspire progress</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <img src="assets/images/services-details-img.jpg" class="rounded-4" alt="services-details">
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection