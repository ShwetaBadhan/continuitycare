<!-- Start Mobile Navbar Area -->
<div class="mobile-navbar offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header">
        <div class="">
            <a href="{{ route("home") }}" class="logo d-inline-block">
                <img src="assets/images/logo/hozlogo.webp" alt="logo">
            </a>
            <a href="{{ route("home") }}" class="logo d-none">
                <img src="assets/images/logo/hozlogo.webp" alt="logo">
            </a>
        </div>

        <button type="button" class="btn-close opacity-1" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>

    <div class="offcanvas-body">
        <ul class="mobile-menu">
            <li class="mobile-menu-list active without-icon">
                <a href="{{ route("home") }}">
                    Home
                </a>


            </li>
            <li class="mobile-menu-list">
                <a href="javascript:void(0);">
                    Who We Are
                </a>

                <ul class="mobile-menu-items">
                    <li>
                        <a class="dropdown-item" href="{{ route("about-us") }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("our-leadership") }}">
                            Leadership
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("contact-us") }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </li>

            <li class="mobile-menu-list">
                <a href="javascript:void(0);">
                    Who We Serve
                </a>

                <ul class="mobile-menu-items">
                    <li>
                        <a class="dropdown-item" href="{{ route("ndis") }}">
                            NDIS
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("my-aged-care") }}">
                            My Aged Care
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("niisq") }}">
                            NIISQ
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("department-of-veterans-affairs") }}">
                            DVA
                        </a>
                    </li>
                </ul>
            </li>

            <li class="mobile-menu-list">
                <a href="javascript:void(0);">
                    Our Services
                </a>

                <ul class="mobile-menu-items">
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            In Home Care
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Community Participation
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Supported Independent Living (SIL)
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Care Coordination/Navigation
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Community Nursing
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Allied Health
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Plan Management
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("service-details") }}">
                            Support Coordination
                        </a>
                    </li>

                </ul>
            </li>

            <li class="mobile-menu-list">
                <a href="javascript:void(0);">
                    Resources
                </a>

                <ul class="mobile-menu-items">
                    <li>
                        <a class="dropdown-item" href="{{ route("our-blogs") }}">
                            News & Blogs
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("client-resources") }}">
                            Client Resources
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route("staff-resources") }}">
                            Staff Resources
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ ("faqs") }}">
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ ("careers") }}">
                            Career
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
</div>
<!-- End Mobile Navbar Area -->