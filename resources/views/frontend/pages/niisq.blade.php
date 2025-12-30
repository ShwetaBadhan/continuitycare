@extends("frontend.layout.master")
@section("title", "National Injury Insurance Scheme Queensland")
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

                          
                            <p>The National Injury Insurance Scheme Queensland (NIISQ) is a no-fault scheme designed to provide lifetime treatment, care, and support for individuals who have sustained serious personal injuries in a motor vehicle accident. At Continuity Care, we understand that a catastrophic injury changes everything—not just for the individual, but for their entire family. We act as your expert partner to navigate this complex scheme, bridging the gap between clinical rehabilitation and returning to a meaningful life. </p>

                            
                            <h3>Our Specialist NIISQ Services</h3>
                           
                            <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Attendant Care & Daily Support:</strong>Respectful, consistent assistance with personal care, domestic tasks, and community access tailored to your specific injury and goals.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Rehabilitation Coordination:</strong>We work alongside your NIISQ Support Planner to connect you with expert Physiotherapy, Occupational Therapy, and Psychology services to aid your physical and emotional recovery.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Home & Vehicle Modifications:</strong>Guidance on accessing funding for essential changes to your living environment or transport to ensure you can move safely and independently.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Clinical Oversight:</strong>Professional management of complex health needs, including nursing care, medication, and specialized medical equipment or prostheses.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Community & Vocational Re-entry:</strong>Support to help you return to work, education, or social activities, ensuring your injury does not define your future potential.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Expert Advocacy:</strong>We help you understand your rights within the scheme, ensuring all your "necessary and reasonable" needs are documented and met during your periodic reviews.</span>
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