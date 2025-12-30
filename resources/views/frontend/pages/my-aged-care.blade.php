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

                            <h3>Navigating the New Era of Aged Care</h3>
                            <p>At Continuity Care, we believe that growing older should never mean losing your independence. We specialize in helping seniors navigate the Australian Government’s My Aged Care system, ensuring you receive the right level of support to remain safely and happily in your own home.</p>

                           
                           
                            <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Care Coordination & Navigation:</strong> We help you plan your services and manage your support so you can focus on living.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Clinical & Nursing Support:</strong>Access to professional health services—such as nursing, wound care, and medication management and maintaining your wellbeing.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Everyday Living Assistance:</strong>Practical help with the essentials, including domestic cleaning, laundry, meal preparation, and grocery shopping to keep your home running smoothly.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Personal Care with Dignity:</strong>Compassionate and respectful assistance with daily tasks like showering, dressing, and mobility, provided by a small, consistent team of carers you know and trust.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Social & Community Connection:</strong>Support to stay active and engaged, whether it’s transport to medical appointments, help attending social groups, or companionship for a walk or a chat.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Home Safety & Equipment:</strong>Guidance on making your home safer through simple modifications like grab rails or assisting you in finding the right mobility aids to stay steady on your feet.</span>
                                </li>
                            </ul>

                            
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