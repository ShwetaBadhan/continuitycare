@extends("frontend.layout.master")
@section("title", "NDIS Support Services for Independent Living")
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

                            <h3>Empowering Your NDIS Journey</h3>
                            <p>At Continuity Care, we understand that the NDIS is more than just a funding model—it is a gateway to your independence. We specialize in helping you translate your NDIS plan into a lifestyle that reflects your choices, your goals, and your dignity.</p>

                           
                            <h3>How We Support NDIS Participants</h3>
                            <p>We provide a comprehensive range of services designed to simplify the complexity of the scheme while maximizing the value of your funding.</p>

                            <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Support Coordination:</strong>Our expert coordinators act as your partner, helping you understand your plan, connect with the right providers, and build the skills to manage your supports independently over time.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Assistance with Daily Life:</strong>We bridge the gap in your daily routine by providing compassionate support for personal tasks, meal preparation, and household management, ensuring you live safely and comfortably in your own home.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Capacity Building & Skill Development:</strong>We focus on your long-term growth by connecting you with therapies and training that improve your mobility, communication, and life skills.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Social & Community Participation:</strong>Your goals often live outside your front door. We provide the support needed to engage in social groups, recreational activities, and community events that matter to you.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Home & Living Navigation:</strong>Whether it’s exploring Individualised Living Options (ILO) or navigating Specialist Disability Accommodation (SDA), we help you find and maintain the right home environment for your needs.</span>
                                </li>
                            </ul>

                           
                            <h3>Why Choose Continuity Care?</h3>
                           
                           <ul class="p-0 my-4 list-unstyled">
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Choice and Control:</strong>You are always the decision-maker. We provide expert advice, but you choose the "who, when, and how" of your care.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Rapid Onboarding: </strong>We eliminate administrative delays so you can start accessing your supports as quickly as possible.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Transparent Budget Management:</strong>No hidden fees. We provide clear oversight of your NDIS budget to ensure every dollar is working toward your goals.</span>
                                </li>
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span><strong>Bridging Clinical & Daily Care:</strong>Our unique approach ensures that your clinical requirements are met without compromising your daily freedom and lifestyle.</span>
                                </li>
                               
                            </ul>
                            {{-- <div class="my-4 position-relative">
                                <img src="assets/images/case-study20.jpg" class="rounded-4" alt="case-study2">

                                <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="bg-color">
                                    <a href="https://youtu.be/78GehqOuq-A?si=WSjyu8eJ-TPiQ5QP" data-fslightbox="1" class="video-btn">
                                        <i class="ti ti-player-play-filled"></i>
                                    </a>
                                </div>
                            </div>
                            </div> --}}

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