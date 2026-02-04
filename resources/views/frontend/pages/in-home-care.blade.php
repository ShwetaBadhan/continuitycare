@extends("frontend.layout.master")
@section("title", "In Home Care Services | Continuity Care")
@section("content")

    <!-- Hero Section -->
    <section class="home-care-section padding-section">
        <div class="container position-relative">
            <h1 class="text-white">In-Home Supports</h1>
            <p class="text-white">At Continuity Care, we support Queenslanders to live safely and confidently at home.</p>
            <p class="px-4 text-white">Our in-home support is designed to uphold your rights, protect your dignity, and
                improve your quality of life—not just complete a checklist of tasks.</p>
            <div class="tagline">
                <i class="bi bi-shield-check me-2"></i>
                For NDIS, My Aged Care & Privately Funded Post-Acute Care
            </div>
        </div>
    </section>

    <!-- Who We Support -->
    <section class="padding-section">
        <div class="container">
            <h2 class="main-titles text-center" id="who-support-sub-title">Who We Support in Queensland</h2>
            <p class="text-center mb-5 fs-5" id="who-support-main-title">We provide in-home support across Queensland for:
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="support-card">
                        <img id="who-support-card-img-1"
                            src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&h=400&fit=crop"
                            alt="NDIS Participants" class="support-card-img">
                        <div class="support-card-body">
                            <div class="support-card-icon">
                                <i class="bi bi-heart-pulse"></i>

                            </div>
                            <h4 id="who-support-card-title-1">NDIS Participants</h4>
                            <p id="who-support-card-desc-1" class="mb-0">Comprehensive support for daily living, personal
                                care, and skill development
                                tailored to your NDIS plan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-card">
                        <img id="who-support-card-img-2"
                            src="https://images.unsplash.com/photo-1581579438747-1dc8d17bbce4?w=600&h=400&fit=crop"
                            alt="My Aged Care" class="support-card-img">
                        <div class="support-card-body">
                            <div class="support-card-icon">
                                <i class="bi bi-heart-pulse"></i>

                            </div>
                            <h4 id="who-support-card-title-2">My Aged Care Clients</h4>
                            <p id="who-support-card-desc-2" class="mb-0">Home support programs designed to help older
                                Queenslanders maintain independence
                                and quality of life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-card">
                        <img id="who-support-card-img-3"
                            src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=400&fit=crop"
                            alt="Post-Acute Care" class="support-card-img">
                        <div class="support-card-body">
                            <div class="support-card-icon">
                                <i class="bi bi-heart-pulse"></i>


                            </div>
                            <h4 id="who-support-card-title-3">Post-Acute Care Clients</h4>
                            <p id="who-support-card-desc-3" class="mb-0">Short-term intensive support for those returning
                                home after hospital, surgery,
                                or a health event.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-banner mt-5 text-center">

                <p class="mb-0 fs-5">Whether you live in <strong>metropolitan, regional or rural Queensland</strong>, our
                    focus is the same: your <strong>rights, dignity and quality of life</strong> at home.</p>
            </div>
        </div>
    </section>

    <!-- What is In-Home Support -->
    <section class="padding-section bg-light">
        <div class="container">
            <h2 class="main-titles text-center" id="home-about-title">What is In-Home Support?</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img id="home-about-image"
                        src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?w=800&h=600&fit=crop"
                        alt="In-Home Support" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <p id="home-about-description">No description found</p>
                    {{-- <p class="fs-5 mb-4">In-home support helps you manage day-to-day activities and stay
                        <strong>independent, safe and connected</strong> in your own home.
                    </p>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h5 class="text-primary mb-3 fw-bold">No matter how you're funded, we:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <strong>Uphold your rights</strong> to choice, control and informed decision-making
                                </li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <strong>Respect your dignity</strong> in every interaction and task
                                </li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2 fs-5"></i>
                                    <strong>Focus on your quality of life</strong>, not just your diagnosis or limitations
                                </li>
                            </ul>
                            <p class="mt-3 mb-0">Support can be <strong>short-term, medium-term or ongoing</strong>, and is
                                always shaped around your goals and preferences.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="padding-section">
        <div class="container">
            <h2 class="main-titles text-center mb-5">Our Comprehensive Services</h2>

            <div class="row g-4 mb-4" id="services-container">

                <!-- TEMPLATE (hidden) -->
                <div class="col-lg-4 d-none" id="service-template">
                    <div class="service-card">
                        <div class="service-card-body">
                            <h3 class="service-title"></h3>
                            <p class="service-subtitle"></p>

                            <div class="key-focus p-3 mt-3">
                                <h5>Key Focus:</h5>
                                <ul class="service-points"></ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FALLBACK STATIC CARDS (keep your existing ones here) -->
                <!-- Your current 6 cards stay untouched -->

            </div>
        </div>
    </section>


    <!-- The Continuity Care Difference -->
    <section class="padding-section">
        <div class="container-fluid">
            <div class="difference-section p-5">
                <h2 class="text-white mb-4 text-center" id="differences-main-title">The Continuity Care Difference in
                    Queensland</h2>
                <p class="text-center fs-3 mb-5 fw-bold" id="differences-description">Rights. Quality of life. Dignity.
                    Coordination.</p>

                <p class="text-center mb-5 fs-5">What sets us apart is how we <strong>connect the pieces</strong> of your
                    support:</p>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="difference-card p-4">
                            <h4 class="text-white">
                                <i class="bi bi-clipboard-check-fill me-2"></i>
                                <span id="differences-card-title-1"> Care Coordination</span>
                            </h4>
                            <p id="differences-card-desc-1" class="mb-0">Aligning your services, schedule and providers for
                                seamless support.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="difference-card p-4">
                            <h4 class="text-white"><i class="bi bi-clipboard-check-fill me-2"></i>
                                <span id="differences-card-title-2"> Case Management</span>
                            </h4>
                            <p id="differences-card-desc-2" class="mb-0">Keeping an eye on risks, changes and progress
                                throughout your journey.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="difference-card p-4">
                            <h4 class="text-white">
                                <i class="bi bi-clipboard-check-fill me-2"></i>
                                <span id="differences-card-title-3"> Care Navigation</span>
                            </h4>
                            <p id="differences-card-desc-3" class="mb-0">Helping you and your family understand options and
                                next steps across NDIS.</p>
                        </div>
                    </div>
                </div>

                <p id="differences-sub-title" class="text-center mt-5 fs-5">We partner with <strong>trusted associate
                        providers</strong> (such as
                    clinicians and allied health) when needed, so your in-home support links smoothly with your broader
                    care.</p>
            </div>
        </div>
    </section>


    <!-- Our Commitment -->
    <section class="padding-section bg-light">
        <div class="container">
            <h2 class="main-titles text-center">Our Commitment to You</h2>

            <div class="row g-4" id="commitment-container">

                <!-- TEMPLATE (hidden) -->
                <div class="col-md-6 col-lg-4 d-none" id="commitment-template">
                    <div class="commitment-card p-4">
                        <span class="commitment-title"></span>
                        <p class="mb-0 commitment-desc"></p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Your rights first:</span>
                            <p class="mb-0">You are a rights-holder, not just a recipient of services.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Dignity always:</span>
                            <p class="mb-0">We protect your privacy, boundaries and identity in every visit.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Quality of life:</span>
                            <p class="mb-0">We focus on what gives your days meaning—family, culture, routine, community.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Quality and safeguarding:</span>
                            <p class="mb-0">We work within strong quality frameworks to keep you safe at home.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Consistency:</span>
                            <p class="mb-0">We aim for familiar faces and clear communication.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="commitment-card p-4">
                            <span class="commitment-title">Flexibility:</span>
                            <p class="mb-0">We adjust supports as your health, goals or funding change.</p>
                        </div>
                    </div>
                </div>
                <!-- Your current commitment cards remain unchanged -->

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="padding-section">
        <div class="container-fluid">
            <div class="cta-section p-5 text-center mt-0">
                <h2 class="mb-4 text-white">Ready to Organise In-Home Support in Queensland?</h2>
                <p class="text-white fs-5 mb-4">Whether you're an NDIS participant, an older person with My Aged Care
                    funding, or a post-acute client privately funding short-term help after hospital, Continuity Care can
                    work with you to design the right in-home support.</p>

                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <button class="btn btn-light-custom btn-lg"><span>Request a Call Back</span></button>
                    <button class="btn btn-outline-light-custom btn-lg">Talk to Our Queensland Team</button>
                    <button class="btn btn-outline-light-custom btn-lg">Book a Free In-Home Support Chat</button>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>

        document.addEventListener('DOMContentLoaded', () => {
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/home-service`)
                .then(res => res.json())
                .then(data => {

                    console.log('API DATA ', data);


                    const who_support = data.who_support;
                    if (who_support) {
                        document.getElementById('who-support-sub-title').textContent = who_support.sub_title ?? '';
                        document.getElementById('who-support-main-title').textContent = who_support.main_title ?? '';


                        who_support.cards?.forEach((card, index) => {
                            const i = index + 1;

                            document.getElementById(`who-support-card-title-${i}`).textContent = card.title ?? '';
                            document.getElementById(`who-support-card-desc-${i}`).textContent = card.description ?? '';

                            const img = document.getElementById(`who-support-card-img-${i}`);
                            if (img && card.image) img.src = card.image;
                        });
                    }


                    const home_about = data.home_about;
                    if (home_about) {
                        document.getElementById('home-about-title').textContent = home_about.main_title ?? '';
                        document.getElementById('home-about-description').textContent = home_about.description_1 ?? '';

                        const img = document.getElementById('home-about-image');
                        if (img && home_about.image) img.src = home_about.image;
                    }




                    const home_services = data.home_services;

                    const servicesContainer = document.getElementById('services-container');
                    const serviceTemplate = document.getElementById('service-template');

                    if (
                        Array.isArray(home_services) &&
                        home_services.length > 0 &&
                        servicesContainer &&
                        serviceTemplate
                    ) {
                        // Remove fallback cards EXCEPT template
                        servicesContainer
                            .querySelectorAll('.col-lg-4:not(#service-template)')
                            .forEach(el => el.remove());

                        home_services.forEach(service => {
                            const clone = serviceTemplate.cloneNode(true);

                            clone.classList.remove('d-none');
                            clone.removeAttribute('id');

                            clone.querySelector('.service-title').textContent =
                                service.title ?? '';

                            clone.querySelector('.service-subtitle').innerHTML =
                                service.description ?? '';

                            const pointsUl = clone.querySelector('.service-points');
                            pointsUl.innerHTML = '';

                            if (Array.isArray(service.points) && service.points.length) {
                                service.points.forEach(point => {
                                    pointsUl.innerHTML += `<li>${point}</li>`;
                                });
                            }

                            servicesContainer.appendChild(clone);
                        });
                    }



                    const differences = data.differences;
                    if (differences) {
                        document.getElementById('differences-sub-title').textContent = differences.sub_title ?? '';
                        document.getElementById('differences-main-title').textContent = differences.main_title ?? '';
                        document.getElementById('differences-description').textContent = differences.description ?? '';
                        const img = document.getElementById('differences-main-image');
                        if (img && differences.image) img.src = differences.image;

                        differences.cards?.forEach((card, index) => {
                            const i = index + 1;

                            document.getElementById(`differences-card-title-${i}`).textContent = card.title ?? '';
                            document.getElementById(`differences-card-desc-${i}`).textContent = card.description ?? '';

                        });
                    }
                    const HOME_COMMUNITY = data.home_community;

                    const commitmentContainer = document.getElementById('commitment-container');
                    const commitmentTemplate = document.getElementById('commitment-template');

                    if (
                        Array.isArray(HOME_COMMUNITY) &&
                        HOME_COMMUNITY.length > 0 &&
                        commitmentContainer &&
                        commitmentTemplate
                    ) {
                        // Remove fallback cards except template
                        commitmentContainer
                            .querySelectorAll('.col-md-6:not(#commitment-template)')
                            .forEach(el => el.remove());

                        HOME_COMMUNITY.forEach(item => {
                            const clone = commitmentTemplate.cloneNode(true);

                            clone.classList.remove('d-none');
                            clone.removeAttribute('id');

                            clone.querySelector('.commitment-title').textContent =
                                item.title ?? '';

                            clone.querySelector('.commitment-desc').innerHTML =
                                item.description ?? '';

                            commitmentContainer.appendChild(clone);
                        });
                    }


                })
                .catch(err => console.error('API ERROR ', err));

        });



    </script>
@endpush