@extends("frontend.layout.master")
@section("title", "Department of Veterans’ Affairs")
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

                            <h3>Honouring Your Service with Dedicated Care</h3>
                            <p>At Continuity Care, we are committed to supporting those who have served our nation. We provide specialized in-home support for veterans and their families through the DVA Community Nursing and Veterans’ Home Care (VHC) programs. Our mission is to bridge the gap between your service-related health needs and your desire to remain independent at home. </p>

                         
                            <h3>Our DVA Specialist Services:</h3>
                            
                            <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Community Nursing:</strong>Expert clinical care delivered by Registered Nurses, including complex wound management, chronic disease support  and medication administration.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Personal Care & Hygiene:</strong>Respectful assistance with daily tasks like bathing, dressing, and grooming to help you maintain your comfort and confidence at home.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Veterans’ Home Care (VHC):</strong>Practical, low-level support for everyday living, including domestic assistance (cleaning and laundry) and meal preparation.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Home & Garden Maintenance:</strong>Essential support to keep your living environment safe, such as minor home repairs, lawn mowing, and gutter cleaning to prevent falls and hazards.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Respite Care:</strong>Vital support for your family and carers, providing them with a necessary break while ensuring you continue to receive high-quality care in a familiar environment.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Coordinated Veterans’ Care (CVC):</strong>We work alongside your GP to provide proactive care coordination, helping to manage chronic conditions and prevent unplanned hospital visits.</span>
                                </li>
                            </ul>

                            
                            <div class="my-4 position-relative">
                               
                                <div class="position-absolute top-50 start-50 translate-middle">
                               
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