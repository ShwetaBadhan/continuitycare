@extends("frontend.layout.master")
@section("title", "Supported Independent Living")
@section("content")
    <div class="services-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="details-content">
                        <img src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4" alt="services-details">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-content">
                        <h3 class="main-titles">Enabling the Transformation of Community Nursing</h3>
                        <p>Continuity Connect supports the delivery of high-quality care within the comfort of home, connecting caregivers, patients, and families for better health outcomes.</p>
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

 <div class="nursing-care-section">
    <h2 class="main-titles">Comprehensive Care at Home</h2>
    <p>
      Our cloud-based platform connects every stakeholder to improve overall health, well-being, and quality of life.
    </p>

    <div class="care-features-grid">
      <!-- Feature 1 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg></div>
        </div>
        <h3>Vital Signs</h3>
        <p class="nursing-feature-text">
          Real-time vital signs tracking through easy-to-use integrated medical devices.
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="m9 16 2 2 4-4"></path></svg></div>
        </div>
        <h3>Reminders & Task Lists</h3>
        <p class="nursing-feature-text">
          Assist patients by organizing their upcoming tasks and daily routines.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="m9 16 2 2 4-4"></path></svg></div>
        </div>
        <h3>Nutritional Inputs</h3>
        <p class="nursing-feature-text">
          Keep patients on track with health goals and dietary requirements.
        </p>
      </div>

      <!-- Feature 4 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-check" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="m16 11 2 2 4-4"></path><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></div>
        </div>
        <h3>Patient Engagement</h3>
        <p class="nursing-feature-text">
          Empower patients to actively participate in their own care plans.
        </p>
      </div>

      <!-- Feature 5 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pill" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path><path d="m8.5 8.5 7 7"></path></svg></div>
        </div>
        <h3>Medication Reminders</h3>
        <p class="nursing-feature-text">
          Avoid adverse events due to prescription conflicts and missed doses.
        </p>
      </div>

      <!-- Feature 6 -->
      <div class="nursing-feature-card">
        <div class="nursing-feature-header">
          <div class="nursing-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-heart" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:48:10" data-component-name="Icon"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path><path d="M7.828 13.07A3 3 0 0 1 12 8.764a3 3 0 0 1 5.004 2.224 3 3 0 0 1-.832 2.083l-3.447 3.62a1 1 0 0 1-1.45-.001z"></path></svg></div>
        </div>
        <h3>Communication Tools</h3>
        <p class="nursing-feature-text">
          Simple tools to remotely interact with care teams or loved ones.
        </p>
      </div>
    </div>
  </div>
 <div class="nursing-section">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
    <!-- Left Content -->
    <div class="nursing-content">
      <span class="nursing-tag">New Aged Care Act Aligned</span>
      <h2 class="rights-header">Rights-Based Community Nursing</h2>
      <p class="rights-desc">
        Australia’s new Aged Care Act places the rights of older people at the centre of the aged care system.
      </p>
      <p class="rights-desc">
        Continuity Connect operationalises this shift by enabling nurses to deliver <strong>continuous, proactive, person-centred care</strong> — supported by real-time monitoring, structured digital check-ins, and family-inclusive communication.
      </p>

      <!-- Benefits List -->
      <ul class="rights-benefits">
        <li class="rights-benefit">
          <span class="benefit-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <span class="benefit-text">Safer care at home through early detection</span>
        </li>

        <li class="rights-benefit">
          <span class="benefit-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <span class="benefit-text">Choice, control and participation</span>
        </li>

        <li class="rights-benefit">
          <span class="benefit-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <span class="benefit-text">Reduced risk of harm</span>
        </li>

        <li class="rights-benefit">
          <span class="benefit-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <span class="benefit-text">Better transparency for families</span>
        </li>

        <li class="rights-benefit">
          <span class="benefit-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <span class="benefit-text">Evidence-informed decision-making</span>
        </li>
      </ul>
    </div>
            </div>
            <div class="col-lg-6">
                 <!-- Right Panel -->
    <div class="impact-container">
      <h3 class="impact-title">Why this matters in Australia</h3>

      <div class="impact-item">
        <span class="impact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity w-5 h-5" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:252:22" data-component-name="Activity"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg></span>
        <div class="impact-heading">Complex Multimorbidity</div>
        <div class="impact-text">
          Many receiving aged care live with multiple chronic conditions that increase risk of deterioration and preventable ED presentations.
        </div>
      </div>

      <div class="impact-item">
        <span class="impact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope w-5 h-5" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:258:22" data-component-name="Stethoscope"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg></span>
        <div class="impact-heading">The "Between-Visit Gap"</div>
        <div class="impact-text">
          Continuity Connect strengthens primary care by closing the gap between visits where deterioration and non-adherence often begin.
        </div>
      </div>
    </div>
            </div>
        </div>
    </div>


   
  </div>
            @endsection