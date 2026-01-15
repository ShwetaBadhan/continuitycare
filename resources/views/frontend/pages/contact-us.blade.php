@extends("frontend.layout.master")
@section("title", " Contact Us | Continuity Care")
@section("content")
 <!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg17.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Contact Us</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="index.html" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner Area -->

        <!-- Start Contact Us Area -->
        <div class="contact-us-area padding-section">
            <div class="container mw-1685">
                <div class="row g-4 align-items-center" data-cues="slideInUp" data-duration="900">
                    <div class="col-lg-6">
                        <div class="contact-us-form bg-img border p-4 p-lg-5 rounded-4">
                            <h3 class="mt-0">Take A Schedule Appointment</h3>
                            <p>Our booking process is simple confidential and flexible to fit your schedule</p>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control bg-f2f3f5" placeholder="Full Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control bg-f2f3f5" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control bg-f2f3f5" placeholder="Phone">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control bg-f2f3f5" placeholder="Subject">
                                </div>
                                <div class="col-lg-12">
                                    <textarea rows="5" class="form-control bg-f2f3f5" placeholder="Write Your Message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn">
                                        <span class="d-flex gap-10 align-items-center justify-content-center">
                                            <span>send message</span>
                                            <img src="assets/images/right-white.svg" alt="right-white">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-content position-relative">
                            <span class="top-title mb-2 mt-0">CONTACT US</span>
                            <h2 class="main-title">Please Don't Hesitate To <span class="word-mark">Contact Us</span> for your healthy life</h2>
                            <p>Whether provided at home in assisted living facilities or nursing homes senior care aims to promote independence while offering safety and comfort. Compassionate and personalized care helps seniors maintain their physical health mental well being and social connections</p>

                            <h3>Opening Hours</h3>

                            <ul class="p-0 m-0 list-unstyled">
                                <li>Monday - Friday, 8 AM - 6 PM</li>
                                <li>Saturday - Sunday, 10 AM - 9 PM</li>
                                <li class="d-flex align-items-center gap-10 social-link">
                                    <span>Social Media:</span>
                                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                        <i class="ti ti-brand-facebook-filled"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                        <i class="ti ti-brand-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                        <i class="ti ti-brand-x"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" class="text-decoration-none">
                                        <i class="ti ti-brand-linkedin"></i>
                                    </a>
                                </li>
                            </ul>

                            <img src="assets/images/star3.png" class="position-absolute bottom-0 end-0 d-none d-lg-inline-block" alt="star3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Us Area -->

        <div class="map-area padding-section    ">
            <div class="container mw-1685">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50449.57493873455!2d-122.46184076624591!3d37.7877328771311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7fd73b007971%3A0xa19fec8def119326!2sGrowth%20Street%20Partners!5e0!3m2!1sen!2sbd!4v1761036495339!5m2!1sen!2sbd" style="border:0; width: 100%; height: 550px; border-radius: 20px; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
@endsection