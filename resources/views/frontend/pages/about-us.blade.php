@extends("frontend.layout.master")
@section("title", " About Us | Continuity Care")
@section("content")
 <!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg1.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">About Us</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner Area -->

        <!-- Start About Us Area -->
        <div class="about-us-area ptb-120">
            <div class="container mw-1685">
                <div class="row gy-2" data-cues="slideInUp" data-duration="900">
                    <div class="col-lg-4">
                        <span class="top-title">ABOUT US</span>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-60">
                            <h2 class="main-title ms-auto mw-975">Who is Continuity Care?</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-xl-4" data-cues="slideInUp" data-duration="900">
                        <div class="about-us-img">
                            <img src="assets/images/about.jpg" class="ukiyo" alt="about">
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="about-content" data-cues="slideInUp" data-duration="900">
                            <p>Continuity Care is a leading service provider in Australia. We open doors to living independently, finding a great job, meeting great people and achieving life goals. The most important thing we do is bring people together for life’s adventures. Everyone is welcome! With us you will have opportunities and choice. You will belong and be a part of our community.</p>
                            <p>As a registered National Disability Insurance Scheme (NDIS) provider and My Aged Care, we are committed to providing Quality in home and community care through our strong care coordination model of care. </p>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Partner Area -->
        <div class="partner-area pb-120">
            <div class="container mw-1685">
                <div class="text-center" data-cues="slideInUp" data-duration="900">
                    <span class="top-title mb-80">TRUSTED BY 100+ HEALTHCARE PARTNER</span>
                </div>
                
                <div class="swiper partner-slide text-center">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="assets/images/partner1.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner2.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner3.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner4.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner5.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner6.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner1.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner2.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner3.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner4.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner5.png" alt="partner">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/partner6.png" alt="partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area --> 

        <!-- Start How We Work Area -->
        <div class="how-we-work-area-three ptb-120 bg-img" style="background-image: url(assets/images/testimonial-bg.png);">
            <div class="container mw-1685">
                <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                    <div class="col-lg-4">
                        <span class="top-title">VISION TO VICTORY</span>
                    </div>
                    <div class="col-lg-8">
                        <h2 class="main-title ms-auto mw-975">Dedicated To Quality Elderly Care With Compassion And <span class="word-mark">Respect</span> Always</h2>
                        <p>Continuity Care is a not-for-profit organisation and a registered charity with the <a href="https://www.acnc.gov.au/charity/charities/2c2eac96-38af-e811-a963-000d3ad244fd/profile" target="_blank">Australian Charities and Not-for-profit Commission</a>. Our client-centred approach to service is at the core of everything we do.</p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                    <div class="col-xl-4 col-md-6">
                        <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                            <img src="assets/images/work2.jpg" class="rounded-3 mb-4 mb-lg-5" alt="work">

                            <div class="d-flex align-items-center mb-30 mt-0">
                                <div class="flex-shrink-0">
                                    <div class="icon d-flex justify-content-center align-items-center border-primary">
                                        <img src="assets/images/icon/work4.png" alt="work">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h3>Our Purpose</h3>
                                </div>
                            </div>
                            <p>To create an inclusive world where human rights are realised. A world where people of all abilities come together to share in life’s adventure.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                            <img src="assets/images/work3.jpg" class="rounded-3 mb-4 mb-lg-5" alt="work">

                            <div class="d-flex align-items-center mb-30 mt-0">
                                <div class="flex-shrink-0">
                                    <div class="icon d-flex justify-content-center align-items-center border-primary">
                                        <img src="assets/images/icon/work7.png" alt="work">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h3>Our Vision</h3>
                                </div>
                            </div>
                            <p>To improve the lives of people with disability by prioritising their choices, promoting their rights and exploring possibilities together.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                            <img src="assets/images/work4.jpg" class="rounded-3 mb-4 mb-lg-5" alt="work">

                            <div class="d-flex align-items-center mb-30 mt-0">
                                <div class="flex-shrink-0">
                                    <div class="icon d-flex justify-content-center align-items-center border-primary">
                                        <img src="assets/images/icon/work6.png" alt="work">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h3>Our Values</h3>
                                </div>
                            </div>
                              <ul class="p-0 list-unstyled services-list">
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Kind</span>
                                    </li>
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Clear</span>
                                    </li> 
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Team</span>
                                    </li>
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Explore</span>
                                    </li>
                                   
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End How We Work Area -->

      <!-- Start Why Choose Us Area -->
      <section class="why-choose-section">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto text-center section-header">
                    <h2 class="main-title">Why choose Continuity Care?</h2>
                    <p>Enjoy more value, choice and freedom to live life on your terms. With some of the lowest fees in the industry, more of your funding goes directly to the care and support you need. There are no hidden costs and no surprises. You receive transparent pricing and personalised service tailored to you.</p>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="row g-4 mt-5">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-red">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                            </svg>
                        </div>
                        <h3>More value</h3>
                        <p>Low fees mean more care hours for you. We ensure maximum value from your funding, putting your care first.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-blue">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M9 11l3 3L22 4"/>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                        </div>
                        <h3>Total choice</h3>
                        <p>Select the services and carers that work for you without being locked into restrictive agreements.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-purple">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                                <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>
                            </svg>
                        </div>
                        <h3>No hidden costs</h3>
                        <p>Transparent pricing with no surprises. You'll always know exactly what you're paying for.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-teal">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <h3>Fast approvals</h3>
                        <p>Get started quickly with less hassle. Our streamlined process means you receive support when you need it.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-orange">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                        <h3>Personalised support</h3>
                        <p>Care that's tailored to your needs. We ensure a simple and stress-free experience at every step.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-pink">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                            </svg>
                        </div>
                        <h3>Your support, your way</h3>
                        <p>Choose support workers that match your needs. You remain in control of your care journey.</p>
                    </div>
                </div>

                <!-- Feature 7 -->
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="feature-card card-dark">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                <line x1="9" y1="3" x2="9" y2="21"/>
                            </svg>
                        </div>
                        <h3>Continuity Connect Portal</h3>
                        <p>Manage your care anytime, anywhere online. Dedicated support and easy access to everything you need.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Area -->

      <!-- Start Marquee Area -->
        <div class="marquee-wrapper monogram-wrap ptb-120">
            <div class="marquee speed-300">
                <span class="monogram">Flexible scheduling</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Health monitoring</span>
                <span class="monogram">
                    <img src="assets/images/marquee1.jpg" alt="monogram">
                </span>
                <span class="monogram">Comfort and familiarity</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Flexible scheduling</span>
                <span class="monogram">
                    <img src="assets/images/marquee1.jpg" alt="monogram">
                </span>
                <span class="monogram">Health monitoring</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Comfort and familiarity</span>
                <span class="monogram">
                    <img src="assets/images/marquee1.jpg" alt="monogram">
                </span>
                <span class="monogram">Flexible scheduling</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Health monitoring</span>
                <span class="monogram">
                    <img src="assets/images/marquee1.jpg" alt="monogram">
                </span>
                <span class="monogram">Comfort and familiarity</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Flexible scheduling</span>
                <span class="monogram">
                    <img src="assets/images/marquee1.jpg" alt="monogram">
                </span>
                <span class="monogram">Health monitoring</span>
                <span class="monogram">
                    <img src="assets/images/marquee2.jpg" alt="monogram">
                </span>
                <span class="monogram">Comfort and familiarity</span>
            </div>
        </div>
        <!-- End Marquee Area -->
     <!-- Start Subscribe Area -->
        <div class="subscribe-area bg-primary ptb-120 bg-img" style="background-image: url(assets/images/subscribe-bg.png);">
            <div class="container">
                <div class="row g-4" data-cues="slideInUp" data-duration="900">
                    <div class="col-lg-12">
                        <div class="subscribe-content">
                            
                            <h2 class=" text-white">We're here to help!</h2>
                            <h4 class=" text-white">If you would like more information about our services get in touch with our Support Center team.</h4>
 <a href="{{route("contact-us")}}" class="default-btn mt-5">
                                    <div class="d-flex align-items-center gap-10">
                                        <span>Contact Us</span>
                                        <img src="assets/images/right-white.svg" alt="right-white">
                                    </div>
                                </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->

 <div class="about-us-area ptb-120">
 <div class="container">
 <div class="row d-flex align-items-center">
 <div class="col-xl-6">
 <h2 class="main-title">Strategic Plan</h2>
<ul class="p-0 list-unstyled services-list">
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Organisational Strategy 2024-2027</span>
                                    </li>
                                   
                                </ul>
 </div>
 <div class="col-xl-6">
 <h2 class="main-title">Impact Report</h2>
 <ul class="p-0 list-unstyled services-list">
                                    <li class="d-flex gap-12 align-items-center mb-2">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Impact Report 2024</span>
                                    </li>
                                   
                                </ul>
 </div>
 </div>
 
 
 </div>
 </div>
        
   <!-- Start FAQ Area -->
        <div class="faq-area-four ptb-50">
            <div class="container mw-1685">
                <div class="row g-4">
                <h2 class="main-titles">Principle Statements & Codes</h2>
                    <div class="col-lg-12">
                        <div class="accordion faq-wrapper" id="accordionExample" data-cues="slideInUp" data-duration="900">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What services do you offer at your elderly home?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Our goal is to create a safe comfortable and welcoming environment where seniors can enjoy their days with dignity purpose and a strong sense of experienced caregivers tailored support plans and engaging daily activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is medical care available on-site?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Building Permit: Required for new construction, additions, renovations, or major structural changes. Zoning Approval: Ensures your project complies with local land-use regulations (e.g., residential, commercial, industrial). Some projects require both.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do I know if it’s the right time for senior care?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Registering to vote or updating your voter information is the official process that ensures you are eligible to participate in elections and that your personal details are accurate in the voter rolls. This process typically requires providing proof of identity, residency, and age. It can be done online, in person, or by mail, depending on your local election authority. Updating your information is important if you move, change your name, or need to modify party affiliation, as it ensures you receive the correct ballot and can vote without issues. Always verify your registration status after submission to confirm your eligibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                        Can residents personalize their rooms?
                                    </button>
                                </h2>
                                <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Municipal and city government services are public services provided by local government authorities to meet the needs of residents and maintain community well-being. These services vary by city but generally include essential, regulatory, and recreational functions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                        Can Residents Personalize Their Rooms?
                                    </button>
                                </h2>
                                <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Municipal and city government services are public services provided by local government authorities to meet the needs of residents and maintain community well-being. These services vary by city but generally include essential, regulatory, and recreational functions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                        Can Residents Personalize Their Rooms?
                                    </button>
                                </h2>
                                <div id="collapseThree6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Municipal and city government services are public services provided by local government authorities to meet the needs of residents and maintain community well-being. These services vary by city but generally include essential, regulatory, and recreational functions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- End FAQ Area -->
        <br>
@endsection