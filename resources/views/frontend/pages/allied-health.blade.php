@extends("frontend.layout.master")
@section("title", "Allied Health")
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
            <h3 class="main-titles">Our mission is to improve the quality of life of our participants</h3>
            <p>Continuity Care was born in 2017 from the idea of creating an environment where people living with a
              disability or health condition, and the clinicians that support them, were put first.</p>
            <p>Our 5 values are our blueprint and are the guiding star for our direction and decision making. They have
              made Better Rehab what it is today, and where it will be in the future.</p>
            <p>Through in-home, in-clinic and telehealth services, our passionate clinicians across Australia help people
              living with a disability, health condition, or medical condition.</p>
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



  <section class="hero-section padding-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Content -->
        <div class="col-lg-8">
          <h2 class="main-title">
            Empowering communities with quality home care support
          </h2>

          <p class="hero-text">
            Continuity Care has proudly provided Support at Home services to communities since 2020. Our care coordinators
            ensure easy access to high-quality home care support.
          </p>

          <p class="hero-text">
            Whether you need support at home, in the community, or assistance with daily living, our dedicated team
            delivers care where it suits you best.
          </p>

          <p class="hero-text">
            With services across multiple regions, we're ready to help you achieve your goals and improve your quality of
            life.
          </p>

          <!-- Contact Information -->
          <div class="contact-info">
            <div class="contact-item">
              <div class="icon-wrappers">
                <svg viewBox="0 0 24 24">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
              </div>
              <a href="mailto:info@continuitycare.com.au">info@continuitycare.com.au</a>
            </div>

            <div class="contact-item">
              <div class="icon-wrappers">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                </svg>
              </div>
              <a href="tel:1300555666">1300 555 666</a>
            </div>

            <div class="contact-item">
              <div class="icon-wrappers">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
              </div>
              <span>Brisbane QLD, Australia</span>
            </div>

            <div class="contact-item">
              <div class="icon-wrappers">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg>
              </div>
              <span>8:30 AM TO 5:00 PM</span>
            </div>
          </div>
        </div>

        <!-- Right Image -->
        <div class="col-lg-4">
          <div class="hero-image-container">
            <!-- Plus Pattern - Cyan -->
            <div class="plus-pattern plus-cyan">
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
              <div class="plus-icon cyan-plus"></div>
            </div>

            <!-- Plus Pattern - Yellow -->
            <div class="plus-pattern plus-yellow">
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
              <div class="plus-icon yellow-plus"></div>
            </div>

            <!-- Decorative Circle -->
            <div class="decorative-circle"></div>

            <!-- Hero Image - Replace with your actual image -->
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800"
              alt="Care workers at Continuity Care" class="hero-image">
          </div>
        </div>
      </div>
    </div>
  </section>



  <div class="nursing-care-section padding-section">
    <h2 class="main-titles">Community allied health services we provide in Brisbane</h2>
    <p>
      Comfort and convenience during therapy is our main concern. We offer sessions at-home, in-clinic, out-in-public, and
      over telehealth for our services.
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
        <h3>Occupational therapy</h3>
        <p class="nursing-feature-text">
          Helping people become independent in daily tasks and improve their quality of life.
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
        <h3>Speech pathology</h3>
        <p class="nursing-feature-text">
          Supporting participants in communication and swallowing to live life the way they want to.
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
        <h3>Physiotherapy</h3>
        <p class="nursing-feature-text">
          Enhancing movement and function, for people to get around their home and community on their terms.
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
        <h3>Exercise physiology</h3>
        <p class="nursing-feature-text">
          Exercise-based support for participants to improve their physical and mental capacity.
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
        <h3>Positive behaviour support</h3>
        <p class="nursing-feature-text">
          Supporting participants to increase their independence and improve their quality of life.
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
        <h3>Allied health assistants</h3>
        <p class="nursing-feature-text">
          Support from an allied health assistant to help implement your plan.
        </p>
      </div>
    </div>
  </div>


  <div class="services-area padding-section">
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


  <div class="custom-hero-section padding-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="main-titles">Begin your journey today</h2>
          <p>Get a head start on receiving support with our experienced clinicians by submitting our referral form. If
            you've got questions, our team is ready to assist you – simply use our enquiry form to get in touch.</p>
          <a href="tel:1800 012 273" class="default-btn active mt-">
            <div class="d-flex gap-10 align-content-center">
              <span>Book a Free Consultation</span>
              <img src="assets/images/right.svg" alt="right-white">
            </div>


          </a>
          <div class="mt-3">
            <img src="{{ asset('assets/images/skills/skill-1.png') }}" class="w-75 rounded" alt="">

          </div>
        </div>
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
      </div>
    </div>


  </div>

@endsection