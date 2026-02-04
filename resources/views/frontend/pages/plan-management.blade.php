@extends("frontend.layout.master")
@section("title", "Plan Management | Continuity Care")
@section("content")

    <!-- Hero Section -->
    <section class="home-care-section">
        <div class="container position-relative">
            <h1 class="text-white">NDIS Plan Management</h1>
            <p class="text-white">With the right Plan manager by your side, your NDIS Journey gets a whole lot easire. </p>
            <p class="px-4 text-white">At Continuity Care we seek to put you in control and give you the flexibility you
                need to get the most out of your plan. You make the decisions we’ll handle the rest.</p>
            <div class="tagline">
                <i class="bi bi-shield-check me-2"></i>
                We are accepting Plan management referrals nationwide
            </div>
        </div>
    </section>

    <!-- Start Work Area -->
    <div class="work-area padding-section">
        <div class="container">
            <div class="row gy-2" data-cues="slideInUp" data-duration="900">

                <div class="col-lg-12">
                    <h2 class="main-titles mb-5 ms-auto text-center" id="plan-management-main-title">Why Choose NDSP?
                    </h2>
                    <p class="mb-5 ms-auto text-center" id="plan-management-sub-title"> At NDSP, we're dedicated to
                        providing you with the tools and support
                        needed to effectively manage your services and budget. Enjoy the benefits of having a passionate
                        team of NDIS experts, prompt invoice processing, and extended support hours - all designed to
                        empower you to focus on what matters most - like reaching your goals.</p>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-lg-12">
                    <div class="work-content-wrap">
                        <div class="row g-0" data-cues="slideInUp" data-duration="900">
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img id="plan-management-card-img-1"
                                                    src="{{ asset('assets/images/icon/work1.png') }}" alt="work">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 id="plan-management-card-title-1">NDIS Experts</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit" id="plan-management-card-desc-1">Our team is ready to help you
                                        understand and make the most of your
                                        plan.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img id="plan-management-card-img-2"
                                                    src="{{ asset('assets/images/icon/work2.png') }}" alt="work">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 id="plan-management-card-title-2">Extended support for your needs:</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit" id="plan-management-card-desc-2">With long-term support and
                                        extended opening hours, our team is
                                        here for you when you need us.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img id="plan-management-card-img-3"
                                                    src="{{ asset('assets/images/icon/work3.png') }}" alt="work">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 id="plan-management-card-title-3">Innovative Nappa Portal:</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit" id="plan-management-card-desc-3">Gain real-time access to your
                                        budget with Nappa, our user-friendly
                                        online portal that simplifies the management of your NDIS plan.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work-single-item">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="flex-shrink-0">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <img id="plan-management-card-img-4"
                                                    src="{{ asset('assets/images/icon/work4.png') }}" alt="work">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h3 id="plan-management-card-title-4">Reliable and Prompt service:</h3>
                                        </div>
                                    </div>
                                    <p class="text_limit" id="plan-management-card-desc-4">We ensure that your invoices are
                                        processed quickly to maintain
                                        consistent service delivery from your providers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Area -->

    <!-- Start Services Area -->
    <div class="services-area section-care">
        <div class="container">

            <!-- Section Heading -->
            <div class="row gy-2" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-12 text-center">
                    <h2 class="main-titles mb-3">What is NDIS plan management?</h2>
                    <p class="mb-5">Some people think plan managers just pay invoices. Not us. We work to maximise the
                        benefits of your NDIS plan so you can live your best life.</p>
                </div>
            </div>

            <!-- Services -->
            <div class="row g-4" id="plan-about-wrapper">
                <!-- plan_about cards will be injected here -->
            </div>

        </div>
    </div>
    <!-- End Services Area -->
    <div class="services-area padding-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">

                    <h2 class="main-titles text-center">Continuity Connect for clinical nurses:</h2>
                    <h4 class="text-center">maintain optimal care, enable early intervention, minimise hospital
                        presentations</h4>
                    <div class="accordion faq-wrapper" id="accordionExample">


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/plan-management-service`)
                .then(res => {
                    if (!res.ok) throw new Error('API failed');
                    return res.json();
                })
                .then(data => {

                    console.log('COMMUNITY API DATA', data);
                    // benefit section
                    const plan_benefit = data.plan_benefit;
                    if (plan_benefit) {
                        document.getElementById('plan-management-sub-title').textContent = plan_benefit.sub_title ?? '';
                        document.getElementById('plan-management-main-title').textContent = plan_benefit.main_title ?? '';


                        plan_benefit.cards?.forEach((card, index) => {
                            const i = index + 1;

                            document.getElementById(`plan-management-card-title-${i}`).textContent = card.title ?? '';
                            document.getElementById(`plan-management-card-desc-${i}`).textContent = card.description ?? '';

                            const img = document.getElementById(`plan-management-card-img-${i}`);
                            if (img && card.image) img.src = card.image;
                        });
                    }

                    // plan_about services
                    const planAboutWrapper = document.getElementById('plan-about-wrapper');

                    if (planAboutWrapper) {
                        planAboutWrapper.innerHTML = '';

                        if (Array.isArray(data.plan_about) && data.plan_about.length) {
                            data.plan_about.forEach(item => {
                                planAboutWrapper.insertAdjacentHTML('beforeend', `
                        <div class="col-xl-4">
                            <div class="services-single-item style-two border d-block text-decoration-none">
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="${item.image ?? ''}" alt="${item.title}" class="rounded">
                                    </div>
                                    <h3 class="mb-0">${item.title ?? ''}</h3>
                                </div>
                                <div class="service-desc">
                                    ${item.description ?? ''}
                                </div>
                            </div>
                        </div>
                    `);
                            });
                        }
                    }

                    // faqs
                    const faqWrapper = document.getElementById('accordionExample');

                    if (faqWrapper) {
                        faqWrapper.innerHTML = '';

                        if (Array.isArray(data.faqs) && data.faqs.length) {
                            data.faqs.forEach((faq, index) => {
                                const id = `faq-${index}`;

                                faqWrapper.insertAdjacentHTML('beforeend', `
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header">
                                                    <button class="accordion-button ${index ? 'collapsed' : ''}"
                                                      type="button"
                                                      data-bs-toggle="collapse"
                                                      data-bs-target="#${id}">
                                                      ${faq.question}
                                                    </button>
                                                  </h2>
                                                  <div id="${id}"
                                                    class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                      ${faq.answer}
                                                    </div>
                                                  </div>
                                                </div>
                                              `);
                            });
                        }
                    }

                })
                .catch(err => console.error('COMMUNITY API ERROR:', err));
        });
    </script>
@endpush