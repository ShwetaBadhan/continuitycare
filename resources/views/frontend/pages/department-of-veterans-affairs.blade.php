@extends("frontend.layout.master")
@section("title", "Department of Veterans’ Affairs")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg6.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="main-title mx-auto text-white">NDIS Support Services for Independent Living</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
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
    <div class="case-study-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="details-content">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <img id="dva_section_image_1" src="assets/images/case-study9.jpg" class="rounded-4"
                                    alt="case-study">
                            </div>
                            <div class="col-sm-6">
                                <img id="dva_section_image_2" src="assets/images/case-study13.jpg" class="rounded-4"
                                    alt="case-study">
                            </div>
                        </div>

                        <h3>Honouring Your Service with Dedicated Care</h3>
                        <p id="dva_section_about_content">At Continuity Care, we are committed to supporting those who have
                            served our nation. We provide specialized in-home support for veterans and their families
                            through the DVA Community Nursing and Veterans’ Home Care (VHC) programs. Our mission is to
                            bridge the gap between your service-related health needs and your desire to remain independent
                            at home. </p>


                        <h3 id="dva_section_service_title">Our DVA Specialist Services:</h3>

                        <ul class="p-0 my-4 list-unstyled" id="dva_section_points">
                            {{-- <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Community Nursing:</strong>Expert clinical care delivered by Registered
                                    Nurses, including complex wound management, chronic disease support and medication
                                    administration.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Personal Care & Hygiene:</strong>Respectful assistance with daily tasks like
                                    bathing, dressing, and grooming to help you maintain your comfort and confidence at
                                    home.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Veterans’ Home Care (VHC):</strong>Practical, low-level support for everyday
                                    living, including domestic assistance (cleaning and laundry) and meal
                                    preparation.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Home & Garden Maintenance:</strong>Essential support to keep your living
                                    environment safe, such as minor home repairs, lawn mowing, and gutter cleaning to
                                    prevent falls and hazards.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Respite Care:</strong>Vital support for your family and carers, providing them
                                    with a necessary break while ensuring you continue to receive high-quality care in a
                                    familiar environment.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Coordinated Veterans’ Care (CVC):</strong>We work alongside your GP to provide
                                    proactive care coordination, helping to manage chronic conditions and prevent unplanned
                                    hospital visits.</span>
                            </li> --}}
                        </ul>


                        <div class="my-4 position-relative">

                            <div class="position-absolute top-50 start-50 translate-middle">

                            </div>
                        </div>

                        <p id="dva_section_service_about">Our outdoor spaces are designed to offer a peaceful, refreshing
                            environment where individuals can relax, connect with nature, and enjoy fresh air daily. Whether
                            it's a quiet garden, a shaded patio, or a walking path surrounded by greenery, these areas
                            provide a safe and accessible retreat that supports physical activity and emotional well-being
                        </p>
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

                            <form id="leadForm">
                                <div class="row g-4">
                                    <div class="col-12">

                                        <input type="text" name="fullname" class="form-control bg-white"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control bg-white" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" name="phone" class="form-control bg-white" placeholder="Phone"
                                            maxlength="10" pattern="[0-9]{10}" inputmode="numeric"
                                            placeholder="Enter 10-digit phone number" required
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="subject" class="form-control bg-white"
                                            placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea rows="5" name="message" class="form-control bg-white"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="default-btn">
                                            <span class="d-flex gap-10 align-items-center justify-content-center">
                                                <span>send message</span>
                                                <img src="assets/images/right-white.svg" alt="right-white">
                                            </span>
                                        </button>
                                    </div>
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
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/dva`)
                .then(res => {
                    if (!res.ok) throw new Error('API response failed');
                    return res.json();
                })
                .then(data => {
                    console.log('API DATA:', data);

                    const dva = data?.dva;
                    if (!dva) return;

                    // Titles & content
                    const serviceTitle = document.getElementById('dva_section_service_title');
                    if (serviceTitle) serviceTitle.textContent = dva.service_title ?? '';

                    const serviceAbout = document.getElementById('dva_section_service_about');
                    if (serviceAbout) serviceAbout.textContent = dva.service_about ?? '';

                    const aboutContent = document.getElementById('dva_section_about_content');
                    if (aboutContent) aboutContent.innerHTML = dva.about_content ?? '';

                    // Points list
                    const pointsContainer = document.getElementById('dva_section_points');
                    if (pointsContainer && Array.isArray(dva.points)) {
                        pointsContainer.innerHTML = dva.points.map(point => `
                                <li class="d-flex align-items-start gap-10">
                                    <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                    <span>${point}</span>
                                </li>
                            `).join('');
                    }

                    // Images
                    const img1 = document.getElementById('dva_section_image_1');
                    if (img1 && dva.image_1) img1.src = dva.image_1;

                    const img2 = document.getElementById('dva_section_image_2');
                    if (img2 && dva.image_2) img2.src = dva.image_2;

                })
                .catch(err => console.error('DVA API ERROR:', err));
        });
        // for form
        document.getElementById("leadForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const form = e.target;
            const submitBtn = form.querySelector("button[type='submit']");

            submitBtn.disabled = true;

            Swal.fire({
                title: 'Verifying...',
                text: 'Checking security',
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            grecaptcha.ready(function () {
                grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {
                    action: 'contact_form'
                }).then(async function (token) {

                    const payload = {
                        fullname: form.fullname.value.trim(),
                        email: form.email.value.trim(),
                        phone: form.phone.value.trim(),
                        subject: form.subject.value.trim(),
                        message: form.message.value.trim(),
                        recaptcha_token: token
                    };

                    try {
                        const response = await fetch("/api/leads", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                            },
                            body: JSON.stringify(payload),
                        });

                        const data = await response.json();
                        Swal.close();

                        if (response.ok) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Message Sent!',
                                text: data.message,
                                confirmButtonColor: '#0d6efd'
                            });
                            form.reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Failed',
                                text: data.message || 'Validation failed',
                                confirmButtonColor: '#dc3545'
                            });
                        }

                    } catch (error) {
                        Swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Server Error',
                            text: 'Please try again later'
                        });
                    } finally {
                        submitBtn.disabled = false;
                    }
                });
            });
        });
    </script>
@endpush