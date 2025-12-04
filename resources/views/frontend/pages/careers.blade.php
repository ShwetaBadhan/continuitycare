@extends("frontend.layout.master")
@section("title","Career")
@section("content")
<!-- Start Page Banner Area -->
        <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg13.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="main-title mx-auto text-white">Careers</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            Careers
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Careers Area -->
        <div class="careers-area ptb-120">
            <div class="container mw-1685">
                <div class="d-flex flex-wrap careers-single-item position-relative z-1 mb-4">
                    <div class="flex-shrink-0">
                        <span class="job">Job 01</span>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex flex-wrap flex-xl-nowrap justify-content-between gap-20">
                            <div class="careers-content">
                                <div class="d-flex flex-wrap gap-25">
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-clock text-primary"></i>
                                        <span class="fs-15">Remote</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-map-pin text-primary"></i>
                                        <span class="fs-15">258 Parkview Drive Houston</span>
                                    </div>
                                </div>
                                <h3>Certified nursing assistant (CNA)</h3>
                                <p>A career in aged care is centered around compassion respect and a genuine commitment improving the lives elderly individuals professional provide essential support with daily living activities personal</p>

                                <div class="read-more">
                                    <span>View Job</span>
                                    <img src="assets/images/right.svg" alt="right">
                                </div>
                            </div>
                            <div class="careers-img">
                                <img src="assets/images/career1.jpg" alt="career">
                            </div>
                        </div>
                    </div>

                    <a href="{{route("career-details")}}" class="link position-absolute top-0 end-0 start-0 bottom-0 z-1"></a>
                </div>
                <div class="d-flex flex-wrap careers-single-item position-relative z-1 mb-4">
                    <div class="flex-shrink-0">
                        <span class="job">Job 02</span>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex flex-wrap flex-xl-nowrap justify-content-between gap-20">
                            <div class="careers-content">
                                <div class="d-flex flex-wrap gap-25">
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-clock text-primary"></i>
                                        <span class="fs-15">Part Time</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-map-pin text-primary"></i>
                                        <span class="fs-15">456 Berry Street San Luis</span>
                                    </div>
                                </div>
                                <h3>Activity coordinator/Recreation therapist</h3>
                                <p>It includes assisting with daily tasks, providing emotional support and ensuring the overall well-being of those in our care. This profession requires patience and strong communication skill as vital</p>
                                <div class="read-more">
                                    <span>View Job</span>
                                    <img src="assets/images/right.svg" alt="right">
                                </div>
                            </div>
                            <div class="careers-img">
                                <img src="assets/images/career2.jpg" alt="career">
                            </div>
                        </div>
                    </div>

                    <a href="{{route("career-details")}}" class="link position-absolute top-0 end-0 start-0 bottom-0 z-1"></a>
                </div>
                <div class="d-flex flex-wrap careers-single-item position-relative z-1 mb-4">
                    <div class="flex-shrink-0">
                        <span class="job">Job 03</span>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex flex-wrap flex-xl-nowrap justify-content-between gap-20">
                            <div class="careers-content">
                                <div class="d-flex flex-wrap gap-25">
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-clock text-primary"></i>
                                        <span class="fs-15">Remote</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-map-pin text-primary"></i>
                                        <span class="fs-15">954 Farland Avenue Victoria</span>
                                    </div>
                                </div>
                                <h3>Hospice Care Professional</h3>
                                <p>This work requires kindness patience and understanding as every person has unique needs and stories. I chose this career because believe in treating older adults with the respect helping deserve</p>

                                <div class="read-more">
                                    <span>View Job</span>
                                    <img src="assets/images/right.svg" alt="right">
                                </div>
                            </div>
                            <div class="careers-img">
                                <img src="assets/images/career3.jpg" alt="career">
                            </div>
                        </div>
                    </div>

                    <a href="{{route("career-details")}}" class="link position-absolute top-0 end-0 start-0 bottom-0 z-1"></a>
                </div>
                <div class="d-flex flex-wrap careers-single-item position-relative z-1 mb-4">
                    <div class="flex-shrink-0">
                        <span class="job">Job 04</span>
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex flex-wrap flex-xl-nowrap justify-content-between gap-20">
                            <div class="careers-content">
                                <div class="d-flex flex-wrap gap-25">
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-clock text-primary"></i>
                                        <span class="fs-15">Full Time</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-map-pin text-primary"></i>
                                        <span class="fs-15">648 Armory Road Wilmington</span>
                                    </div>
                                </div>
                                <h3>Caregiver/Personal Care Assistant</h3>
                                <p>A career in old care is all about making a positive difference in the lives of elderly people. It involves providing personal support helping with daily activities and offering companionship to those who may need</p>

                                <div class="read-more">
                                    <span>View Job</span>
                                    <img src="assets/images/right.svg" alt="right">
                                </div>
                            </div>
                            <div class="careers-img">
                                <img src="assets/images/career4.jpg" alt="career">
                            </div>
                        </div>
                    </div>

                    <a href="{{route("career-details")}}" class="link position-absolute top-0 end-0 start-0 bottom-0 z-1"></a>
                </div>

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
        <!-- End Careers Area -->
@endsection