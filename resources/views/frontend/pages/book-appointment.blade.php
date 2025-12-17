@extends("frontend.layout.master")
@section("title","Book A Appointment")
@section("content")
 <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg17.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Book Appointment</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            Book Appointment
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Contact Us Area -->
        <div class="contact-us-area ptb-120">
            <div class="container mw-1685">
                <div class="contact-us-form bg-img border p-4 p-lg-5 rounded-4 mx-auto">
                    <div class="text-center">
                        <h3 class="mt-0">Take A Schedule Appointment</h3>
                        <p>Our booking process is simple confidential and flexible to fit your schedule</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-gray" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control bg-gray" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6">
                            <input type="number" class="form-control bg-gray" placeholder="Your Phone">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-gray" placeholder="Select Service">
                        </div>
                        <div class="col-lg-6">
                            <label class="label fw-normal">Appointment Date</label>
                            <input type="date" class="form-control bg-gray">
                        </div>
                        <div class="col-lg-6">
                            <label class="label fw-normal">Appointment Time</label>
                            <input type="time" class="form-control bg-gray">
                        </div>
                        <div class="col-lg-12">
                            <textarea rows="5" class="form-control bg-gray" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="default-btn mx-auto">
                                <span class="d-flex gap-10 align-items-center justify-content-center">
                                    <span>Send Request</span>
                                    <img src="assets/images/right-white.svg" alt="right-white">
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Us Area -->
@endsection