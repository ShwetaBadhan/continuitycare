@extends("frontend.layout.master")
@section("title", "Service Details")
@section("content")
 <!-- Start Page Banner Area -->
        {{-- <div class="page-banner-area bg-img ptb-120 position-relative" style="background-image: url(assets/images/page-bg3.jpg);">
            <div class="container mw-1685">
                <div class="page-banner-content text-center">
                    <h2 class="mx-auto text-white">Single Service</h2>
                    <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                        <li>
                            <a href="{{ route("home") }}" class="text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li>
                            Single Service
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner Area -->

        <!-- Start Services Area -->
        <div class="services-area padding-section">
            <div class="container mw-1685">
                <div class="row g-4">
                    <div class="col-xl-4">
                        <div class="sidebar mw-442">
                            <div class="sidebar-widget bg-f2f3f5">
                                <h3>Our services</h3>

                                <ul class="category-list p-0 m-0 list-unstyled">
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Transportation Assistance</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Rehabilitation Services</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Municipal health services</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Home Safety Assessments</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Personalized Care Plans</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route("our-services")}}" class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>Palliative and hospice care</span>
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar-widget bg-f2f3f5">
                                <h3>Working hours</h3>

                                <ul class="p-0 m-0 list-unstyled">
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Monday - Thursday:</span>
                                        <span>09:00am - 08:00pm</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Friday - Saturday:</span>
                                        <span>10:00am - 05:00pm</span>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span>Sunday:</span>
                                        <span>Closes</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget bg-f2f3f5">
                                <h3>Get in touch</h3>

                                <form>
                                    <div class="mb-4">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-4">
                                        <textarea rows="5" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="default-btn w-100">
                                            <span class="d-flex gap-10 align-items-center justify-content-center">
                                                <span>contact now</span>
                                                <img src="assets/images/right-white.svg" alt="right-white">
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="details-content">
                            <img src="assets/images/services-details-img.jpg" class="rounded-4" alt="services-details">

                            <h3>Rehabilitation Services</h3>
                            <p>Our mission is to create meaningful impact by delivering innovative, reliable, and sustainable solutions that empower individuals communities we are committed to integrity, collaboration, and excellence in everything we do, striving to foster growth, inspire progress</p>

                            <p>Old care is a heartfelt commitment to supporting and honoring our elderly with the dignity and compassion they deserve. It involves creating a safe, comfortable, and nurturing environment where seniors feel valued, heard, and respected. Through personalized care, emotional support, and meaningful interaction, we aim to enhance their quality of life and promote independence while ensuring they are never alone</p>

                            <h3>services include</h3>
                            <p>We believe that caring for the elderly is a reflection of our values, compassion, and respect for those who came before us. Our approach to old care centers around dignity, comfort, and personalized support—ensuring that every senior feels valued, heard, and cared for.</p>

                            <div class="row g-4 my-xl5 my-4">
                                <div class="col-lg-6">
                                    <ul class="p-0 m-0 list-unstyled">
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Personal Care Assistance</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Medication Management Services</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Meal Preparation Support</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Mobility Assistance Programs</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="p-0 m-0 list-unstyled">
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Companionship and Activities</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Housekeeping and Cleaning</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Transportation Assistance Services</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-10">
                                            <i class="ti ti-circle-check-filled text-warning fs-20"></i>
                                            <span>Health Monitoring Programs</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <p>Our success is defined by the positive outcomes we create, the trust we build, and the value we deliver to those we serve. It is reflected in the strong relationships we've developed, the goals we've achieved, and the continuous growth of our team and impact. Through dedication, innovation, and a shared commitment to excellence, we continue to turn challenges into opportunities and vision into reality.</p>

                            <h3>Frequently Asked Question</h3>
                            <p>Whether through medical assistance, daily living support, or simply providing companionship, we are committed to creating a safe and nurturing environment where older adults can enjoy a high quality of life with independence and peace of mind.</p>

                            <div class="accordion faq-wrapper style-two" id="accordionExample" data-cues="slideInUp" data-duration="900">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What Services Do You Offer At Your Elderly Home?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our goal is to create a safe comfortable and welcoming environment where seniors can enjoy their days with dignity purpose and a strong sense of experienced caregivers tailored support plans and engaging daily activities</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is medical Care Available On-Site?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Building Permit: Required for new construction, additions, renovations, or major structural changes. Zoning Approval: Ensures your project complies with local land-use regulations (e.g., residential, commercial, industrial). Some projects require both.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How Do I Know If It’s The Right Time For Senior Care?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Registering to vote or updating your voter information is the official process that ensures you are eligible to participate in elections and that your personal details are accurate in the voter rolls. This process typically requires providing proof of identity, residency, and age. It can be done online, in person, or by mail, depending on your local election authority. Updating your information is important if you move, change your name, or need to modify party affiliation, as it ensures you receive the correct ballot and can vote without issues. Always verify your registration status after submission to confirm your eligibility.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                            Can Residents Personalize Their Rooms?
                                        </button>
                                    </h2>
                                    <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Municipal and city government services are public services provided by local government authorities to meet the needs of residents and maintain community well-being. These services vary by city but generally include essential, regulatory, and recreational functions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
@endsection