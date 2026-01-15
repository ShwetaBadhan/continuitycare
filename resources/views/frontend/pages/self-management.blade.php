@extends("frontend.layout.master")
@section("title", "Self Management")
@section("content")


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
                        <h3 class="main-titles">Self-Managed Home Care Packages.</h3>
                        <p>At Let’s Get Care, we're dedicated to making your life easier. We know you want to stay in your
                            own home, and we're here to support you every step of the way.</p>
                        <p>Our self-managed Home Care Packages are designed with you in mind. You get to call the shots.
                            It's all about what you need, because we believe in personalised care that suits your unique
                            lifestyle.</p>
                    </div>
                    <a href="" class="default-btn active mt-5">
                        <div class="d-flex gap-10 align-content-center">
                            <span>Download our info kit</span>
                            <img src="assets/images/right.svg" alt="right-white">
                        </div>
                    </a>

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

                    <h2 class="main-titles">What is self-management?</h2>
                    <p class="mb-4">
                        Self-management is a concept that puts you in charge of your care. It means having the freedom to
                        make decisions about your support workers, the services you receive, and how your approved Home Care
                        Package Funding is utilised.
                    </p>
                    <p class="mb-4">
                        In a self-management model, you become the central figure in your care journey. You have the
                        flexibility to hire and manage your support workers, giving you the ability to select individuals
                        who align with your personality and care requirements. This personalised approach puts you at the
                        forefront of decision-making, ensuring that your care is truly centred around you as a unique and
                        valued person. While self-managing you will still have access to a dedicated Care Manager who will
                        work with you to develop a customised Care Plan that will cover what you would like to spend your
                        package funds on.
                    </p>


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
                <div class="col-md-6">
                    <div class="details-content">
                        <img src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
                            alt="services-details">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <h3 class="main-titles">Benefits of self-management.</h3>
                        <p>When you choose to self-manage your Home Care Package, you’re taking a proactive step towards
                            having more control over your aged care journey. As your trusted Home Care Package Provider, we
                            want to ensure you understand the advantages of this approach. Here are the key benefits:</p>
                    </div>
                    <ul class="list-unstyled approach-list mt-5">
                        <li><span></span> You have more control and power to decide how your package money is spent,
                            tailoring it to your unique home care needs and preferences.</li>
                        <li><span></span> With efficient management and reduced administrative fees, you can save money and
                            may access up to double the hours of care compared to traditional providers.</li>
                        <li><span></span> We provide quality care by directly overseeing your Care Plan and having a
                            dedicated Care Manager to guide you along your home care journey. You can ensure it aligns with
                            the highest aged care quality standards.</li>
                        <li><span></span> While you're in charge, you're not alone. Our dedicated support team is here to
                            guide you through your self-management journey.</li>
                        <li><span></span> Benefit from user-friendly tools and resources that empower you to manage your
                            Home Care Package effectively.</li>
                        <li><span></span> Choose health professionals in your area to deliver your nursing care.</li>

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
                <div class="col-lg-12">

                    <h2 class="main-titles text-center">What to expect when self-managing your Home Care Package.</h2>
                    <p class="text-center">As your chosen self-managed Home Care Package Provider we will be there to
                        support you to find the best way to spend your package funds. One of the most crucial decisions
                        people need to make with their Home Care Packages is who they choose to be their Provider. Even if
                        you select a self-managed Home Care Package you are still legally required to choose a Provider to
                        support you with your package. Here’s how self-management works, to help you decide if it’s the
                        right option for you.</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="bg-light">OPTIONS:</th>
                                <th class="bg-light">SELF-MANAGEMENT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>How much involvement do you want with the day-to-day management of your Home Care
                                    Package?</td>
                                <td>You hire and schedule your care services you want, when it suits you under the
                                    self-managed option.</td>
                            </tr>
                            <tr>
                                <td>What’s the total fee?</td>
                                <td>15% fee.</td>
                            </tr>
                            <tr>
                                <td>Are you comfortable making decisions about support workers?</td>
                                <td>Self-management lets you choose your support worker; whereas with fully managed, we
                                    assign them.</td>
                            </tr>
                            <tr>
                                <td>What is Let’s Get Care’s role as an approved HCP Provider?</td>
                                <td>A dedicated Care Manager will help you with maintaining your budget and create a
                                    personalized Care Plan.</td>
                            </tr>
                            <tr>
                                <td>Do you want more budget control over your HCP funds?</td>
                                <td>This can reduce fees, while fully-managed options may have more administrative costs.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </section>
    <div class="nursing-care-section">
        <h2 class="main-titles">Services you can receive when self-managing your package.</h2>
        <p>
            Let’s Get Care helps you self-manage your package by creating a personalised plan based on your needs. We
            provide ongoing support services, whether you’re in a hospital, during respite care, at home, or needing home
            maintenance, social support, or custom home care services delivered by our trusted carer who pay attention to
            your needs.
        </p>

        <div class="care-features-grid">
            <!-- Feature 1 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-activity" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path
                                d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                            </path>
                        </svg></div>
                </div>
                <h3>Personal care.</h3>
                <p class="nursing-feature-text">
                    Grooming, bathing, dressing, continence and mobility.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-calendar-check" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                            <path d="m9 16 2 2 4-4"></path>
                        </svg></div>
                </div>
                <h3>Domestic assistance.</h3>
                <p class="nursing-feature-text">
                    Tidying and cleaning for a happy home.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-calendar-check" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                            <path d="m9 16 2 2 4-4"></path>
                        </svg></div>
                </div>
                <h3>Social support.</h3>
                <p class="nursing-feature-text">
                    Support and transport to attend appointments, go shopping and attend social functions.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-check" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path d="m16 11 2 2 4-4"></path>
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg></div>
                </div>
                <h3>Allied health & therapy.</h3>
                <p class="nursing-feature-text">
                    Allied health and therapy services such as physiotherapy, podiatry and more to support your health
                    needs.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-pill" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path>
                            <path d="m8.5 8.5 7 7"></path>
                        </svg></div>
                </div>
                <h3>Nursing care.</h3>
                <p class="nursing-feature-text">
                    Specialised clinical healthcare services to address any health concerns.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="nursing-feature-card">
                <div class="nursing-feature-header">
                    <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-message-circle-heart" aria-hidden="true"
                            data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon">
                            <path
                                d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                            </path>
                            <path
                                d="M7.828 13.07A3 3 0 0 1 12 8.764a3 3 0 0 1 5.004 2.224 3 3 0 0 1-.832 2.083l-3.447 3.62a1 1 0 0 1-1.45-.001z">
                            </path>
                        </svg></div>
                </div>
                <h3>Respite care.</h3>
                <p class="nursing-feature-text">
                    Assisting family members to take a well deserved break when needed.
                </p>
            </div>
        </div>
    </div>


    <section class="custom-hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT: Text + Buttons -->
                <div class="col-lg-6 mb-4 mb-lg-0">

                    <h2 class="main-titles">Is self-management right for you?</h2>
                    <p class="mb-4">
                        A self-managed Home Care Package offers a unique opportunity to shape your care journey according to
                        your preferences and needs.
                    <p class="mb-4">
                        However, before deciding if you want to self-manage your package funding is the right fit, it’s
                        essential to understand its important factors and whether it aligns with your goals and lifestyle.
                        To help you determine if self-management is the right fit for your unique situation, consider the
                        following:
                    </p>
                    <ul class="list-unstyled approach-list mt-5">
                        <li><span></span> Do you want more control over your care decisions and how your Home Care Package
                            funding is utilised?</li>
                        <li><span></span> Are you looking for a dedicated Care Manager personalised Care Plan that caters
                            specifically to your needs and preferences?</li>
                        <li><span></span> Do you want to maximise your package funds by reducing administration fees and
                            management fees?</li>
                        <li><span></span> Are you comfortable making decisions about support workers, home care support
                            services, and scheduling?</li>
                        <li><span></span> Do you have a basic understanding of the aged care system and the services
                            available to you?</li>

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

    <div class="subscribe-area bg-primary ptb-120 bg-img" style="background-image: url(assets/images/subscribe-bg.png);">
        <div class="container">
            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="col-lg-6">
                    <img src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_webp,s_webp/letsgetcare.com.au/wp-content/uploads/Australia-1-1.png"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-content">

                        <h2 class=" text-white">We have connections with support workers available across Australia.</h2>
                        <p align="justify" class=" text-white">Let’s Get Care is your trusted Home Care Package Provider
                            across Australia. Our innovative self-management approach allows us to assist older Australians
                            no matter where you call home. Whether you reside in regional towns or bustling cities, we
                            provide you with the freedom to select and manage your local care team, putting choice and
                            control firmly in your hands.</p>
                        <a href="" class="default-btn mt-5">
                            <div class="d-flex align-items-center gap-10">
                                <span>Find Your Location</span>
                                <img src="assets/images/right-white.svg" alt="right-white">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

    <!-- Start Case Study Area -->
    <div class="case-study-area pb-120 pt-80 pt-120">
        <div class="container mw-1685">
            <div class="row g-4 d-flex align-items-center">
                <div class="col-md-6">
                    <div class="details-content">
                        <img src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
                            alt="services-details">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <h3 class="main-titles">How life is better with Let’s Get Care.</h3>
                    </div>
                    <ul class="list-unstyled approach-list mt-5">
                        <li><span></span> More choice and control.</li>
                        <li><span></span> Low fixed fee, nothing more.</li>
                        <li><span></span> Experts in self-management.</li>

                    </ul>

                </div>

            </div>
        </div>
    </div>
    <!-- End Case Study Area -->

    <section class="sms-hero-section">
        <div class="container">
            <h1 class="sms-main-heading">How to set up self-management services.</h1>

            <p class="sms-intro-text">
                We're here assist you in self-managing your Home Care Package, ensuring you receive the support required to
                continue living safely and happily at home, with the carers of your choice. It's hassle-free with us.
            </p>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="sms-step-card">
                        <div class="sms-step-badge">
                            <span class="sms-check-icon">✓</span>
                            <span>Step 1</span>
                        </div>

                        <div class="sms-illustration-wrapper">
                            <img
                                src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_webp,s_webp/letsgetcare.com.au/wp-content/uploads/25-2.png">
                        </div>

                        <p class="sms-step-description">
                            Start by having a chat with one of our Care Experts. Together, we'll explore the options that
                            best align with your unique home care needs and preferences.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="sms-step-card">
                        <div class="sms-step-badge">
                            <span class="sms-check-icon">✓</span>
                            <span>Step 2</span>
                        </div>

                        <div class="sms-illustration-wrapper">
                            <img
                                src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_webp,s_webp/letsgetcare.com.au/wp-content/uploads/29.png">
                        </div>

                        <p class="sms-step-description">
                            Our friendly Care Experts will organise all the necessary signup documents, which you can
                            conveniently complete online. This streamlined process gets your services up and running as
                            seamless as possible.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="sms-step-card">
                        <div class="sms-step-badge">
                            <span class="sms-check-icon">✓</span>
                            <span>Step 3</span>
                        </div>

                        <div class="sms-illustration-wrapper">
                            <img
                                src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_webp,s_webp/letsgetcare.com.au/wp-content/uploads/28.png">

                        </div>

                        <p class="sms-step-description">
                            Now, you're all set to commence your services! Let's Get Care offers you the flexibility to
                            select from our extensive list of exceptional service providers or bring your own trusted carers
                            on board. The choice is yours, and it's home care, your way, with Let's Get Care.
                        </p>
                    </div>
                </div>
            </div>

            <div class="sms-cta-wrapper">
                <button class="sms-cta-button">Get Started Today</button>
            </div>
        </div>
    </section>
@endsection