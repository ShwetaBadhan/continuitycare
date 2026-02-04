@extends("frontend.layout.master")
@section("title", "Career Details")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg14.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Single Career</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Single Career
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Single Career Area -->
    <div class="single-career-area ptb-120">
        <div class="container mw-1685">
            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="details-content">
                        <h3 id="job-title">Job Overview</h3>



                        <div class="pl-150">
                            <div id="job-description">
                                <!-- description from API -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar mw-442 ms-xl-auto">
                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>Case information</h3>

                            <ul class="p-0 m-0 list-unstyled">
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Location:</span>
                                    <span id="job-location">—</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Employment Type:</span>
                                    <span id="job-type">—</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Experience:</span>
                                    <span id="job-experience">—</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-3">
                                    <span>Salary:</span>
                                    <span id="job-salary">—</span>
                                </li>
                            </ul>

                        </div>
                        <form class="sidebar-widget bg-f2f3f5" method="POST" action="{{ route('apply.job') }}"
                            enctype="multipart/form-data">

                            @csrf
                            <h3 class="mb-2">Get Job for <span id="job-title-form"></span></h3>
                            <p>Upload your CV or resume file</p>

                            <div class="bg-f2f3f4 p-3 rounded-3">
                                <div class="input-group px-xl4 py-xl-3">
                                    <input type="file" name="resume" class="form-control border pt-3" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                            </div>
                            <span class="my-4 d-block">Accepted files: PDF, Doc, JPEG up to 100MB</span>

                            <h3>Information</h3>
                            <div class="d-flex justify-content-between gap-25 mb-4">
                                <input type="text" name="name" class="form-control w-100" placeholder="Name">
                                <input type="email" name="email" class="form-control w-100" placeholder="Email">
                            </div>
                            <div class="d-flex justify-content-between gap-25 mb-4">
                                <input type="text" name="job_title" id="job-title-input" class="form-control w-100"
                                    placeholder="Job Title" readonly>

                                <input type="number" name="phone" class="form-control w-100 mb-4" placeholder="Phone"
                                    maxlength="10" inputmode="numeric" pattern="[6-9][0-9]{9}">
                            </div>


                            <h3>Photo</h3>
                            <div class="bg-f2f3f4 p-3 rounded-3">
                                <div class="input-group px-xl4 py-xl-3">
                                    <input type="file" class="form-control border pt-3" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="photo">
                                </div>
                            </div>
                            <span class="my-4 d-block">Accepted files: PDF, Doc, JPEG up to 100MB</span>

                            <button class="default-btn w-100" type="submit" onclick="showLoading()">
                                <span class="d-flex align-items-center gap-10 justify-content-center">
                                    <span>Apply For This Job</span>
                                    <img src="{{ asset('assets/images/right-white.svg') }}" alt="right-white">
                                </span>
                            </button>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Career Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const slug = "{{ $slug }}";
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/jobs/${slug}`)
                .then(res => {
                    if (!res.ok) throw new Error('Job not found');
                    return res.json();
                })
                .then(data => {
                    const job = data.career_job;

                    // Title
                    document.getElementById('job-title').innerText = job.title;
                    document.getElementById('job-title-form').innerText = job.title;


                    // SET INPUT VALUE
                    document.getElementById('job-title-input').value = job.title;

                    // Description (HTML allowed)
                    document.getElementById('job-description').innerHTML = job.description;

                    // Sidebar info
                    document.getElementById('job-location').innerText = job.location;
                    document.getElementById('job-type').innerText = job.type;
                    document.getElementById('job-experience').innerText = job.experience + ' Years';
                    document.getElementById('job-salary').innerText = '₹' + job.salary_range;
                })
                .catch(err => {
                    console.error(err);
                    document.getElementById('job-title').innerText = 'Job not found';
                });

        });

    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Application Submitted',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Submission Failed',
                html: `
                                    <ul style="text-align:left;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                `,
                confirmButtonColor: '#d33'
            });
        </script>
    @endif
    <script>
        function showLoading() {
            Swal.fire({
                title: 'Submitting Application...',
                text: 'Please wait',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }
    </script>

@endpush