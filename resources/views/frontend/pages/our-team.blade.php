@extends("frontend.layout.master")
@section("title","Our Team")
@section("content")
<!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg9.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Our Team</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
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
        <div class="team-area ptb-120">
            <div class="container mw-1685">
                <div class="row g-4" data-cues="slideInUp" data-duration="900">
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="javascript:void(0)" class="team-img">
                                <img src="assets/images/team1.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Dianna Breslin</h3>
                                </a>
                                <span>Senior care physician</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
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
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Michele Brigham</h3>
                                </a>
                                <span>Clinical lead</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
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
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Patrick Herron</h3>
                                </a>
                                <span>Director of operations</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
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
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Michele Harmon</h3>
                                </a>
                                <span>Geriatrician</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
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
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Christina Reyes</h3>
                                </a>
                                <span>Executive Director</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="javascript:void(0)" class="team-img">
                                <img src="assets/images/team6.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Kenneth Morris</h3>
                                </a>
                                <span>Managing Editor</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="javascript:void(0)" class="team-img">
                                <img src="assets/images/team7.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Richard Honeycutt</h3>
                                </a>
                                <span>Marketing Coordinator</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-single-item">
                            <a href="javascript:void(0)" class="team-img">
                                <img src="assets/images/team8.jpg" alt="team">
                            </a>

                            <div class="team-content">
                                <a href="javascript:void(0)" class="text-decoration-none">
                                    <h3>Stuart Christian</h3>
                                </a>
                                <span>Board Member</span>

                                <ul class="p-0 mb-0 list-unstyled d-flex">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="text-decoration-none">
                                            <i class="ti ti-brand-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
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
            </div>
        </div>
        <!-- End Team Area -->
@endsection