@extends("frontend.layout.master")
@section("title", "My Aged Care")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg6.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="main-title mx-auto text-white">NDIS Support Services for Independent Living</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        NDIS Support Services for Independent Living
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Case Study Area -->
    <div class="case-study-area pb-120 pt-80 pt-120">
        <div class="container mw-1685">
            <div class="row g-4 d-flex align-items-center">
                <div class="col-md-4 offset-md-1">
                    <div class="details-content">
                        <img src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
                            alt="services-details">
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="details-content">
                        <h3 class="main-titles">Get quality care with Australia’s best value home care</h3>
                        <p>Getting the support you need doesn’t have to be complicated. HomeMade offers flexible, quality
                            home support that makes the most of your funding.</p>
                    </div>
                    <a href="tel:1800 012 273" class="default-btn active mt-5">
                        <div class="d-flex gap-10 align-content-center">
                            <span>Book a Free Consultation</span>
                            <img src="assets/images/right.svg" alt="right-white">
                        </div>
                    </a>
                    <ul class="list-unstyled approach-list mt-5">
                        <li><span></span> <strong>Compliant with Aged Care Quality Standards^</strong></li>
                        <li><span></span> <strong>Australia-based expert team</strong></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- End Case Study Area -->

    <section class="custom-hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT: Text + Buttons -->
                <div class="col-lg-6 mb-4 mb-lg-0">

                    <h2 class="main-titles">Don't settle for high costs and no control</h2>
                    <p class="mb-4">
                        Choose a provider who helps you get support on your terms without breaking the budget. With
                        HomeMade, you can build a care routine that fits your lifestyle and needs, with the freedom to
                        adjust your schedule as required.
                    </p>
                    <ul class="list-unstyled approach-list mt-5">
                        <li><span></span> You are in control of your care, and we're here to support you</li>
                        <li><span></span> You can access more than 3,000 service providers, all in one place</li>
                        <li><span></span> You have the support of our team of experts</li>

                    </ul>

                </div>

                <!-- RIGHT: Image with Overlay Text -->
                <div class="col-lg-6">
                    <div class="overlay-card">
                        <!-- Replace with your actual image path -->
                        <img src="{{ asset('assets/images/skills/custom-skills.png') }}" alt="Custom NDIS Activity">
                        <div class="overlay-content">
                            <h3 class="text-white">Your Vision, Supported.</h3>
                            <p class="text-white">
                                From museums to adventure trips, we make your special requests possible.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Start Case Study Area -->
    <div class="case-study-area pb-120 pt-80 pt-120">
        <div class="container mw-1685">
            <div class="row g-4 d-flex align-items-center">
            <div class="col-md-12">
           <h1 class="main-titles text-center">Choose the right option for you</h1>
           <p class=" text-center">Whether you’re thinking about self-management or want to leave it to the experts, HomeMade offers Australia’s best-value home care.</p> 
            </div>
                <div class="col-md-4">
                    <div class="details-content bg-light p-4 rounded">
                    <h2 class="main-titles"><a href="{{ route('self-management') }}">Self Managed</a> </h2>
                       <p>HomeMade helps you self-manage your Support at Home funding with confidence to access affordable care that doesn’t compromise on quality.</p>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="details-content bg-light p-4 rounded">
                    <h2 class="main-titles"><a href="{{ route('fully-management') }}">Fully Managed</a> </h2>
                       <p>If you want the best-value home care but don’t want to manage everything yourself, Fully Managed could be the answer.</p>
                    </div>
                   
                </div>
                <div class="col-md-4">
                     <div class="details-content bg-light p-4 rounded">
                    <h2 class="main-titles"><a href="{{ route('transition-care') }}">Transition Care</a> </h2>
                       <p>HomeMade helps you self-manage your Support at Home funding with confidence to access affordable care that doesn’t compromise on quality.</p>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
    <!-- End Case Study Area -->
@endsection