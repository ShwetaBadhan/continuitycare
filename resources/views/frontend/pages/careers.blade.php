@extends("frontend.layout.master")
@section("title", "Career")
@section("content")


    <!-- Start Careers Area -->
    <div class="careers-area padding-section" id="job-container">
        <div class="container mw-1685">

            <!-- Dynamic jobs will come here -->
            <div id="job-list"></div>

            <!-- Pagination (static for now) -->
            <div class="pagination-area mt-md-3 mt-lg-4 pt-lg-3 d-flex align-items-center justify-content-center">
                <button class="next page-numbers border-0">
                    <i class="ti ti-chevron-left"></i>
                </button>

                <span class="page-numbers border-0 current" aria-current="page">1</span>
                <button class="page-numbers border-0">2</button>
                <button class="page-numbers border-0">3</button>

                <button class="next page-numbers border-0">
                    <i class="ti ti-chevron-right"></i>
                </button>
            </div>

        </div>

    </div>
    <!-- End Careers Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', initJobs);


        async function fetchJobs() {
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

           
            const response = await fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/jobs`);
            if (!response.ok) {
                throw new Error('Jobs API failed');
            }
            return response.json();
        }

        function renderJobs(jobs) {
            const container = document.getElementById('job-list');
            container.innerHTML = '';

            if (!Array.isArray(jobs) || jobs.length === 0) {
                container.innerHTML = '<p>No jobs available.</p>';
                return;
            }

            jobs.forEach((job, index) => {
                container.insertAdjacentHTML('beforeend', `
                <div class="d-flex flex-wrap careers-single-item position-relative z-1 mb-4">
                    <div class="flex-shrink-0">
                        <span class="job">Job ${String(index + 1).padStart(2, '0')}</span>
                    </div>

                    <div class="flex-grow-1">
                        <div class="d-flex flex-wrap flex-xl-nowrap justify-content-between gap-20">
                            <div class="careers-content">

                                <div class="d-flex flex-wrap gap-25">
                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-clock text-primary"></i>
                                        <span class="fs-15">${job.type}</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-10">
                                        <i class="ti ti-map-pin text-primary"></i>
                                        <span class="fs-15">${job.location}</span>
                                    </div>
                                </div>

                                <h3>${job.title}</h3>

                                <p>${job.description}</p>

                                <div class="read-more">
                                    <span>View Job</span>
                                    <img src="assets/images/right.svg" alt="right">
                                </div>
                            </div>

                            <div class="careers-img">
                                <img src="assets/images/career1.jpg" alt="career">
                            </div>
                        </div>
                    </div>

                    <a href="/career/${job.slug}"
                       class="link position-absolute top-0 end-0 start-0 bottom-0 z-1"></a>
                </div>
            `);
            });
        }

        async function initJobs() {
            try {
                const data = await fetchJobs();
                renderJobs(data.career_jobs);
            } catch (error) {
                console.error(error);
                document.getElementById('job-list').innerHTML =
                    '<p>Failed to load jobs.</p>';
            }
        }
    </script>
@endpush