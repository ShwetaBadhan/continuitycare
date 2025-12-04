<!-- Start Header Area -->
<div class="header-area bg-eef2da">
    <div class="container mw-1685">
        <div class="row align-items-center gy-2">
            <div class="col-lg-8 d-none d-sm-inline-block">
                <ul
                    class="d-flex flex-wrap justify-content-center justify-content-lg-start flex-md-nowrap align-items-center p-0 m-0 list-unstyled header-info">
                    <li class="d-flex align-items-center gap-10">
                        <i class="ti ti-map-pin"></i>
                        <span>Location: 1901 Thorndike Cir. Shiloh, Hawaii 81063</span>
                    </li>
                    <li class="d-flex align-items-center gap-10">
                        <i class="ti ti-clock-hour-4"></i>
                        <span>Working Hours: Mon - Fri: 09.00 am - 10.00 pm</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="d-flex link-social-wrap align-items-center justify-content-center justify-content-lg-end">
                    <div class="d-flex link">
                        <a href="javascript:void(0)">Testimonials</a>
                        <a href="{{ route("faqs") }}">FAQs</a>
                    </div>
                    <div class="social-link d-flex align-items-center">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="ti ti-brand-facebook"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank">
                            <i class="ti ti-brand-x"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="ti ti-brand-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->
<!-- Start Navbar Area -->
<nav class="navbar navbar-expand-lg position-sticky top-0" id="navbar">
    <div class="container mw-1685">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="{{ route("home") }}">
                <img src="assets/images/logo/hozlogo.webp" class="main-logo" alt="logo">
                <img src="assets/images/white-logo.svg" class="white-logo" alt="white-logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route (" home") }}" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Home
                    </a>


                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Who We Are
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route("about-us") }}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="">
                                Care Model
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                Accommodation (SIL/SDA)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                In Home Care (Attendance care/ HCP)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                Support Coordination
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                Care Coordination(Case Management)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                Plan Management
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-services") }}">
                                Social and Community Participation
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route("directory-listing")}}">
                        Directory Listing
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route("careers")}}">
                                Career
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)">
                                Referral
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("our-blogs") }}">
                                Blogs & News
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)">
                                Resource Center
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="faqs">
                                FAQs
                            </a>
                        </li>




                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route("contact-us")}}">
                        Contact us
                    </a>
                </li>
            </ul>
        </div>

        <div class="others-options d-flex align-items-center">
            <div class="gap-40 d-flex">
                <button class="bg-transparent border-0 p-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <img src="assets/images/icon-grid.svg" alt="icon-grid">
                </button>
                <button class="bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    {{-- <img src="assets/images/icon-search2.svg" alt="icon-search2"> --}}
                </button>
            </div>
            <a href="{{ route("book-appointment") }}" class="default-btn active">
                <div class="d-flex align-items-center gap-10">
                    <span class="d-none d-sm-inline-block">Book appointment</span>
                    <img src="assets/images/right.svg" alt="right-white">
                </div>
            </a>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <span class="burger-menu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </span>
            </a>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->

