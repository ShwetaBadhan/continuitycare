@extends("frontend.layout.master")
@section("title", "NDIS Support Services for Independent Living")
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
    <div class="case-study-area  padding-section">
        <div class="container mw-1685">
            <div class="row g-4">
                <div class="col-xl-12">
                    <div class="details-content">
                        <div class="row g-4 d-flex align-items-center">
                            <div class="col-sm-4">
                                <img id="ndis_about_image" src="assets/images/case-study9.jpg" class="rounded-4 w-100"
                                    alt="case-study">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="main-titles" id="ndis_about_main_title">Your Partner in NDIS Support and Care
                                </h3>
                                <p id="ndis_about_description" align="justify">Continuity Care is proud to empower the
                                    disability community to experience absolute
                                    freedom and flexibility. Our transformative NDIS services make life easier for our NDIS
                                    participants fostering choice and inclusion.</p>

                            </div>
                            <div class="row g-4 justify-content-center">
                                <div class="col-xl-12 text-center">
                                    <img src="assets/images/about/image.webp" class="img-fluid rounded-4" alt="case-study">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <h3 class="main-titles" id="ndis_service_sub_title">Our NDIS Disability Support Services
                                </h3>
                                <h3 id="ndis_service_main_title">Disability Support Services Provider In Brisbane</h3>
                                <p id="ndis_service_description">As an [NDIS disability service
                                    provider](https://kuremara.com.au/disability-support-services-provider-in-brisbane/), we
                                    provide a variety of NDIS support services that can be customised depending on your
                                    needs and requirements. Our team of talented and professionally driven experts offers
                                    the best-curtailed NDIS support services to meet your daily needs and provide support
                                    ranging from accommodation to plan management and assistance in personal activities.</p>

                            </div>
                            <div class="col-sm-4">
                                <img id="ndis_service_image" src="assets/images/case-study9.jpg" class="rounded-4 w-100"
                                    alt="case-study">
                            </div>

                            <div class="col-sm-4">
                                <img id="ndis_support_image" src="assets/images/about/png-1-1.webp" class="rounded-4 w-100"
                                    alt="case-study">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="main-titles" id="ndis_support_main_title">Who We Support</h3>
                                <p id="ndis_support_description">Disability support services in Brisbane is covered under
                                    the National Disability
                                    Insurance Scheme, a national plan aimed to support individuals with disabilities. NDIS
                                    offers financial support to disabled individuals with access to support and services,
                                    and gain new skills and independence in every aspect of their life.</p>

                                <ul class="p-0 my-4 list-unstyled" id="ndis_support_points"></ul>

                            </div>






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

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/ndis`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);



                    const NDIS_ABOUT = data.ndis_about;
                    if (NDIS_ABOUT) {
                        document.getElementById('ndis_about_main_title').textContent = NDIS_ABOUT.main_title ?? '';
                        document.getElementById('ndis_about_description').innerHTML = NDIS_ABOUT.description ?? '';
                        const mainImg = document.getElementById('ndis_about_image');
                        if (mainImg && NDIS_ABOUT.image) mainImg.src = NDIS_ABOUT.image;
                    }

                    const NDIS_SERVICE = data.ndis_service;
                    if (NDIS_SERVICE) {
                        document.getElementById('ndis_service_main_title').textContent = NDIS_SERVICE.main_title ?? '';
                        document.getElementById('ndis_service_main_title').textContent = NDIS_SERVICE.sub_title ?? '';
                        document.getElementById('ndis_service_description').innerHTML = NDIS_SERVICE.description ?? '';
                        const mainImg = document.getElementById('ndis_service_image');
                        if (mainImg && NDIS_SERVICE.image) mainImg.src = NDIS_SERVICE.image;
                    }
                    const NDIS_SUPPORT = data.ndis_support;
                    if (NDIS_SUPPORT) {
                        document.getElementById('ndis_support_main_title').textContent = NDIS_SUPPORT.main_title ?? '';
                        document.getElementById('ndis_support_description').innerHTML = NDIS_SUPPORT.description_1 ?? '';
                        const pointsContainer = document.getElementById('ndis_support_points');

                        if (pointsContainer && Array.isArray(NDIS_SUPPORT.points)) {
                            pointsContainer.innerHTML = NDIS_SUPPORT.points
                                .map(point => `
                    <li class="d-flex align-items-start gap-10">
                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                        <span>${point}</span>
                    </li>
                `)
                                .join('');
                        }

                        const mainImg = document.getElementById('ndis_support_image');
                        if (mainImg && NDIS_SUPPORT.image) mainImg.src = NDIS_SUPPORT.image;
                    }





                })
                .catch(err => console.error('API ERROR ', err));

        });

    </script>
@endpush