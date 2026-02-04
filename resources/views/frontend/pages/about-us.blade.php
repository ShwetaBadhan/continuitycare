@extends("frontend.layout.master")
@section("title", " About Us | Continuity Care")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg1.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">About Us</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
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
    {{-- <div class="about-us-area section-top">
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
                        <p>Continuity Care is a leading service provider in Australia. We open doors to living
                            independently, finding a great job, meeting great people and achieving life goals. The most
                            important thing we do is bring people together for life’s adventures. Everyone is welcome! With
                            us you will have opportunities and choice. You will belong and be a part of our community.</p>
                        <p>As a registered National Disability Insurance Scheme (NDIS) provider and My Aged Care, we are
                            committed to providing Quality in home and community care through our strong care coordination
                            model of care. </p>


                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Start About Us Area -->
    <div class="about-us-area padding-section">
        <div class="container mw-1685">
            <div class="row gy-2" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title" id="about_sub_title">ABOUT CONTINUITY CARE</span>
                </div>
                <div class="col-lg-8">
                    <div class="mb-60">
                        <h2 class="main-title ms-auto mw-975" id="about_title">Empowering Independence Through Compassionate
                            Care and
                            Seamless Navigation
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-4" data-cues="slideInUp" data-duration="900">
                    <div class="about-us-img">
                        <img id="about_main_image" src="{{ asset('assets/images/about.jpg') }}" class="ukiyo" alt="about">
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="about-content" data-cues="slideInUp" data-duration="900">
                        <p align="justify" id="about_description">Continuity Care is a dedicated provider of disability and
                            independent living
                            services, offering comprehensive care coordination and navigation. Everything we do is focused
                            on bridging the gap between clinical requirements and daily life, ensuring people with
                            disabilities can live with dignity and independence.</p>


                        <div class="row g-4 align-items-end">
                            <div class="col-lg-8">
                                <div class="d-sm-flex align-items-center maintaining">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <img id="about_icon" src="assets/images/icon/about.png" alt="about">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 id="about_side_title">Maintaining Independence</h3>
                                        <p id="about_overview">With trained caregivers, healthcare professionals, and a
                                            range of recreational
                                            programs, elderly homes aim</p>
                                    </div>
                                </div>

                                {{-- <ul class="p-0 list-unstyled about-list">
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
                                </ul> --}}

                                <div class="about-btn d-flex flex-wrap align-items-center">
                                    <a href="{{ route("about-us") }}" class="default-btn">
                                        <div class="d-flex align-items-center gap-10">
                                            <span>More About Us</span>
                                            <img src="assets/images/right-white.svg" alt="right-white">
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team-member text-center">
                                    <div class="d-flex align-items-center justify-content-center gap-30 mw-230">
                                        <h3 class="mb-0" id="about_side_title2">
                                            {{-- <span class="counter">40</span>+ --}}
                                        </h3>
                                        {{-- <span>expert team member</span> --}}
                                    </div>
                                    <img id="about_side_image" src="assets/images/about2.jpg" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us Area -->
    <!-- End About Us Area -->



    <!-- Start How We Work Area -->
    <div class="how-we-work-area-three padding-section bg-img"
        style="background-image: url(assets/images/testimonial-bg.png);">
        <div class="container mw-1685">
            <div class="row gy-2 mb-70" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-4">
                    <span class="top-title">VISION TO VICTORY</span>
                </div>
                <div class="col-lg-8">
                    <h2 class="main-title ms-auto mw-975" id="about-values-sub-title">Dedicated To Quality Elderly Care With
                        Compassion And <span class="word-mark">Respect</span> Always</h2>
                    <p id="about-values-main-title">Continuity Care is a not-for-profit organisation and a registered
                        charity with the <a
                            href="https://www.acnc.gov.au/charity/charities/2c2eac96-38af-e811-a963-000d3ad244fd/profile"
                            target="_blank">Australian Charities and Not-for-profit Commission</a>. Our client-centred
                        approach to service is at the core of everything we do.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                <div class="col-xl-4 col-md-6">
                    <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                        <img src="assets/images/work2.jpg" id="about-values-card-img-1" class="rounded-3 mb-4 mb-lg-5"
                            alt="work">

                        <div class="d-flex align-items-center mb-30 mt-0">
                            <div class="flex-shrink-0">
                                <div class="icon d-flex justify-content-center align-items-center border-primary">
                                    <img src="assets/images/icon/work4.png" alt="work">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 id="about-values-card-title-1">Our Purpose</h3>
                            </div>
                        </div>
                        <p id="about-values-card-desc-1">To create an inclusive world where human rights are realised. A
                            world where people of all
                            abilities come together to share in life’s adventure.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                        <img src="assets/images/work3.jpg" id="about-values-card-img-2" class="rounded-3 mb-4 mb-lg-5"
                            alt="work">

                        <div class="d-flex align-items-center mb-30 mt-0">
                            <div class="flex-shrink-0">
                                <div class="icon d-flex justify-content-center align-items-center border-primary">
                                    <img src="assets/images/icon/work7.png" alt="work">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 id="about-values-card-title-2">Our Vision</h3>
                            </div>
                        </div>
                        <p id="about-values-card-desc-2">To improve the lives of people with disability by prioritising
                            their choices, promoting their
                            rights and exploring possibilities together.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="work-single-item p-0 border-0 p-4 rounded-4 h-auto mw-100">
                        <img src="assets/images/work4.jpg" id="about-values-card-img-3" class="rounded-3 mb-4 mb-lg-5"
                            alt="work">

                        <div class="d-flex align-items-center mb-30 mt-0">
                            <div class="flex-shrink-0">
                                <div class="icon d-flex justify-content-center align-items-center border-primary">
                                    <img src="assets/images/icon/work6.png" alt="work">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h3 id="about-values-card-title-3">Our Values</h3>
                            </div>
                        </div>
                        {{-- <ul class="p-0 list-unstyled services-list">
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

                        </ul> --}}

                        <p id="about-values-card-desc-3">To improve the lives of people with disability by prioritising
                            their choices, promoting their
                            rights and exploring possibilities together.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How We Work Area -->

    <!-- Start Why Choose Us Area -->
    <section class="why-choose-section padding-section">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto text-center section-header">
                    <h2 class="main-title">Why choose Continuity Care?</h2>
                    <p>Enjoy more value, choice and freedom to live life on your terms. With some of the lowest fees in the
                        industry, more of your funding goes directly to the care and support you need. There are no hidden
                        costs and no surprises. You receive transparent pricing and personalised service tailored to you.
                    </p>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="row g-4 mt-5" id="feature-cards">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6 d-none" id="feature-template">
                    <div class="feature-card card-red">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                            </svg>
                        </div>
                        <h3 class="feature-title"></h3>
                        <p class="feature-desc"></p>
                    </div>
                </div>


                <!-- Feature 2 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-blue">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                            </svg>
                        </div>
                        <h3>Total choice</h3>
                        <p>Select the services and carers that work for you without being locked into restrictive
                            agreements.</p>
                    </div>
                </div> --}}

                <!-- Feature 3 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-purple">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </div>
                        <h3>No hidden costs</h3>
                        <p>Transparent pricing with no surprises. You'll always know exactly what you're paying for.</p>
                    </div>
                </div> --}}

                <!-- Feature 4 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-teal">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                            </svg>
                        </div>
                        <h3>Fast approvals</h3>
                        <p>Get started quickly with less hassle. Our streamlined process means you receive support when you
                            need it.</p>
                    </div>
                </div> --}}

                <!-- Feature 5 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-orange">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <h3>Personalised support</h3>
                        <p>Care that's tailored to your needs. We ensure a simple and stress-free experience at every step.
                        </p>
                    </div>
                </div> --}}

                <!-- Feature 6 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-card card-pink">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <h3>Your support, your way</h3>
                        <p>Choose support workers that match your needs. You remain in control of your care journey.</p>
                    </div>
                </div> --}}

                <!-- Feature 7 -->
                {{-- <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="feature-card card-dark">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                <line x1="9" y1="3" x2="9" y2="21" />
                            </svg>
                        </div>
                        <h3>Continuity Connect Portal</h3>
                        <p>Manage your care anytime, anywhere online. Dedicated support and easy access to everything you
                            need.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Area -->

    <!-- Start Marquee Area -->
    <div class="marquee-wrapper monogram-wrap padding-section">
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
    <div class="subscribe-area bg-primary padding-section bg-img"
        style="background-image: url(assets/images/subscribe-bg.png);">
        <div class="container">
            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-12">
                    <div class="subscribe-content">

                        <h2 class=" text-white">We're here to help!</h2>
                        <h4 class=" text-white">If you would like more information about our services get in touch with our
                            Support Center team.</h4>
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
    <div class="faq-area-four padding-section">
        <div class="container mw-1685">
            <div class="row g-4">
                <h2 class="main-titles">Principle Statements & Codes</h2>
                <div class="col-lg-12">
                    <div class="accordion faq-wrapper" id="accordionExample">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End FAQ Area -->

@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/about-us`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);
                    const WHY_CHOOSE = data.why_choose_us;
                    const featureContainer = document.getElementById('feature-cards');
                    const featureTemplate = document.getElementById('feature-template');

                    if (WHY_CHOOSE && featureContainer && featureTemplate) {
                        featureContainer
                            .querySelectorAll('.col-lg-4:not(#feature-template)')
                            .forEach(el => el.remove());

                        WHY_CHOOSE.forEach(item => {
                            const clone = featureTemplate.cloneNode(true);

                            clone.classList.remove('d-none');
                            clone.removeAttribute('id');

                            clone.querySelector('.feature-title').textContent = item.title ?? '';
                            clone.querySelector('.feature-desc').innerHTML = item.description ?? '';

                            featureContainer.appendChild(clone);
                        });
                    }


                    const ABOUT_US = data.about_us;
                    if (ABOUT_US) {
                        document.getElementById('about_sub_title').textContent = ABOUT_US.sub_title ?? '';
                        document.getElementById('about_title').textContent = ABOUT_US.main_title ?? '';
                        document.getElementById('about_description').textContent = ABOUT_US.description_1 ?? '';
                        document.getElementById('about_overview').textContent = ABOUT_US.description_2 ?? '';
                        document.getElementById('about_side_title').textContent = ABOUT_US.feature_1_title ?? '';
                        document.getElementById('about_side_title2').textContent = ABOUT_US.feature_1_title ?? '';

                        const mainImg = document.getElementById('about_main_image');
                        const iconImg = document.getElementById('about_icon');
                        const sideImg = document.getElementById('about_side_image');

                        if (mainImg && ABOUT_US.image) mainImg.src = ABOUT_US.image;
                        if (iconImg && ABOUT_US.icon_1) iconImg.src = ABOUT_US.icon_1;
                        if (sideImg && ABOUT_US.image_2) sideImg.src = ABOUT_US.image_2;

                        if (mainImg) mainImg.style.visibility = 'visible';
                    }

                    const Values = data.about_values;

                    if (Values) {
                        document.getElementById('about-values-sub-title').textContent =
                            Values.sub_title ?? '';

                        document.getElementById('about-values-main-title').textContent =
                            Values.main_title ?? '';

                        Values.cards?.forEach((card, index) => {
                            const i = index + 1;

                            document.getElementById(`about-values-card-title-${i}`).textContent =
                                card.title ?? '';

                            document.getElementById(`about-values-card-desc-${i}`).textContent =
                                card.description ?? '';

                            const img = document.getElementById(`about-values-card-img-${i}`);
                            if (img && card.image) img.src = card.image;
                        });
                    }

                    const FAQS = data.faqs;

                    if (Array.isArray(FAQS) && FAQS.length > 0) {
                        const accordion = document.getElementById("accordionExample");
                        accordion.innerHTML = "";

                        FAQS.forEach((item, index) => {
                            const collapseId = `faqCollapse${index}`;

                            accordion.insertAdjacentHTML("beforeend", `
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading${index}">
                                <button class="accordion-button ${index === 0 ? '' : 'collapsed'}"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#${collapseId}"
                                    aria-expanded="${index === 0 ? 'true' : 'false'}">
                                    ${item.question}
                                </button>
                            </h2>

                            <div id="${collapseId}" 
                                 class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ${item.answer}
                                </div>
                            </div>
                        </div>
                    `);
                        });
                    }


                })
                .catch(err => console.error('API ERROR ', err));

        });

    </script>

@endpush