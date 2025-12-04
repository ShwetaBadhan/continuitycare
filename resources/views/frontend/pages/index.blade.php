@extends("frontend.layout.master")
@section("title", "Welcome to Continuity Care")
@section("content")

    <!-- Start Banner Area -->
    <div class="banner-area bg-img" style="background-image: url('{{ asset('assets/images/banner-bg.png') }}');">
        <div class="container mw-1685">
            <div class="row align-items-end">
                <div class="col-xl-6">
                    <div class="banner-content" data-group="images" data-cues="slideInUp" data-duration="900">
                        <span class="top-title">WELCOME TO OLDERO</span>
                        <h1>We Provide Quality Home Care For <span class="word-mark">Your</span> Loved Ones</h1>
                        <p>Elderly Home and Senior Care services provide a safe, comfortable, and compassionate environment
                            for seniors who need assistance with daily living care</p>

                        <div class="d-flex align-items-center flex-wrap banner-btn">
                            <a href="" class="default-btn">
                                <div class="d-flex gap-10 align-content-center">
                                    <span>Get In Touch</span>
                                    <img src="assets/images/right-white.svg" alt="right-white">
                                </div>
                            </a>
                            <a href="tel:+1(444)5078494" class="d-flex align-items-center gap-20 call-us">
                                <i class="ti ti-phone-call"></i>
                                <div>
                                    <span class="d-block">Need Help</span>
                                    <span class="d-block number">+1 (444) 507 8494</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="banner-img" data-group="images" data-cues="slideInUp" data-duration="900">
                        <span class="border-text">senior care</span>
                        <img src="assets/images/banner-img.png" alt="banner-img">

                        <div class="trusted">
                            <div class="d-flex">
                                <img src="assets/images/user1.jpg" class="rounded-circle" alt="user">
                                <img src="assets/images/user2.jpg" class="rounded-circle" alt="user">
                                <img src="assets/images/user3.jpg" class="rounded-circle" alt="user">
                            </div>
                            <h4>300K+ People</h4>
                            <p>Individuals who have trusted Oldero services</p>
                        </div>

                        <div class="d-flex align-items-center info">
                            <div class="flex-shrink-0">
                                <img src="assets/images/banner-img2.jpg" alt="banner-img">
                            </div>
                            <div class="flex-grow-1">
                                <p>“We are committed to delivering high-quality services.”</p>
                                <span>Travis Morrison <span>- Founder</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Work Area -->
    <div class="work-area pt-120">
        <div class="container mw-1685">
            <div class="row gy-2" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">HOW WE WORK</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title mb-70 ms-auto mw-975">Delivering Holistic Senior Care That Honors Each
                        Individual's <span class="word-mark">Lifestyle</span></h2>
                    <div class=""></div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="work-content" data-cues="slideInUp" data-duration="900">
                        <h3>We believe in fostering an environment that promotes independence and respects</h3>

                        <div class="text-center">
                            <img src="assets/images/work.png" alt="work">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="work-content-wrap">
                        <div class="row g-0" data-cues="slideInUp" data-duration="900">
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img src="assets/images/icon/work1.png" alt="work">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>Home Care</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit">Our Home Care services are designed to bring comfort, support, and
                                        peace of mind right to your doorstep</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img src="assets/images/icon/work2.png" alt="work">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>Personalized Care</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit">We believe that every individual is unique care should be too our
                                        personalized care approach centered</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img src="assets/images/icon/work3.png" alt="work">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>Low-Cost Services</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit">Quality care shouldn’t come at a high cost; services are designed
                                        to provide reliable, compassionate</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img src="assets/images/icon/work4.png" alt="work">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>Medical Support</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit">Our Medical Support services are designed to ensure that you or
                                        your loved ones receive expert care</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Area -->
    <!-- Start Marquee Area -->
    <div class="marquee-wrapper monogram-wrap ptb-120">
        <div class="marquee speed-300">
            <span class="monogram">Flexible scheduling</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Health monitoring</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Comfort and familiarity</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Flexible scheduling</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Health monitoring</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Comfort and familiarity</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Flexible scheduling</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Health monitoring</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Comfort and familiarity</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Flexible scheduling</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Health monitoring</span>
            <span class="monogram">
                <img src="assets/images/star.png" alt="monogram">
            </span>
            <span class="monogram">Comfort and familiarity</span>
        </div>
    </div>
    <!-- End Marquee Area -->

    <!-- Start Services Area -->
    <div class="services-area bg-img ptb-120" style="background-image: url(assets/images/services-bg.png);">
        <div class="container mw-1685">
            <div class="row gy-2 mb-80" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">OUR SERVICES</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title mb-70 ms-auto mw-975">Dedicated To Quality Elderly Care With Compassion And <span
                            class="word-mark">Respect</span> Always</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-4" data-cues="slideInUp" data-duration="900">
                    <a href="{{ route("service-details") }}"
                        class="d-flex align-items-center services-single-item text-decoration-none">
                        <div class="flex-shrink-0">
                            <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                <img src="assets/images/icon/service1.png" alt="service">
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h3>Accommodation (SIL/SDA)</h3>
                        </div>
                    </a>
                    <a href="{{ route("service-details") }}"
                        class="d-flex align-items-center services-single-item text-decoration-none">
                        <div class="flex-shrink-0">
                            <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                <img src="assets/images/icon/service2.png" alt="service">
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h3>In Home Care (Attendance care/ HCP)</h3>
                        </div>
                    </a>
                    <a href="{{ route("service-details") }}"
                        class="d-flex align-items-center services-single-item text-decoration-none">
                        <div class="flex-shrink-0">
                            <div class="icon rounded-circle d-flex justify-content-center align-items-center">
                                <img src="assets/images/icon/service3.png" alt="service">
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h3>Support Coordination</h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-8">
                    <div class="row align-items-center align-items-xxl-center g-4" data-cues="slideInUp"
                        data-duration="900">
                        <div class="col-lg-7">
                            <div class="services-img h-100">
                                <img src="assets/images/service-img.jpg" class="h-100 ukiyo" alt="service-img">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="services-content">
                                <h3>Our personalized approach ensures that seniors receive the care</h3>
                                <p>These facilities are designed to support the social well-being of older adults through
                                    personalized care plans, professional medical support engaging</p>

                                <ul class="p-0 list-unstyled services-list">
                                    <li class="d-flex gap-12 align-items-center">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Nutritious meal planning</span>
                                    </li>
                                    <li class="d-flex gap-12 align-items-center">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Companionship and social activities</span>
                                    </li>
                                    <li class="d-flex gap-12 align-items-center">
                                        <img src="assets/images/check.png" alt="check">
                                        <span class="text-secondary">Transportation assistance</span>
                                    </li>
                                </ul>

                                <a href="{{route("our-services")}}" class="default-btn">
                                    <div class="d-flex align-items-center gap-10">
                                        <span>view all services</span>
                                        <img src="assets/images/right-white.svg" alt="right-white">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Fun Fact Area -->
    <div class="fun-fact-area ptb-120">
        <div class="container mw-1685">
            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-3 col-sm-6">
                    <div class="fun-fact-single-item d-flex justify-content-center align-items-center">
                        <div>
                            <img src="assets/images/icon/fun-fact1.png" alt="fun-fact">
                            <h2><span class="counter">24</span>/7</h2>
                            <p>Customer Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fun-fact-single-item d-flex justify-content-center align-items-center">
                        <div>
                            <img src="assets/images/icon/fun-fact2.png" alt="fun-fact">
                            <h2><span class="counter">30</span></h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fun-fact-single-item d-flex justify-content-center align-items-center">
                        <div>
                            <img src="assets/images/icon/fun-fact3.png" alt="fun-fact">
                            <h2><span class="counter">98</span>%</h2>
                            <p>Positive Review</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fun-fact-single-item d-flex justify-content-center align-items-center">
                        <div>
                            <img src="assets/images/icon/fun-fact4.png" alt="fun-fact">
                            <h2><span class="counter">15</span>k+</h2>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Area -->

    <!-- Start About Us Area -->
    <div class="about-us-area pb-120">
        <div class="container mw-1685">
            <div class="row gy-2" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">ABOUT OLDERO</span>
                </div>
                <div class="col-lg-8">
                    <div class="mb-60">
                        <h2 class="main-title ms-auto mw-975">Compassionate Home Care Services for Everyday <span
                                class="word-mark">Healthy</span> Living</h2>
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
                        <p>Elderly Home and Senior Care services are dedicated to providing a nurturing, secure, and
                            supportive environment for older adults who may require assistance with daily activities,
                            medical needs, or simply companionship</p>

                        <div class="row g-4 align-items-end">
                            <div class="col-lg-8">
                                <div class="d-sm-flex align-items-center maintaining">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <img src="assets/images/icon/about.png" alt="about">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3>Maintaining Independence</h3>
                                        <p>With trained caregivers, healthcare professionals, and a range of recreational
                                            programs, elderly homes aim</p>
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
                                    <a href="{{ route("about-us") }}" class="default-btn">
                                        <div class="d-flex align-items-center gap-10">
                                            <span>More About Us</span>
                                            <img src="assets/images/right-white.svg" alt="right-white">
                                        </div>
                                    </a>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#68000d041807040c0d1a07280f05090104460b0705"
                                        class="d-flex align-items-center mail-us text-decoration-none">
                                        <div class="flex-shrink-0">
                                            <i class="ti ti-mail-opened"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="d-block">Mail Us</span>
                                            <span class="mail"><span class="__cf_email__"
                                                    data-cfemail="8fe7eae3ffe0e3ebeafde0cfe8e2eee6e3a1ece0e2">[email&#160;protected]</span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team-member text-center">
                                    <div class="d-flex align-items-center justify-content-center gap-30 mw-230">
                                        <h2 class="mb-0"><span class="counter">40</span>+</h2>
                                        <span>expert team member</span>
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

    <!-- Start Oldero Information Area -->
    <div class="oldero-information-area bg-img ptb-100" style="background-image: url(assets/images/information-bg.jpg);">
        <div class="container mw-1685">
            <div class="row align-items-center g-4" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap align-items-center oldero-information-content">
                        <div class="flex-shrink-0">
                            <img src="assets/images/logo.png" alt="logo">
                        </div>
                        <div class="flex-grow-1">
                            <h3>Let Us Help You Care for Your Loved Ones!</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-wrap oldero-information-content justify-content-lg-end">
                        <a href="tel:+1(444)5078494" class="d-flex align-items-center text-decoration-none call">
                            <i class="ti ti-headphones"></i>
                            <span>+1 (444) 507 8494</span>
                        </a>
                        <a href="{{ route ("contact-us") }}" class="default-btn active">
                            <div class="d-flex align-items-center gap-10">
                                <span>Let’s get started</span>
                                <img src="assets/images/right.svg" alt="right">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Oldero Information Area -->

    <!-- Start Case Study Area -->
    <div class="case-study-area bg-img ptb-120" style="background-image: url(assets/images/case-study-bg.png);">
        <div class="container mw-1685">
            <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">CASE STUDY</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title ms-auto mw-975">Discover Why Families Trust Our Home Care <span
                            class="word-mark">Services</span></h2>
                </div>
            </div>
            <div data-cues="slideInUp" data-duration="900">
                <a href="javascript:void(0)"
                    class="case-study-single-item d-flex flex-wrap gap-20 justify-content-between align-items-center text-decoration-none">
                    <div class="d-sm-flex align-items-center gap-25">
                        <div class="flex-shrink-0 mb-2 mb-sm-0">
                            <span class="count">01</span>
                        </div>
                        <div class="flex-grow-1">
                            <h3>Empowering Lives Compassionate</h3>
                        </div>
                    </div>
                    <p>These homes are designed to promote independence, offering personalized care tailored to each
                        resident's needs. Trained staff are available around the clock to ensure health and emotional
                        support</p>
                    <div class="case-study-img">
                        <img src="assets/images/case-study1.jpg" class="img" alt="case-study">
                        <span class="read">
                            <img src="assets/images/right-white.svg" alt="right-white">
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)"
                    class="case-study-single-item d-flex flex-wrap gap-20 justify-content-between align-items-center text-decoration-none">
                    <div class="d-sm-flex align-items-center gap-25">
                        <div class="flex-shrink-0 mb-2 mb-sm-0">
                            <span class="count">02</span>
                        </div>
                        <div class="flex-grow-1">
                            <h3>Interactive Brain Games</h3>
                        </div>
                    </div>
                    <div class="case-study-img">
                        <img src="assets/images/case-study2.jpg" class="img" alt="case-study">
                        <span class="read">
                            <img src="assets/images/right-white.svg" alt="right-white">
                        </span>
                    </div>
                    <p>These homes are designed to promote independence, offering personalized care tailored to each
                        resident's needs. Trained staff are available around the clock to ensure health and emotional
                        support</p>
                </a>
                <a href="javascript:void(0)"
                    class="case-study-single-item d-flex flex-wrap gap-20 justify-content-between align-items-center text-decoration-none">
                    <div class="d-sm-flex align-items-center gap-25">
                        <div class="flex-shrink-0 mb-2 mb-sm-0">
                            <span class="count">03</span>
                        </div>
                        <div class="flex-grow-1">
                            <h3>Daily Nature Walks That Refresh</h3>
                        </div>
                    </div>
                    <p>Elderly Home and Senior Care services are designed to provide older adults with a safe, comfortable,
                        and supportive living environment where their individual needs are met with compassion and respect
                    </p>
                    <div class="case-study-img">
                        <img src="assets/images/case-study3.jpg" class="img" alt="case-study">
                        <span class="read">
                            <img src="assets/images/right-white.svg" alt="right-white">
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Case Study Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-120">
        <div class="container mw-1685">
            <div class="text-center" data-cues="slideInUp" data-duration="900">
                <span class="top-title mb-80">TRUSTED BY 100+ HEALTHCARE PARTNERS</span>
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

    <!-- Start Why Choose Us Area -->
    <div class="why-choose-us-area pb-120">
        <div class="container mw-1685">
            <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">WHY CHOOSE US</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title ms-auto mw-975">Welcome to Senior Care. Our goal is to make your life <span
                            class="word-mark">better</span></h2>
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
                        <p class="dec">We are dedicated to providing a safe, comfortable, and compassionate environment
                            where seniors can spend their golden years with dignity and peace of mind. our experienced
                            caregivers</p>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="why-choose-us-single-item">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="assets/images/icon/why-choose1.png" alt="why-choose">
                                    </div>
                                    <h3>Free Medical CheckUp</h3>
                                    <p>With a team of trained and compassionate people, we focus on promoting independence
                                        and comfort</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="why-choose-us-single-item ms-md-auto left-border">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="assets/images/icon/why-choose2.png" alt="why-choose">
                                    </div>
                                    <h3>Low-Cost Services</h3>
                                    <p>Our team of compassionate caregivers is committed to delivering personalized care,
                                        including</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-wrap why-choose-us-btn">
                            <a href="{{ route("contact-us") }}" class="default-btn active">
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

    <!-- Start Testimonial Area -->
    <div class="testimonial-area bg-img ptb-120" style="background-image: url(assets/images/testimonial-bg.png);">
        <div class="container mw-1685">
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="testimonial-content" data-cues="slideInUp" data-duration="900">
                        <span class="top-title mb-3">TESTIMONIAL</span>
                        <h2 class="main-title mb-3">What Our Customers Say About <span class="word-mark">Oldero</span></h2>

                        <p>Our Elderly Home & Senior Care facility is dedicated to providing safe, nurturing, and respectful
                            environments where seniors can have a high quality of life. We offer personalized care tailored
                            to the individual</p>

                        <a href="javascript:void(0)" class="default-btn mt-4 mt-xl-5">
                            <div class="d-flex align-items-center gap-10">
                                <span>View All Testimonials</span>
                                <img src="assets/images/right-white.svg" alt="right-white">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-item-wrap position-relative" data-cues="slideInUp" data-duration="900">
                        <div class="swiper testimonial-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-100">
                                    <div class="d-lg-flex align-items-center testimonial-single-item">
                                        <div class="flex-grow-1 mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center star-title">
                                                <div class="d-flex gap-6">
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                </div>
                                                <h3 class="mb-0">Caring is the essence of life</h3>
                                            </div>
                                            <p>"Moving my grandmother here was the best choice we could have made. The staff
                                                is kind and patient and goes the extra mile to make her feel at home, and
                                                truly thriving in such a caring environment, she could not be more
                                                thankful."</p>

                                            <div class="d-flex align-items-center info">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user4.jpg" class="rounded-circle" alt="user">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h4>Melinda Fallout</h4>
                                                    <span>Happy Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/testimonial1.jpg" alt="testimonial">
                                            <img src="assets/images/quote.png"
                                                class="rounded-0 position-absolute end-0 bottom-0 p-4" alt="quote">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide w-100">
                                    <div class="d-lg-flex align-items-center testimonial-single-item">
                                        <div class="flex-grow-1 mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center star-title">
                                                <div class="d-flex gap-6">
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                    <i class="ti ti-star-filled"></i>
                                                </div>
                                                <h3 class="mb-0">Best Services</h3>
                                            </div>
                                            <p>"Goes the extra mile. Moving my grandmother here was the best choice we could
                                                have made. The staff is kind and patient and goes the extra mile to make her
                                                feel at home, and truly thriving in such a caring environment, could not be
                                                more thankful Could not."</p>

                                            <div class="d-flex align-items-center info">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/user3.jpg" class="rounded-circle" alt="user">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h4>Alen Dew</h4>
                                                    <span>Happy Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 position-relative">
                                            <img src="assets/images/testimonial2.jpg" alt="testimonial">
                                            <img src="assets/images/quote.png"
                                                class="rounded-0 position-absolute end-0 bottom-0 p-4" alt="quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-pagination">
                            <div class="swiper-pagination-testimonial justify-content-center d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->

    <!-- Start Blog Area -->
    <div class="blog-area ptb-120">
        <div class="container mw-1685">
            <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">LATEST NEWS</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title ms-auto mw-975">Check Out Everything Interesting And Useful From The Latest <span
                            class="word-mark">News</span></h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-cues="slideInUp" data-duration="900">
                    <a href="{{ route("blog-details") }}" class="blog-single-item text-decoration-none">
                        <img src="assets/images/blog1.jpg" alt="blog">

                        <div class="blog-content">
                            <div class="d-flex info">
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-calendar-week text-primary"></i>
                                    <span class="fs-15">Aug 24, 2025</span>
                                </div>
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-message text-primary"></i>
                                    <span class="fs-15">03 Comment</span>
                                </div>
                            </div>

                            <h3>Choosing the Right Elderly Home: What Families Should Know</h3>
                            <p>We believe in nurturing a sense of community, encouraging independence, and ensuring that
                                they feel safe, valued, and truly at home in a welcoming environment where seniors</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6" data-cues="slideInUp" data-duration="900">
                    <a href="{{ route("blog-details") }}"
                        class="blog-single-item text-decoration-none d-sm-flex align-items-center border-bottom">
                        <div class="flex-shrink-0 mb-3 mb-sm-0">
                            <img src="assets/images/blog2.jpg" alt="blog">
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex info">
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-calendar-week text-primary"></i>
                                    <span class="fs-15">Aug 25, 2025</span>
                                </div>
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-message text-primary"></i>
                                    <span class="fs-15">No Comment</span>
                                </div>
                            </div>

                            <h3>Understanding Different Levels of Senior Care: Assisted Living</h3>
                        </div>
                    </a>
                    <a href="{{ route("blog-details") }}"
                        class="blog-single-item text-decoration-none d-sm-flex align-items-center border-bottom">
                        <div class="flex-shrink-0 mb-3 mb-sm-0">
                            <img src="assets/images/blog3.jpg" alt="blog">
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex info">
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-calendar-week text-primary"></i>
                                    <span class="fs-15">Aug 26, 2025</span>
                                </div>
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-message text-primary"></i>
                                    <span class="fs-15">01 Comment</span>
                                </div>
                            </div>

                            <h3>Top 5 Health Tips for Seniors Living in Care Homes</h3>
                        </div>
                    </a>
                    <a href="{{ route("blog-details") }}"
                        class="blog-single-item text-decoration-none d-sm-flex align-items-center border-bottom">
                        <div class="flex-shrink-0 mb-3 mb-sm-0">
                            <img src="assets/images/blog4.jpg" alt="blog">
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex info">
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-calendar-week text-primary"></i>
                                    <span class="fs-15">Aug 27, 2025</span>
                                </div>
                                <div class="d-flex align-items-center gap-10">
                                    <i class="ti ti-message text-primary"></i>
                                    <span class="fs-15">No Comment</span>
                                </div>
                            </div>

                            <h3>The Role of Family in Senior Care: Staying Connected</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start FAQ Area -->
    <div class="faq-area-four pb-120">
        <div class="container mw-1685">
            <div class="mb-70 mt-0 text-center" data-cues="slideInUp" data-duration="900">
                <span class="top-title mb-3">FREQUENTLY ASKED QUESTIONS</span>
                <h2 class="main-title mw-975 mx-auto">Help center Got a question? Get Your <span
                        class="word-mark">Answer</span></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="accordion faq-wrapper style-two" id="accordionExample" data-cues="slideInUp"
                        data-duration="900">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What services do you offer at your elderly home?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our goal is to create a safe comfortable and welcoming environment where seniors can
                                        enjoy their days with dignity purpose and a strong sense of experienced caregivers
                                        tailored support plans and engaging daily activities</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is medical care available on-site?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Building Permit: Required for new construction, additions, renovations, or major
                                        structural changes. Zoning Approval: Ensures your project complies with local
                                        land-use regulations (e.g., residential, commercial, industrial). Some projects
                                        require both.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I know if it’s the right time for senior care?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Registering to vote or updating your voter information is the official process that
                                        ensures you are eligible to participate in elections and that your personal details
                                        are accurate in the voter rolls. This process typically requires providing proof of
                                        identity, residency, and age. It can be done online, in person, or by mail,
                                        depending on your local election authority. Updating your information is important
                                        if you move, change your name, or need to modify party affiliation, as it ensures
                                        you receive the correct ballot and can vote without issues. Always verify your
                                        registration status after submission to confirm your eligibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                    Can residents personalize their rooms?
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Municipal and city government services are public services provided by local
                                        government authorities to meet the needs of residents and maintain community
                                        well-being. These services vary by city but generally include essential, regulatory,
                                        and recreational functions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion faq-wrapper style-two" id="accordionExample2" data-cues="slideInUp"
                        data-duration="900">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                                    What is the process for admission?
                                </button>
                            </h2>
                            <div id="collapseOne7" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>We repair a wide range of appliances including refrigerators washing machines dryers
                                        dishwashers ovens microwaves air conditioners and more. If you are unsure whether we
                                        service your specific appliance feel free to contact</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                                    How much does it cost to stay at your facility?
                                </button>
                            </h2>
                            <div id="collapseTwo8" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Building Permit: Required for new construction, additions, renovations, or major
                                        structural changes. Zoning Approval: Ensures your project complies with local
                                        land-use regulations (e.g., residential, commercial, industrial). Some projects
                                        require both.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
                                    Do you accommodate special diets?
                                </button>
                            </h2>
                            <div id="collapseThree9" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Registering to vote or updating your voter information is the official process that
                                        ensures you are eligible to participate in elections and that your personal details
                                        are accurate in the voter rolls. This process typically requires providing proof of
                                        identity, residency, and age. It can be done online, in person, or by mail,
                                        depending on your local election authority. Updating your information is important
                                        if you move, change your name, or need to modify party affiliation, as it ensures
                                        you receive the correct ballot and can vote without issues. Always verify your
                                        registration status after submission to confirm your eligibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree10" aria-expanded="false" aria-controls="collapseThree10">
                                    What types of activities are available for residents?
                                </button>
                            </h2>
                            <div id="collapseThree10" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Municipal and city government services are public services provided by local
                                        government authorities to meet the needs of residents and maintain community
                                        well-being. These services vary by city but generally include essential, regulatory,
                                        and recreational functions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree11" aria-expanded="false" aria-controls="collapseThree11">
                                    Are family members allowed to visit?
                                </button>
                            </h2>
                            <div id="collapseThree11" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Municipal and city government services are public services provided by local
                                        government authorities to meet the needs of residents and maintain community
                                        well-being. These services vary by city but generally include essential, regulatory,
                                        and recreational functions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->

    <!-- Start Contact Us Area -->
    <div class="contact-us-area bg-img ptb-120" style="background-image: url(assets/images/contact-us-bg.png);">
        <div class="container mw-1685">
            <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">CONTACT US</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title ms-auto mw-975">We Provide Quality Home Care & Private Nursing <span
                            class="word-mark">Service​</span></h2>
                </div>
            </div>

            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-8">
                    <div class="contact-us-form">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-lg-12">
                                <textarea rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="default-btn w-100">
                                    <span class="d-flex gap-10 align-items-center justify-content-center">
                                        <span>send message</span>
                                        <img src="assets/images/right-white.svg" alt="right-white">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us-img h-100">
                        <img src="assets/images/contact-us.jpg" class="h-100 object-fit-cover ukiyo" alt="contact-us">

                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-color">
                                <a href="https://youtu.be/78GehqOuq-A?si=WSjyu8eJ-TPiQ5QP" data-fslightbox="1"
                                    class="video-btn">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us Area -->
@endsection