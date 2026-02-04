@extends("frontend.layout.master")
@section("title", "Staff Resources")
@section("content")
    <!-- Start FAQ Area -->
    <div class="faq-area-four padding-section">
        <div class="container mw-1685">

            <div class="row g-4">
                <h2 class="main-titles">Continuity Care Policies</h2>
            </div>
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

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/staff-resource`)
                .then(res => {
                    if (!res.ok) throw new Error('API response failed');
                    return res.json();
                })
                .then(data => {
                    console.log('API DATA:', data);

                    const STAFF_RESOURCES = data.staff_resources;
                    const policyContainer = document.getElementById("accordionExample");

                    if (!Array.isArray(STAFF_RESOURCES) || STAFF_RESOURCES.length === 0) {
                        policyContainer.innerHTML = "<p>No policies available.</p>";
                        return;
                    }

                    policyContainer.innerHTML = "";

                    STAFF_RESOURCES.forEach((item, index) => {

                        const headingId = `heading-${index}`;
                        const collapseId = `collapse-${index}`;

                        policyContainer.insertAdjacentHTML("beforeend", `
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="${headingId}">
                                    <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" 
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#${collapseId}"
                                            aria-expanded="${index === 0}"
                                            aria-controls="${collapseId}">
                                        ${item.title}
                                    </button>
                                </h2>

                                <div id="${collapseId}" 
                                     class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        ${item.description}

                                        ${item.pdf ? `
                                            <p>
                                                <a href="http://localhost:8080/storage/${item.pdf}" 
                                                   target="_blank">
                                                    View PDF
                                                </a>
                                            </p>
                                        ` : ''}
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                })
                .catch(err => console.error('API ERROR:', err));
        });
    </script>

@endpush