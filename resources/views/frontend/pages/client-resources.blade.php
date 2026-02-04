@extends("frontend.layout.master")
@section("title", "Client Resources")
@section("content")
    <!-- Start Facilities Area -->
    <div class="facilities-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                <h2 class="main-titles">Continuity Care Policies</h2>
                <p>Continuity Care is committed to protecting the privacy of an individual’s personal information. The
                    following sets out how we aim to protect the privacy of your personal information, your rights in
                    relation to your personal information managed by us, and the way we collect, use and disclose your
                    personal information. In handling your personal information, we will comply with the Privacy Act 1988
                    (Cth) (Privacy Act) and with the thirteen Australian Privacy Principles in the Privacy Act.</p>
                {{-- <div class="col-xl-4 col-md-6">
                    <div class="facilities-single-item">
                        <div class="d-flex align-items-center justify-content-between mb-35 gap-10">
                            <div class="icon">
                                <img src="assets/images/icon/facilitie1.png" alt="facilities">
                            </div>
                            <span class="text-secondary">01</span>
                        </div>
                        <h3>Privacy Statement for Website</h3>
                        <p>Continuity Care is committed to protecting the privacy of an individual’s personal information.
                            The following sets out how we aim to protect the privacy of your personal information.</p>
                        <div class="d-flex justify-content-end align-items-center gap-2">
                            <p class="mb-0">For Easy Read</p>
                            <a href="">Click Here</a>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="facilities-single-item">
                        <div class="d-flex align-items-center justify-content-between mb-35 gap-10">
                            <div class="icon">
                                <img src="assets/images/icon/facilitie2.png" alt="facilities">
                            </div>
                            <span class="text-secondary">02</span>
                        </div>
                        <h3>Service Charter of Rights</h3>
                        <p>As an individual, you have many rights. Continuity Care will support and assist you in
                            identifying and exercising these rights to help you to achieve your goals. Continuity Care
                            adopts a policy of non-discrimination.</p>
                        <div class="d-flex justify-content-end align-items-center gap-2">
                            <p class="mb-0">For Easy Read</p>
                            <a href="">Click Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="facilities-single-item">
                        <div class="d-flex align-items-center justify-content-between mb-35 gap-10">
                            <div class="icon">
                                <img src="assets/images/icon/facilitie3.png" alt="facilities">
                            </div>
                            <span class="text-secondary">03</span>
                        </div>
                        <h3>Complaints and Feedback Policy and Procedure</h3>
                        <p>This policy is intended to ensure that complaints are handled fairly, efficiently and
                            effectively. The resolution of complaints will be consistent with a rights-based principle which
                            is also fundamental.</p>
                        <div class="d-flex justify-content-end align-items-center gap-2">
                            <p class="mb-0">For Easy Read</p>
                            <a href="">Click Here</a>
                        </div>
                    </div>
                </div> --}}
                <div id="policy-list"></div>

            </div>
        </div>
    </div>
    <!-- End Facilities Area -->

@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/client-resource`)
                .then(res => {
                    if (!res.ok) throw new Error('API response failed');
                    return res.json();
                })
                .then(data => {
                    console.log('API DATA:', data);

                    const CLIENT_RESOURCES = data.client_resources;
                    const policyContainer = document.getElementById("policy-list");

                    if (Array.isArray(CLIENT_RESOURCES) && CLIENT_RESOURCES.length > 0) {
                        policyContainer.innerHTML = "";

                        CLIENT_RESOURCES.forEach((item, index) => {

                            policyContainer.insertAdjacentHTML("beforeend", `
                            <div class="col-xl-4 col-md-6">
                                <div class="facilities-single-item">
                                    <div class="d-flex align-items-center justify-content-between mb-35 gap-10">
                                        <div class="icon">
                                            <img src="http://localhost:8080/storage/${item.image}" alt="${item.title}">
                                        </div>
                                        <span class="text-secondary">
                                            ${String(index + 1).padStart(2, '0')}
                                        </span>
                                    </div>

                                    <h3>${item.title}</h3>
                                    <p>${item.description}</p>

                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <p class="mb-0">For Easy Read</p>
                                        <a href="http://localhost:8080/storage/${item.pdf}" target="_blank">
                                            Click Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `);
                        });
                    }
                })
                .catch(err => console.error('API ERROR:', err));
        });
    </script>
@endpush