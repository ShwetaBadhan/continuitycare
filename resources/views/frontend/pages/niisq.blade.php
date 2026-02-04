@extends("frontend.layout.master")
@section("title", "National Injury Insurance Scheme Queensland")
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
                        <div class="row g-4 ">
                            <div class="col-sm-6">
                                <img id="niisq_section_image_1" src="assets/images/case-study9.jpg" class="rounded-4 h-100"
                                    alt="case-study">
                            </div>
                            <div class="col-sm-6">
                                <img id="niisq_section_image_2" src="assets/images/case-study13.jpg" class="rounded-4 h-100"
                                    alt="case-study">
                            </div>
                        </div>


                        <p id="niisq_about_content" class="mt-20">The National Injury Insurance Scheme Queensland (NIISQ) is
                            a no-fault scheme designed to provide lifetime treatment, care, and support for individuals who
                            have sustained serious personal injuries in a motor vehicle accident. At Continuity Care, we
                            understand that a catastrophic injury changes everything—not just for the individual, but for
                            their entire family. We act as your expert partner to navigate this complex scheme, bridging the
                            gap between clinical rehabilitation and returning to a meaningful life. </p>


                        <h3 id="niisq_section_service_title">Our Specialist NIISQ Services</h3>

                        <ul class="p-0 my-4 list-unstyled" id="niisq_section_points">
                            {{-- <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Attendant Care & Daily Support:</strong>Respectful, consistent assistance with
                                    personal care, domestic tasks, and community access tailored to your specific injury and
                                    goals.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Rehabilitation Coordination:</strong>We work alongside your NIISQ Support
                                    Planner to connect you with expert Physiotherapy, Occupational Therapy, and Psychology
                                    services to aid your physical and emotional recovery.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Home & Vehicle Modifications:</strong>Guidance on accessing funding for
                                    essential changes to your living environment or transport to ensure you can move safely
                                    and independently.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Clinical Oversight:</strong>Professional management of complex health needs,
                                    including nursing care, medication, and specialized medical equipment or
                                    prostheses.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Community & Vocational Re-entry:</strong>Support to help you return to work,
                                    education, or social activities, ensuring your injury does not define your future
                                    potential.</span>
                            </li>
                            <li class="d-flex align-items-start gap-10">
                                <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                <span><strong>Expert Advocacy:</strong>We help you understand your rights within the scheme,
                                    ensuring all your "necessary and reasonable" needs are documented and met during your
                                    periodic reviews.</span>
                            </li> --}}
                        </ul>


                        <div class="my-4 position-relative">

                            <div class="position-absolute top-50 start-50 translate-middle">

                            </div>
                        </div>

                        <p id="niisq_section_service_about">Our outdoor spaces are designed to offer a peaceful, refreshing
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
                            <p id="niisq_section_eligibility"></p>

                            {{-- <ul class="p-0 m-0 list-unstyled">
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
                            </ul> --}}
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

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/niisq`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);


                    const niisq_section = data.niisq;

                    if (niisq_section) {
                        document.getElementById('niisq_section_service_title').textContent =
                            niisq_section.service_title ?? '';
                        document.getElementById('niisq_section_service_about').textContent =
                            niisq_section.service_about ?? '';
                        document.getElementById('niisq_section_eligibility').textContent =
                            niisq_section.eligibility ?? '';

                        document.getElementById('niisq_about_content').innerHTML =
                            niisq_section.about_content ?? '';

                        const pointsContainer = document.getElementById('niisq_section_points');
                        if (pointsContainer && Array.isArray(niisq_section.points)) {
                            pointsContainer.innerHTML = niisq_section.points
                                .map(point => `<li class='d-flex align-items-start gap-10'>  <i class="ti ti-circle-check-filled text-warning fs-20"></i> <strong>${point}</strong></li>`)
                                .join('');
                        }

                        const mainImg = document.getElementById('niisq_section_image_1');
                        if (mainImg && niisq_section.image_1) {
                            mainImg.src = niisq_section.image_1;
                        }
                        const mainImg2 = document.getElementById('niisq_section_image_2');
                        if (mainImg2 && niisq_section.image_2) {
                            mainImg2.src = niisq_section.image_2;
                        }
                    }






                })
                .catch(err => console.error('API ERROR ', err));
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