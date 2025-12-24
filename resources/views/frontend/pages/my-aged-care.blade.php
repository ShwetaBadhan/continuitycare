@extends("frontend.layout.master")
@section("title", "My Aged Care")
@section("content")
<!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg6.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="main-title mx-auto text-white">NDIS Support Services for Independent Living</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            NDIS Support Services for Independent Living
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner Area -->

        <!-- Start Case Study Area -->
        <div class="case-study-area pb-120 pt-80 pt-120">
            <div class="container mw-1685">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="details-content">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <img src="assets/images/case-study9.jpg" class="rounded-4" alt="case-study">
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/images/case-study13.jpg" class="rounded-4" alt="case-study">
                                </div>
                            </div>

                            <h3>Who This Is For</h3>
                            <p>Whether participating in a hobby, enjoying time with others, or simply relaxing in a cheerful environment, our recreational areas help promote emotional well-being and a strong sense of community. They are more than just spaces they are places where memories</p>

                            <p>Our healthcare services are built on a foundation of professionalism, compassion, and personalized care. We provide a wide range of medical support tailored to meet individual needs, including routine health monitoring, chronic condition management, rehabilitation, and preventive care. Delivered by skilled healthcare professionals, our services prioritize safety, comfort, and dignity at every stage.</p>

                            <h3>Our Services</h3>
                            <p>Our recreational areas are thoughtfully designed to inspire joy, engagement, and connection among residents. These welcoming spaces offer opportunities for fun, creativity, and social interaction through a variety of activities from games and arts to music</p>

                            <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-center gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span>Technology solutions such as remote health monitoring and communication tools</span>
                                </li>
                                <li class="d-flex align-items-center gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span>A nutritionist designed a balanced meal plan to address</span>
                                </li>
                                <li class="d-flex align-items-center gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span>The home environment was optimized for safety and comfort, with modifications to support</span>
                                </li>
                                <li class="d-flex align-items-center gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span>Health conditions were effectively managed, leading to a noticeable improvement</span>
                                </li>
                            </ul>

                            <p>Equipped with modern amenities and guided by experienced professionals, these spaces support physical fitness, mental well-being, and emotional balance. From exercise rooms and therapy areas to relaxation zones and wellness programs, we offer a holistic approach to care that nurtures both body and mind. By encouraging active lifestyles and personal growth</p>

                            <h3>Assessment Support</h3>
                            <p>Whether relaxing, socializing, or enjoying quiet time, individuals can move around with ease and independence. Spacious living not only enhances physical comfort but also contributes to emotional well-being promoting a lifestyle of dignity, peace, and connection.</p>

                            <div class="my-4 position-relative">
                                <img src="assets/images/case-study20.jpg" class="rounded-4" alt="case-study2">

                                <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="bg-color">
                                    <a href="https://youtu.be/78GehqOuq-A?si=WSjyu8eJ-TPiQ5QP" data-fslightbox="1" class="video-btn">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                </div>
                            </div>
                            </div>

                            <p>Our outdoor spaces are designed to offer a peaceful, refreshing environment where individuals can relax, connect with nature, and enjoy fresh air daily. Whether it's a quiet garden, a shaded patio, or a walking path surrounded by greenery, these areas provide a safe and accessible retreat that supports physical activity and emotional well-being</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="sidebar mw-442 ms-xl-auto">
                            <div class="sidebar-widget widget-search bg-f2f3f5">
                                <h3>Search Here</h3>

                                <form class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    
                                    <button type="submit" class="search-btn">
                                        <i class="ti ti-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="sidebar-widget bg-f2f3f5">
                                <h3>Case information</h3>

                                <ul class="p-0 m-0 list-unstyled">
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Date:</span>
                                        <span>01 Sep 2025</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category:</span>
                                        <span>Health Counseling</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Tags:</span>
                                        <span>Depression, Guidance</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Client:</span>
                                        <span>Fabian Brandon</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span>Rating:</span>
                                        <div class="d-flex gap-1">
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget bg-f2f3f5">
                                <h3>Get in touch</h3>

                                <form>
                                    <div class="mb-4">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-4">
                                        <textarea rows="5" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="default-btn w-100">
                                            <span class="d-flex gap-10 align-items-center justify-content-center">
                                                <span>contact now</span>
                                                <img src="assets/images/right-white.svg" alt="right-white">
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Case Study Area -->
@endsection