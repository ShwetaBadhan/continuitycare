<!-- Start Header Area -->
{{-- <div class="header-area bg-eef2da">
    <div class="container mw-1685">
        <div class="row align-items-center gy-2">
            <div class="col-lg-8 d-none d-sm-inline-block">
                <ul
                    class="d-flex flex-wrap justify-content-center justify-content-lg-start flex-md-nowrap align-items-center p-0 m-0 list-unstyled header-info">
                    <li class="d-flex align-items-center gap-10">
                        <i class="ti ti-map-pin"></i>
                        <span>Location: 307/1737 Anzac Avenue, Mango Hill, 4509</span>
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
</div> --}}
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
                            <a class="dropdown-item" href="{{ route("our-commitment") }}">
                               Our Commitment
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route("our-leadership") }}">
                                Our Leadership
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("contact-us") }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Who We Serve
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route("ndis") }}">
                                NDIS
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route(name: "my-aged-care") }}">
                                My Aged Care
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route(name: "niisq") }}">
                                NIISQ
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route(name: "department-of-veterans-affairs") }}">
                                DVA
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
                            <a class="dropdown-item" href="{{ route("in-home-care") }}">
                               In Home Care
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("community-participation") }}">
                                Community Participation
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("supported-independent-living") }}">
                                Supported Independent Living (SIL)
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("service-details") }}">
                                Care Coordination/Navigation
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("community-nursing") }}">
                                Community Nursing
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("allied-health") }}">
                                Allied Health
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("plan-management") }}">
                                Plan Management
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("support-coordination") }}">
                                Support Coordination
                            </a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route("our-blogs") }}">
                                News and Blogs
                            </a>
                        </li>
                       
                        <li>
                            <a class="dropdown-item" href="{{ route("client-resources") }}">
                                Client Resource
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("staff-resources") }}">
                                Staff Resource
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("faqs") }}">
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route("careers") }}">
                                Careers
                            </a>
                        </li>




                    </ul>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route("contact-us")}}">
                        Contact us
                    </a>
                </li> --}}
            </ul>
        </div>

        <div class="others-options d-flex align-items-center">
            <!-- Blade Template Code -->
<div class="gap-3 d-flex align-items-center accessibility-controls">
 <button class="bg-transparent border-0 p-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <img src="assets/images/icon-grid.svg" alt="icon-grid">
                </button>
    <!-- Language Translator -->
    <div class="dropdown">
       <button class="accessibility-btn" 
                type="button" 
                id="languageDropdown" 
                data-bs-toggle="dropdown" 
                aria-expanded="false"
                title="Change Language">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            </svg>
            <span class="btn-label" id="currentLangLabel">English</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="languageDropdown">
            <li class="dropdown-header">Select Language</li>
            <li><a class="dropdown-item" href="#" data-lang="en" data-label="English">🇬🇧 English</a></li>
            <li><a class="dropdown-item" href="#" data-lang="es" data-label="Español">🇪🇸 Español</a></li>
            <li><a class="dropdown-item" href="#" data-lang="fr" data-label="Français">🇫🇷 Français</a></li>
            <li><a class="dropdown-item" href="#" data-lang="de" data-label="Deutsch">🇩🇪 Deutsch</a></li>
            <li><a class="dropdown-item" href="#" data-lang="hi" data-label="हिंदी">🇮🇳 हिंदी</a></li>
            <li><a class="dropdown-item" href="#" data-lang="zh" data-label="中文">🇨🇳 中文</a></li>
            <li><a class="dropdown-item" href="#" data-lang="ar" data-label="العربية">🇸🇦 العربية</a></li>
            <li><a class="dropdown-item" href="#" data-lang="pt" data-label="Português">🇵🇹 Português</a></li>
        </ul>
    </div>
<!-- Add this hidden div to include Google Translate -->
<div id="google_translate_element" style="display:none;"></div>
 <!-- Font Size Adjuster -->
     <!-- Font Size Adjuster -->
    <div class="font-size-controller">
        <span class="font-size-label">Adjust font size</span>
        <button class="font-size-btn" id="decreaseFont" title="Decrease font size">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
        </button>
        <button class="font-size-btn font-reset-btn" id="resetFont" title="Reset to default size">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/>
                <path d="M21 3v5h-5"/>
            </svg>
        </button>
        <button class="font-size-btn" id="increaseFont" title="Increase font size">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
        </button>
    </div>
</div>
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

