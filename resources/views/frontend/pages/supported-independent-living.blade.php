@extends("frontend.layout.master")
@section("title", "Supported Independent Living")
@section("content")
    <div class="services-area padding-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="details-content">
                        <img id="independent-about-image" src="assets/images/services-details-img.jpg"
                            class="rounded-4 w-100" alt="services-details" style="max-height: 300px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <h3 id="independent-about-title">Independently living at your happiest.</h3>
                        <p id="independent-about-description" align="justify">Our mission is to create meaningful impact by
                            delivering
                            innovative, reliable, and sustainable
                            solutions that empower individuals communities we are committed to integrity, collaboration, and
                            excellence in everything we do, striving to foster growth, inspire progress</p>
                    </div>
                </div>
            </div>









            <!-- Start Case Study Area -->
            <div class="case-study-area padding-section">
                <div class="container mw-1685">

                    <div class="row g-4" id="support-services-container">
                        <div class="details-content">
                            <h3>Choose your preferred Supported Independent Living home</h3>
                        </div>
                        <!-- TEMPLATE -->
                        <div class="col-xl-4 col-md-4 d-none" id="support-service-template">
                            <a class="case-study-single-item-three d-block position-relative z-1">
                                <img class="service-image img" />
                                <div class="case-study-content">
                                    <span class="counseling service-title"></span>
                                    <h6 class="text-white service-overview"></h6>
                                </div>
                                <span class="read-btn">
                                    <img src="assets/images/right.svg">
                                </span>
                            </a>
                        </div>




                    </div>
                </div>
            </div>
            <!-- End Case Study Area -->


            <div class="row padding-section">

                <div class="col-md-6">
                    <div class="details-content">
                        <h3 id="support-apply-title">Applying for SIL funding</h3>
                        <p id="support-apply-description" align="justify">Our mission is to create meaningful impact by
                            delivering innovative, reliable, and sustainable
                            solutions that empower individuals communities we are committed to integrity, collaboration, and
                            excellence in everything we do, striving to foster growth, inspire progress</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <img id="support-apply-image" src="assets/images/services-details-img.jpg" class="rounded-4 w-100"
                            alt="services-details" style="max-height: 300px">
                    </div>
                </div>
            </div>
        </div>




    </div>

@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.case-left').forEach(item => {
                item.addEventListener('click', () => {
                    document.querySelectorAll('.case-item').forEach(i => i.classList.remove('active'));
                    item.parentElement.classList.add('active');
                });
            });
        });


        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/support-independent-service`)
                .then(res => res.json())
                .then(data => {

                    console.log('API DATA ', data);

                    const independentAbout = data.independent_about;

                    if (independentAbout) {
                        document.getElementById('independent-about-title').textContent =
                            independentAbout.title ?? '';

                        document.getElementById('independent-about-description').textContent =
                            independentAbout.description ?? '';

                        const img = document.getElementById('independent-about-image');
                        if (img && independentAbout.image) {
                            img.src = independentAbout.image;
                        }
                    }

                    const supportServices = data.support_services;
                    const serviceContainer = document.getElementById('support-services-container');
                    const serviceTemplate = document.getElementById('support-service-template');

                    if (
                        Array.isArray(supportServices) &&
                        supportServices.length &&
                        serviceContainer &&
                        serviceTemplate
                    ) {
                        serviceContainer.innerHTML = '';

                        supportServices.forEach(service => {
                            const clone = serviceTemplate.cloneNode(true);
                            clone.classList.remove('d-none');
                            clone.removeAttribute('id');

                            clone.querySelector('.service-title').textContent = service.title;
                            clone.querySelector('.service-overview').innerHTML = service.overview ?? '';

                            const img = clone.querySelector('.service-image');
                            img.src = service.image;
                            img.alt = service.title;

                            clone.querySelector('a').href =
                                `/accommodation-details/${service.slug}`;

                            serviceContainer.appendChild(clone);
                        });
                    }
                    const supportApply = data.support_apply;

                    if (supportApply) {
                        document.getElementById('support-apply-title').textContent =
                            supportApply.title ?? '';

                        document.getElementById('support-apply-description').textContent =
                            supportApply.description ?? '';

                        const img = document.getElementById('support-apply-image');
                        if (img && supportApply.image) {
                            img.src = supportApply.image;
                        }
                    }



                })
                .catch(err => console.error('API ERROR ', err));

        });



    </script>
@endpush