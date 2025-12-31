@extends("frontend.layout.master")
@section("title", " Our Services | Continuity Care")
@section("content")
   <!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg2.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Our Services</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            Our Services
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner Area -->

        <!-- Start Services Area -->
        <div class="services-area ptb-120">
            <div class="container mw-1685">
                <div class="row g-4" data-cues="slideInUp" data-duration="900">
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service3.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>In Home Care</h3>
                                <p>For residents in need of hospice or palliative care we provide sensitive and supportive services that prioritize comfort and emotional</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service1.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>Care Coordination/Navigation</h3>
                                <p>We coordinate with doctors specialists and therapists provide medical care regular health checks medication management health support</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service2.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>Supported Independent Living</h3>
                                <p>Our in house culinary team prepares fresh balanced meals tailored to meet the nutritional needs and preferences of seniors</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service4.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>Community Nursing</h3>
                                <p>By offering personalized care promoting independence and fostering meaningful connections we ensure that every individual</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service5.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>Community Nursing</h3>
                                <p>Old care is a vital part of building a compassionate and respectful society involves more than just meeting physical needs about providing</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="{{route("service-details")}}" class="d-sm-flex d-block services-single-item text-decoration-none style-two border">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="assets/images/icon/service6.png" alt="service">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3>Accommodation (SIL/SDA)</h3>
                                <p>We believe that every elder deserves to feel safe valued and cared for and we are committed to creating an environment are treated</p>
                                <span class="read-more d-flex align-items-center">
                                    Read More
                                    <img src="assets/images/right.svg" alt="right">
                                </span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-12">
                        <div class="pagination-area mt-md-3 mt-lg-4 pt-lg-3 d-flex align-items-center justify-content-center">
                            <button class="next page-numbers border-0">
                                <i class="ti ti-chevron-left"></i>
                            </button>
            
                            <span class="page-numbers border-0 current" aria-current="page">1</span>
                            <button class="page-numbers border-0">2</button>
                            <button class="page-numbers border-0">3</button>
                            
                            <button class="next page-numbers border-0">
                                <i class="ti ti-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
@endsection