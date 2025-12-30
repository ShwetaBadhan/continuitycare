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
                            <h2 class="main-title ms-auto mw-975">Empowering Independence Through Compassionate Care and Seamless Navigation</h2>
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
                            <p>Continuity Care is a dedicated provider of disability and independent living services, specializing in comprehensive care coordination and navigation. We are committed to bridging the gap between clinical requirements and daily life, ensuring people with disabilities can live with dignity and independence in the home they love.</p>

                            <div class="row g-4 align-items-end">
                                <div class="col-lg-8">
                                    <div class="d-sm-flex align-items-center maintaining">
                                        <div class="flex-shrink-0 mb-3 mb-sm-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img src="assets/images/icon/about.png" alt="about">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>Integrated Support</h3>
                                            <p>We provide expert guidance through a blend of clinical oversight and practical daily assistance.</p>
                                        </div>
                                    </div>

                                    <ul class="p-0 list-unstyled about-list">
                                        <li class="d-flex align-items-center gap-12">
                                            <img src="assets/images/check.png" alt="check">
                                            <span>Keeping Them Safe and Comfortable</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-12">
                                            <img src="assets/images/check.png" alt="check">
                                            <span>Degenerative disorders, such as MS or ALS</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-12">
                                            <img src="assets/images/check.png" alt="check">
                                            <span>Take Care of Medication Reminders</span>
                                        </li>
                                    </ul>

                                    <div class="about-btn d-flex flex-wrap align-items-center">
                                        <a href="services.html" class="default-btn">
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Our Services</span>
                                                <img src="assets/images/right-white.svg" alt="right-white">
                                            </div>
                                        </a>
                                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#78101d140817141c1d0a17381f15191114561b1715" class="d-flex align-items-center mail-us text-decoration-none">
                                            <div class="flex-shrink-0">
                                                <i class="ti ti-mail-opened"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="d-block">Mail Us</span>
                                                <span class="mail"><span class="__cf_email__" data-cfemail="f29a979e829d9e9697809db2959f939b9edc919d9f">[email&#160;protected]</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="team-member text-center">
                                        <div class="d-flex align-items-center justify-content-center gap-30 mw-230">
                                            <h2 class="mb-0"><span class="counter">40</span>+</h2>
                                            <span class="text-start">Expert Team Member</span>
                                        </div>
                                        <img src="assets/images/about2.jpg" alt="about">
                                    </div>
                                </div>
                            </div>
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
                                    <h3>Our Mission</h3>
                                </div>
                            </div>
                            <p>Our mission is to create a meaningful impact by bridging the gap between clinical requirements and daily life. We are dedicated to providing a seamless care experience that empowers individuals with disabilities to live with dignity, ensuring they have the expert coordination and navigation needed to thrive in the home they love.</p>
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
                            <p>Our vision is to be a leading force for positive change in the disability and independent living sector. We strive to redefine support by putting choice and control back into the hands of the individual, fostering a future where every person has the autonomy to manage their care journey on their own terms.</p>
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
                                    <h3>Our Success</h3>
                                </div>
                            </div>
                            <p>Our success is defined by the positive outcomes and enhanced quality of life achieved by our community. We measure our impact through the independence of our clients, the transparency of our partnerships, and our ability to help individuals maximize their support hours and wellbeing through expert care navigation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End How We Work Area -->

        <!-- Start Why Choose Us Area -->
        <div class="why-choose-us-area ptb-120">
            <div class="container mw-1685">
                <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                    <div class="col-lg-4">
                        <span class="top-title">WHY CHOOSE US</span>
                    </div>
                    <div class="col-lg-8">
                        <h2 class="main-title ms-auto mw-975">Welcome to Senior Care our goal is to make your life <span class="word-mark">better</span></h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4" data-cues="slideInUp" data-duration="900">
                        <div class="why-choose-us-img">
                            <img src="assets/images/why-choose-us-img.jpg" class="ukiyo" alt="why-choose-us-img">
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="why-choose-us-content" data-cues="slideInUp" data-duration="900">
                            <p class="dec">We are dedicated to providing a safe comfortable and compassionate environment where seniors can their golden years with dignity and peace of mind our experienced caregivers</p>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="why-choose-us-single-item">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <img src="assets/images/icon/why-choose1.png" alt="why-choose">
                                        </div>
                                        <h3>Free Medical CheckUp</h3>
                                        <p>With a team of trained and compassionate we focus on promoting independence comfort</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-us-single-item ms-md-auto left-border">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <img src="assets/images/icon/why-choose2.png" alt="why-choose">
                                        </div>
                                        <h3>Low-Cost Services</h3>
                                        <p>Our team of compassionate caregivers committed to delivering personalized care including</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center flex-wrap why-choose-us-btn">
                                <a href="contact-us.html" class="default-btn active">
                                    <div class="d-flex align-items-center gap-10">
                                        <span>Get in touch</span>
                                        <img src="assets/images/right.svg" alt="right">
                                    </div>
                                </a>
                                <div class="d-flex align-items-center text-decoration-none ratings">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="assets/images/icon/google.png" alt="google">
                                    </div>
                                    <div>
                                        <p class="mb-0">4.8/5.0</p>
                                        <span>Google Ratings</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->

      
        <!-- Start Team Area -->
        <div class="team-area pt-120">
            <div class="container mw-1685">
                <div class="mb-60 text-center" data-cues="slideInUp" data-duration="900">
                    <span class="top-title mb-3">MEDICAL SPECIALIST</span>
                    <h2 class="main-title mx-auto">Access to Industry Experts Dedicated to Your Wellbeing.</h2>
                </div>
                
                <div class="row g-4" data-cues="slideInUp" data-duration="900">
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="single-team.html" class="team-img">
                                <img src="assets/images/team1.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="single-team.html" class="text-decoration-none">
                                    <h3>Dianna Breslin</h3>
                                </a>
                                <span>Senior care physician</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="single-team.html" class="team-img">
                                <img src="assets/images/team2.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="single-team.html" class="text-decoration-none">
                                    <h3>Michele Brigham</h3>
                                </a>
                                <span>Clinical lead</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="single-team.html" class="team-img">
                                <img src="assets/images/team3.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="single-team.html" class="text-decoration-none">
                                    <h3>Patrick Herron</h3>
                                </a>
                                <span>Director of operations</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="single-team.html" class="team-img">
                                <img src="assets/images/team4.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="single-team.html" class="text-decoration-none">
                                    <h3>Michele Harmon</h3>
                                </a>
                                <span>Geriatrician</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->

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

@endsection