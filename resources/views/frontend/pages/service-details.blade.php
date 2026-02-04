@extends("frontend.layout.master")
@section("title", "Care Coordination Service")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg3.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Single Service</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Single Service
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Services Area -->
    <div class="services-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4">
                <div class="col-xl-4">
                    <div class="sidebar mw-442">
                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>Our services</h3>

                            <ul class="category-list p-0 m-0 list-unstyled">
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Transportation Assistance</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Rehabilitation Services</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Municipal health services</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Home Safety Assessments</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Personalized Care Plans</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("our-services")}}"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Palliative and hospice care</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>Working hours</h3>

                            <ul class="p-0 m-0 list-unstyled">
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Monday - Thursday:</span>
                                    <span>09:00am - 08:00pm</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Friday - Saturday:</span>
                                    <span>10:00am - 05:00pm</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span>Sunday:</span>
                                    <span>Closes</span>
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



                <div class="col-xl-8">
                    <div class="details-content">
                        <img id="serviceImage" src="assets/images/services-details-img.jpg" class="rounded-4"
                            alt="services-details" style="max-height:300px">

                        <h3 id="serviceTitle">Rehabilitation Services</h3>
                        <p id="serviceDescription">Our mission is to create meaningful impact by delivering innovative,
                            reliable, and sustainable
                            solutions that empower individuals communities we are committed to integrity, collaboration, and
                            excellence in everything we do, striving to foster growth, inspire progress</p>

                        <p id="serviceOverview">Old care is a heartfelt commitment to supporting and honoring our elderly
                            with the dignity and
                            compassion they deserve. It involves creating a safe, comfortable, and nurturing environment
                            where seniors feel valued, heard, and respected. Through personalized care, emotional support,
                            and meaningful interaction, we aim to enhance their quality of life and promote independence
                            while ensuring they are never alone</p>



                        <div class="accordion faq-wrapper style-two" id="acc-faq"></div>

                        <!-- FAQ TEMPLATE -->
                        <div class="accordion-item d-none" id="faq-template">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed faq-question" type="button"></button>
                            </h2>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body faq-answer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/care-coordination-service`)
                .then(res => {
                    if (!res.ok) throw new Error('API failed');
                    return res.json();
                })
                .then(data => {

                    console.log('API DATA', data);

                    const about = data.coordination_about;

                    const img = document.getElementById('serviceImage');
                    const titleEl = document.getElementById('serviceTitle');
                    const descEl = document.getElementById('serviceDescription');
                    const overviewEl = document.getElementById('serviceOverview');

                    if (about) {
                        if (img && about.image) img.src = about.image;
                        if (titleEl && about.title) titleEl.innerText = about.title;
                        if (descEl && about.description) descEl.innerText = about.description;
                        if (overviewEl && about.overview) overviewEl.innerText = about.overview;
                    }


                    const faqContainer = document.getElementById('acc-faq');
                    const faqTemplate = document.getElementById('faq-template');

                    faqContainer.innerHTML = ''; // clear old (if any)

                    if (Array.isArray(data.faqs) && data.faqs.length > 0) {

                        data.faqs.forEach((faq, index) => {

                            const clone = faqTemplate.cloneNode(true);
                            const collapseId = `faq-${index}`;

                            clone.classList.remove('d-none');
                            clone.removeAttribute('id');

                            const btn = clone.querySelector('.faq-question');
                            btn.innerHTML = faq.question;
                            btn.setAttribute('data-bs-toggle', 'collapse');
                            btn.setAttribute('data-bs-target', `#${collapseId}`);
                            btn.setAttribute('aria-expanded', index === 0 ? 'true' : 'false');

                            const collapse = clone.querySelector('.accordion-collapse');
                            collapse.id = collapseId;
                            collapse.setAttribute('data-bs-parent', '#acc-faq');

                            clone.querySelector('.faq-answer').innerHTML = faq.answer;

                            // Open first FAQ by default
                            if (index === 0) {
                                btn.classList.remove('collapsed');
                                collapse.classList.add('show');
                            }

                            faqContainer.appendChild(clone);
                        });

                    } else {
                        faqContainer.innerHTML = '<p>No FAQs available.</p>';
                    }

                })
                .catch(err => console.error('API ERROR:', err));
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