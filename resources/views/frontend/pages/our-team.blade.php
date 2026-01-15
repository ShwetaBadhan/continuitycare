@extends("frontend.layout.master")
@section("title", "Our Team")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg9.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Our Team</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Team
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Team Area -->
    <div class="team-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="trait-pills">
                    <span class="trait-pill">Human</span>
                    <span class="trait-pill">Bold</span>
                    <span class="trait-pill">Visionary</span>
                    <span class="trait-pill">Resolute</span>
                </div>
                <h2 class="main-titles text-center">Our Leadership</h2>
                <p class="text-center">
                    Continuity Care Leadership Team is a diverse group that includes healthcare industry
                    experts and practitioners, health and social care professionals who understand the complex human
                    services and its technological needs with modern cloud technologists, and entrepreneurial innovators who
                    have scaled market-leading organizations.
                </p>

                <ul class="nav custom-nav-tabs" id="leadershipTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="leaders-tab" data-bs-toggle="tab" data-bs-target="#leaders"
                            type="button">
                            Our Leaders
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="board-tab" data-bs-toggle="tab" data-bs-target="#board" type="button">
                            Executive Board
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button">
                            Leadership Team
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff" type="button">
                            Staff
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="leadershipTabContent">

                    <!-- Our Leaders Tab -->
                    <div class="tab-pane fade show active" id="leaders" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team1.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Dianna Breslin</h3>
                                        <span>Senior care physician</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team2.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Michele Brigham</h3>
                                        <span>Clinical lead</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team3.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Patrick Herron</h3>
                                        <span>Director of operations</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team1.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Dianna Breslin</h3>
                                        <span>Senior care physician</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Executive Board Tab -->
                    <div class="tab-pane fade" id="board" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team2.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Michele Brigham</h3>
                                        <span>Clinical lead</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team3.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Patrick Herron</h3>
                                        <span>Director of operations</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team4.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Michele Harmon</h3>
                                        <span>Geriatrician</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team5.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Christina Reyes</h3>
                                        <span>Executive Director</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Leadership Team Tab -->
                    <div class="tab-pane fade" id="team" role="tabpanel">
                        <div class="row g-4">
                           <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team5.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Christina Reyes</h3>
                                        <span>Executive Director</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Staff Tab -->
                    <div class="tab-pane fade" id="staff" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-xl-3 col-sm-6">
                                <div class="team-single-item">
                                    <a href="javascript:void(0)" class="team-img">
                                        <img src="assets/images/team5.jpg" alt="team">
                                    </a>
                                    <div class="team-content">
                                        <h3>Christina Reyes</h3>
                                        <span>Executive Director</span>
                                        <ul class="p-0 mb-0 list-unstyled d-flex">
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-facebook-filled"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->
@endsection
