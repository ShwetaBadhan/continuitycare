@extends("frontend.layout.master")
@section("title", "FAQs")
@section("content")


    <!-- Start FAQ Area -->
    <div class="faq-area-four padding-section">
        <div class="container mw-1685">
            <div class="row d-flex ">
                <div class="accordion faq-wrapper d-flex flex-wrap " id="faqAccordion">
                    <!-- FAQs will be injected here -->
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- End FAQ Area -->
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const faqContainer = document.getElementById('faqAccordion');

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/faqs`)
                .then(res => {
                    if (!res.ok) throw new Error('API response failed');
                    return res.json();
                })
                .then(data => {

                    const faqs = data.faqs;

                    if (!Array.isArray(faqs) || faqs.length === 0) {
                        faqContainer.innerHTML = "<p>No FAQs available.</p>";
                        return;
                    }

                    faqContainer.innerHTML = "";

                    faqs.forEach((item, index) => {

                        const collapseId = `faq-collapse-${index}`;

                        faqContainer.insertAdjacentHTML('beforeend', `
                                    <div class=" col-6 p-2">
                                        <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#${collapseId}"
                                                aria-expanded="${index === 0}">
                                                ${item.question}
                                            </button>
                                        </h2>

                                        <div id="${collapseId}"
                                            class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                ${item.answer}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                `);
                    });
                })
                .catch(err => {
                    console.error('API ERROR:', err);
                    faqContainer.innerHTML = "<p>Failed to load FAQs.</p>";
                });
        });
    </script>
@endpush