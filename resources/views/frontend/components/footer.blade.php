<!-- Start Footer Area -->
<div class="footer-area bg-secondary padding-section">
    <div class="container mw-1685">
        <div class="row g-4" data-cues="slideInUp" data-duration="900">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-single-widget">
                    <a href="{{ route("home") }}" class="logo d-inline-block">
                        <img src="{{ asset('assets/images/logo/hozlogo.webp') }}" alt="white-logo">
                    </a>

                    <ul class="p-0 m-0 list-unstyled info-list">
                        <li class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti ti-map-pin-filled"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Location</h6>
                                <p>Australia</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti ti-mail-filled"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Email</h6>
                                <a href="mailto:info@continuitycare.com.au"
                                    target="_blank"><span>info@continuitycare.com.au</span></a>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti ti-phone-filled"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Phone</h6>
                                <a href="tel: +61-1800-012-273"> +61-1800-012-273</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-single-widget">
                    <h3>Useful Link</h3>

                    <ul class="import-link p-0 m-0 list-unstyled">
                        <li>
                            <a href="{{ route("about-us") }}">Who We Are</a>
                        </li>
                        <li>
                            <a href="{{ route('our-commitment') }}">Our Commitment</a>
                        </li>
                        <li>
                            <a href="{{ route("our-leadership") }}">Our Leadership</a>
                        </li>

                        <li>
                            <a href="{{ route("our-blogs") }}">News & Blog</a>
                        </li>
                        <li>
                            <a href="{{ route("contact-us") }}">Contact-us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-single-widget">
                    <h3>Our Services</h3>

                    <ul class="import-link p-0 m-0 list-unstyled">
                        <li>
                            <a  href="{{ route("in-home-care") }}">
                                In-Home Care
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("community-participation") }}">
                                Community Participation
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("supported-independent-living") }}">
                                Supported Independent Living (SIL)
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("service-details") }}">
                                Care Coordination/Navigation
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("community-nursing") }}">
                                Community Nursing
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("allied-health") }}">
                                Allied Health
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("plan-management") }}">
                                Plan Management
                            </a>
                        </li>
                        <li>
                            <a  href="{{ route("support-coordination") }}">
                                Support Coordination
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-single-widget newsletter-form">
                    <h3>Subscribe Newsletter</h3>

                    <p>Stay connected with the latest news, helpful tips, and heartwarming stories from our blog</p>

                    <form class="position-relative z-1 mb-3">
                        <input type="email" class="form-control" placeholder="Enter Your Email">
                        <button type="submit" class="submit-btn position-absolute top-50 end-0 translate-middle-y">
                            <img src="{{ asset('assets/images/icon-send.svg') }}" alt="icon-send">
                        </button>
                    </form>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            I understand and agree to the <a href="{{ route("terms-conditions") }}">Terms &
                                Conditions</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->