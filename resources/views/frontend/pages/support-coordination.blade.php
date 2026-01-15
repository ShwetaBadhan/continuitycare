@extends("frontend.layout.master")
@section("title", "Support Coordination | Continuity Care")
@section("content")
  <div class="services-area padding-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <div class="details-content">
            <img src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4" alt="services-details">
          </div>
        </div>
        <div class="col-md-6">
          <div class="details-content">
            <h3 class="main-titles">What is Support Coordination?</h3>
            <p>Support Coordination is a capacity-building service under the NDIS designed to help participants
              understand, implement, and maximise their NDIS plans. In Brisbane alone, thousands of participants rely on
              Support Coordinators to simplify the complexities of the system, connect with trusted service providers, and
              build long-term independence.</p>
            <p>Whether you’re new to the NDIS or navigating an existing plan, support coordination ensures your goals are
              achievable and your voice is heard every step of the way.</p>
          </div>
          <a href="tel:1800 012 273" class="default-btn active mt-5">
            <div class="d-flex gap-10 align-content-center">
              <span>Book a Free Consultation</span>
              <img src="assets/images/right.svg" alt="right-white">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Why Choose Us Area -->
  <section class="why-choose-section section-care">
    <div class="container">
      <!-- Section Header -->
      <div class="row mb-5">
        <div class="col-lg-10 mx-auto text-center section-header">
          <h2 class="main-title">How Can Support Coordination Help with Your NDIS Plan?</h2>
          <p>Support Coordinators help you get the most out of your NDIS plan by:</p>
        </div>
      </div>

      <!-- Features Grid -->
      <div class="row g-4 mt-5">
        <!-- Feature 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="feature-card card-red">
            <div class="icon-wrapper">
              <svg viewBox="0 0 24 24">
                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
              </svg>
            </div>

            <p>Explaining your funding and breaking down how you can use it.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="feature-card card-blue">
            <div class="icon-wrapper">
              <svg viewBox="0 0 24 24">
                <path d="M9 11l3 3L22 4" />
                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
              </svg>
            </div>

            <p>Connecting you to local service providers and community supports.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="feature-card card-purple">
            <div class="icon-wrapper">
              <svg viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
              </svg>
            </div>

            <p>Managing service bookings and reviewing service agreements.</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="feature-card card-teal">
            <div class="icon-wrapper">
              <svg viewBox="0 0 24 24">
                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
              </svg>
            </div>

            <p>Helping you build confidence to coordinate your own supports over time.</p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="col-lg-4 col-md-6">
          <div class="feature-card card-orange">
            <div class="icon-wrapper">
              <svg viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
            </div>

            <p>Preparing for plan reviews and ensuring continuity of care.</p>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- End Why Choose Us Area -->



  <!-- Why It Matters -->
  <section class="why-matters-section padding-section">
    <div class="container">

      <!-- Heading -->
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <span class="section-label">What to Expect from Support Coordination</span>
          <h2 class="main-titles">
            What to Expect from Support Coordination
          </h2>
          <p class="section-desc">
            At Continuity Care, we believe in putting participants first. Here's what you can expect:
          </p>
        </div>
      </div>

      <!-- Cards -->
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-users" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:229:6"
                data-component-name="Icon">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <circle cx="9" cy="7" r="4"></circle>
              </svg>
            </div>
            <h4>Personalised Support</h4>
            <p>
              Every plan is unique, and so is our approach.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-heart" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:229:6"
                data-component-name="Icon">
                <path
                  d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                </path>
              </svg>
            </div>
            <h4>Goal-Driven Planning</h4>
            <p>
              We align services with what matters most to you.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-sparkles" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:229:6"
                data-component-name="Icon">
                <path
                  d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                </path>
                <path d="M20 2v4"></path>
                <path d="M22 4h-4"></path>
                <circle cx="4" cy="20" r="2"></circle>
              </svg>
            </div>
            <h4>Crisis Support & Transitions</h4>
            <p>
              We're there during life changes or emergencies.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-sun" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:229:6"
                data-component-name="Icon">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="m4.93 4.93 1.41 1.41"></path>
                <path d="m17.66 17.66 1.41 1.41"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
                <path d="m6.34 17.66-1.41 1.41"></path>
                <path d="m19.07 4.93-1.41 1.41"></path>
              </svg>
            </div>
            <h4>Transparent Communication</h4>
            <p>
              No confusing jargon - just clear, supportive guidance.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-sun" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:229:6"
                data-component-name="Icon">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="m4.93 4.93 1.41 1.41"></path>
                <path d="m17.66 17.66 1.41 1.41"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
                <path d="m6.34 17.66-1.41 1.41"></path>
                <path d="m19.07 4.93-1.41 1.41"></path>
              </svg>
            </div>
            <h4>Proactive Monitoring</h4>
            <p>
              We regularly check in to ensure you're on track.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>



  <!-- Who We Support -->
  <section class="section-care">
    <div class="container">
      <h2 class="main-titlestext-center">Our NDIS Support Coordination Services</h2>
      <p class="text-center mb-5 fs-5">At Continuity Care, we offer a comprehensive range of NDIS Support Coordination
        services to ensure you receive the right assistance at the right time. Our approach is holistic, compassionate,
        and grounded in empowering you to take control of your plan with clarity and purpose.</p>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&h=400&fit=crop"
              alt="NDIS Participants" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <h4>Support Connection</h4>
              <p class="mb-0">Short-term assistance to help you understand your plan and connect with providers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1581579438747-1dc8d17bbce4?w=600&h=400&fit=crop"
              alt="My Aged Care" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-house-heart-fill"></i>
              </div>
              <h4>Coordination of Supports</h4>
              <p class="mb-0">Ongoing guidance to manage complex supports, navigate the system, and achieve greater
                independence.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=400&fit=crop"
              alt="Post-Acute Care" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <h4>Specialist Support</h4>
              <p class="mb-0">For participants with higher or more complex needs, our specialist coordinators work with
                medical professionals.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=400&fit=crop"
              alt="Post-Acute Care" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <h4>Provider Engagement</h4>
              <p class="mb-0">We help source, negotiate, and manage service agreements with quality, reliable providers in
                Brisbane.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=400&fit=crop"
              alt="Post-Acute Care" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <h4> Review Preparation</h4>
              <p class="mb-0">We help you evaluate your progress, set new goals, and prepare documentation for your plan
                review.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="support-card">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&h=400&fit=crop"
              alt="Post-Acute Care" class="support-card-img">
            <div class="support-card-body">
              <div class="support-card-icon">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <h4>Capacity Building</h4>
              <p class="mb-0">We equip you with skills and knowledge so you can eventually manage your own supports
                confidently.</p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>




  <!-- What is Section -->
  <section class="padding-section bg-light">
    <div class="container">


      <div class="row g-4 d-flex align-items-center">
        <div class="col-lg-5 mx-auto">
          <img src="{{ asset('assets/images/about/download.png') }}" class="rounded" alt="">
        </div>
        <div class="col-lg-7 mx-auto">
          <h2 class="main-titles">Why Choose Continuity Care for Support Coordination in Brisbane?</h2>

          <p>
            With years of experience serving participants across Brisbane, Kuremara has become a trusted name in Support
            Coordination. Here's why families, carers, and participants continue to choose us:
          </p>

          <ul class="list-unstyled approach-list">
            <li><span></span> Local Knowledge: We're based in Brisbane and understand the local support ecosystem.</li>
            <li><span></span> Culturally Sensitive: Our coordinators respect diverse backgrounds and individual
              preferences</li>
            <li><span></span> NDIS Expertise: We're across all updates, funding categories, and compliance needs.</li>
            <li><span></span> Participant-Centred: Your goals, your pace, your journey we're just here to guide it.</li>
            <li><span></span> Comprehensive Network: From SIL to therapy to employment, we connect you with the best.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- End Services Area -->
  <div class="services-area mt-5 mb-5">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12">

          <h2 class="main-titles text-center">FAQs</h2>
          <h4 class="text-center">maintain optimal care, enable early intervention, minimise hospital presentations</h4>
          <div class="accordion faq-wrapper" id="accordionExample" data-cues="slideInUp" data-duration="900">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Reduce hospital admissions and readmissions
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Nurses can track and respond to deterioration early using:</p>
                  <ul class="list-unstyled approach-list">
                    <li><span></span> Real-Time and Trending Vital Signs</li>
                    <li><span></span> Symptom and Wellness Check-Ins</li>
                    <li><span></span> Medication Adherence Signals</li>
                    <li><span></span> Activity and Nutrition Indicators</li>
                  </ul>
                  <p>This supports timely outreach and escalation before a problem becomes an ED visit.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Avoid costly emergency presentations through early warning and triage
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Continuity Connect supports a nurse-led model where:</p>
                  <ul class="list-unstyled approach-list">
                    <li><span></span> Risk Indicators Are Visible Early</li>
                    <li><span></span> Alerts and Trends Prompt Nurse Review</li>
                    <li><span></span> Follow-Up Happens Via Secure Messaging, Phone, or Video Check-Ins</li>
                    <li><span></span> On-Site Visits Are Reserved For Clinically Necessary Cases</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Deliver continuous care between visits (true continuity of care)
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Patients aren’t “offline” between scheduled visits. Nurses can deliver:</p>
                  <ul class="list-unstyled approach-list">
                    <li><span></span> Asynchronous Clinical Reviews</li>
                    <li><span></span> Proactive Education and Coaching</li>
                    <li><span></span> Structured Questionnaires and Surveys</li>
                    <li><span></span> Secure Communication with Patients and Families</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                  Improve chronic disease management in the primary care setting
                </button>
              </h2>
              <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>For older people and people living with disability—often managing diabetes, cardiovascular disease,
                    COPD/asthma, chronic kidney disease, frailty, wound risk, and polypharmacy—Continuity Connect
                    supports:</p>
                  <ul class="list-unstyled approach-list">
                    <li><span></span> Self-Management Routines with Reminders and Tasks</li>
                    <li><span></span> Early Identification of Non-Adherence</li>
                    <li><span></span> Nutrition Prompts To Reduce Malnutrition/Dehydration Risk</li>
                    <li><span></span> Documentation That Supports Shared Care with Gps and Allied Health</li>
                  </ul>
                  <p>And it complements existing primary care coordination—rather than replacing it.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                  Alleviate workforce pressure while protecting care quality
                </button>
              </h2>
              <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>By reducing avoidable visits and prioritising clinically significant reviews, nurses can focus
                    capacity on the people with the highest need—supporting sustainable service delivery without
                    compromising safety.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection