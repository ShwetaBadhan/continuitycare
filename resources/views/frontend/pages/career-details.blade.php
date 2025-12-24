@extends("frontend.layout.master")
@section("title","Career Details")
@section("content")
  <!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg14.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Single Career</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
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
                            <h3>Job Overview</h3>
                            <p>This profession requires patience, empathy, and strong communication skills, as it plays a vital role in improving the quality of life for older working in aged care allows me to make a positive difference every day and build genuine connections with those who need care</p>
                            <p>A career in old care is all about making a positive difference in the lives of elderly people. It involves providing personal support, helping with daily activities, and offering companionship to those who may need extra care and attention. This work requires kindness, patience, and understanding, as every person has unique needs and stories. I chose this career because I believe in treating older</p>

                            <div class="pl-150">
                                <h4>Responsibilities</h4>
                                <ul class="p-0 m-0 list-unstyled responsibilities">
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Aid seniors with tasks such as bathing, dressing, grooming, and toileting.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Provide assistance with mobility, transfers, and positioning to ensure safety and comfort.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Assist with medication management by reminding seniors to take prescribed medications at scheduled times.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Prepare nutritious meals, taking into consideration dietary restrictions and preferences.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Observe and report changes in the senior's health or behavior to the relevant healthcare professionals</span>
                                    </li>
                                </ul>

                                <h4>Qualifications</h4>
                                <ul class="p-0 m-0 list-unstyled">
                                    <li>1. High School Diploma or equivalent.</li>
                                    <li>2. Previous experience in caregiving or a related field is often preferred.</li>
                                    <li>3. Training in CPR and basic first aid may be required.</li>
                                    <li>4. Compassion, empathy, and patience are essential qualities.</li>
                                    <li>5. Good communication and interpersonal skills.</li>
                                </ul>

                                <h4>Working Conditions</h4>
                                <ul class="p-0 m-0 list-unstyled responsibilities">
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>Work may take place in the senior's home, assisted living facilities, or residential care settings.</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-15">
                                        <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                        <span>May involve flexible hours, including evenings and weekends.</span>
                                    </li>
                                </ul>

                                <h4>Career Advancement</h4>
                                <p>As an aged care professional, I provide essential support with daily living activities, personal care, emotional well-being, and companionship. This role requires strong interpersonal skills, patience, and a deep sense of empathy, as it involves working closely with individuals who may be facing physical, emotional, or cognitive challenges.</p>
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
                                        <span>456 Berry Street San Luis</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Department:</span>
                                        <span>Senior Care</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Employment Type:</span>
                                        <span>Part Time</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Experience:</span>
                                        <span>Entry Level</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Salary:</span>
                                        <span>$1500</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Published:</span>
                                        <span>01 February 2025</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Application Deadline:</span>
                                        <span>31 March, 2025</span>
                                    </li>
                                </ul>
                            </div>
                            <form class="sidebar-widget bg-f2f3f5">
                                <h3 class="mb-2">CV or resume</h3>
                                <p>Upload your CV or resume file</p>

                                <div class="bg-f2f3f4 p-3 rounded-3">
                                    <div class="input-group px-xl4 py-xl-3">
                                        <input type="file" class="form-control border pt-3" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                                <span class="my-4 d-block">Accepted files: PDF, Doc, JPEG up to 100MB</span>

                                <h3>Information</h3>
                                <div class="d-flex justify-content-between gap-25 mb-4">
                                    <input type="text" class="form-control w-100" placeholder="Name">
                                    <input type="email" class="form-control w-100" placeholder="Email">
                                </div>
                                <input type="number" class="form-control w-100 mb-4" placeholder="Phone">

                                <h3>Photo</h3>
                                <div class="bg-f2f3f4 p-3 rounded-3">
                                    <div class="input-group px-xl4 py-xl-3">
                                        <input type="file" class="form-control border pt-3" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                                <span class="my-4 d-block">Accepted files: PDF, Doc, JPEG up to 100MB</span>

                                <button class="default-btn w-100">
                                    <span class="d-flex align-items-center gap-10 justify-content-center">
                                        <span>Apply For This Job</span>
                                        <img src="assets/images/right-white.svg" alt="right-white">
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