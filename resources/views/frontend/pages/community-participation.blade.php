@extends("frontend.layout.master")
@section("title", "Community Participation Services | Continuity Care")
@section("content")

  <!-- Hero Section -->
  <section class="home-care-section padding-section">
    <div class="container position-relative">
      <h1 class="text-white">Social & Community Participation</h1>
      <p class="text-white">Build confidence, learn life skills, and feel meaningfully connected—your way, your pace.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mb-4">
        <a href="#contact" class="btn btn-custom-primary btn-lg">
          <i class="fas fa-envelope me-2"></i>Enquire Today
        </a>
        <a href="#contact" class="btn btn-custom-secondary btn-lg">
          <i class="fas fa-phone me-2"></i>Request a Call Back
        </a>
      </div>
    </div>
  </section>
  <!-- What is Section -->
  <section class="padding-section bg-light">
    <div class="container">


      <div class="row g-4 d-flex align-items-center">
        <div class="col-lg-5 mx-auto">
          <img id="community-about-image" src="{{ asset('assets/images/about/download.png') }}" class="rounded" alt="">
        </div>
        <div class="col-lg-7 mx-auto">
          <h2 class="main-titles" id="community-about-title">What Is Social & Community Participation?</h2>

          <p id="community-about-description" align="justify">
            Social and community participation refers to the active involvement of individuals within their communities
            and broader society. It can include things like volunteering, attending community events, joining clubs or
            organisations, taking part in classes, and building everyday connections with others.
          </p>
          <p>It’s not only beneficial for communities—it also supports individuals through:</p>
          <ul class="list-unstyled approach-list" id="community-about-list">
            <li><span></span> Stronger Social Support</li>
            <li><span></span> Improved Wellbeing and Confidence</li>
            <li><span></span> Greater Inclusion and Belonging</li>
            <li><span></span> New Skills and Routines that Make Everyday Life Easier</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Why It Matters -->
  <section class="why-matters-section padding-section">
    <div class="container">

      <!-- Heading -->
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <span class="section-label" id="community-benefit-sub-title">WHY IT MATTERS</span>
          <h2 class="main-titles" id="community-benefit-main-title">
            More than just <span>"something to do"</span>
          </h2>
          <p class="section-desc" id="community-benefit-side-title" align="justify">
            Social and community participation plays an important role in building inclusive,
            resilient communities—and making a powerful difference in everyday life.
          </p>
        </div>
      </div>

      <!-- Cards -->
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <img id="community-benefit-card-img-1" src="" alt="img">
            </div>
            <h4 id="community-benefit-card-title-1">Belonging</h4>
            <p id="community-benefit-card-desc-1" align="justify">
              Feeling accepted, included, and part of something bigger than yourself.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <img id="community-benefit-card-img-2" src="" alt="img">
            </div>
            <h4 id="community-benefit-card-title-2">Connection</h4>
            <p id="community-benefit-card-desc-2" align="justify">
              Building friendships, peer interaction, and genuine community support networks.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <img id="community-benefit-card-img-3" src="" alt="img">
            </div>
            <h4 id="community-benefit-card-title-3">Inclusivity</h4>
            <p id="community-benefit-card-desc-3" align="justify">
              Increasing access and participation for everyone in meaningful ways.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="why-icon">
              <img id="community-benefit-card-img-4" src="" alt="img">
              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
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
              </svg> --}}
            </div>
            <h4 id="community-benefit-card-title-4">Wellbeing</h4>
            <p id="community-benefit-card-desc-4" align="justify">
              Brighter days, better mood, and meaningful routines that support mental health.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
  {{-- approach section --}}
  <section class="approach-section padding-section">
    <div class="container">
      <div class="row align-items-center justify-content-evenly">

        <!-- Left Box -->
        <div class="col-lg-6">
          <div class="card-wrapper">
            <div class="content-card">
              <h2 class="text-white" id="community-approach-title">We love to brighten your day</h2>
              <p class="text-white" id="community-approach-sub-title">
                When you work with Continuity Care, we provide a wide
                range of NDIS-aligned activities that provide <strong>structure,
                  purpose, and joy.</strong>
              </p>
              <p class="mb-0 text-white" id="community-approach-description" align="justify">
                We customise activity programs to suit you, with the right
                level of support to participate in experiences you actually
                enjoy. Whether you want to be more social, more
                independent, or a bit of both.
              </p>
            </div>
          </div>
        </div>

        <!-- Right Content -->
        <div class="col-lg-6">

          <div class="approach-tag">OUR APPROACH</div>
          <h2 class="main-titles" id="community-approach-side-title">
            Empowerment through<br>Capacity Building
          </h2>

          <!-- TABS -->
          <ul class="nav approach-tabs mb-4" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-one" type="button">
                Capacity Building
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-two" type="button">
                Our Focus
              </button>
            </li>
          </ul>

          <!-- TAB CONTENT -->
          <div class="tab-content">

            <!-- TAB 1 -->
            <div class="tab-pane fade show active" id="tab-one">
              <ul class="list-unstyled approach-list" id="community-approach-list">
                <li><span></span> Independence and daily confidence</li>
                <li><span></span> Decision-making and planning</li>
                <li><span></span> Communication and social skills</li>
                <li><span></span> Routines that support wellbeing</li>
                <li><span></span> Community access and inclusion</li>
              </ul>
            </div>

            <!-- TAB 2 -->
            <div class="tab-pane fade" id="tab-two">
              <ul class="list-unstyled approach-list" id="community-approach-list2">
                <li><span></span> Strengthen everyday life skills in real community settings</li>
                <li><span></span> Build confidence to try new experiences at your own pace</li>
                <li><span></span> Develop routines that support your wellbeing and independence</li>
                <li><span></span> Connect with people, groups, and places that feel right for you</li>
              </ul>
            </div>

          </div>
        </div>


      </div>
    </div>
  </section>
  {{-- services section --}}
  <section class="case-section padding-section">
    <div class="bg_image-project-two">
      <div class="container text-white text-center">
        <h2 class="text-white">Building Life Skills in Everyday Settings</h2>
        <p class="text-white">Life skills are best learned where you’ll actually use them: in the community, at home, and
          in day-to-day activities.</p>
      </div>
    </div>

    <div class="container">
      <div class="case-accordion" id="services-container">

        <!-- TEMPLATE (hidden) -->
        <div class="case-item case-item-sm d-none" id="service-template">
          <div class="case-left service-left"></div>

          <div class="case-right">
            <img class="service-image" src="" alt="Service Image">
            <div class="case-content">
              <h2 class="service-number"></h2>
              <h3 class="service-title"></h3>
              <div class="service-description"></div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- Activities Section -->
  <section class="activities-section padding-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="main-titles">NDIS-Funded Activities We Can Support</h2>
        <p class="lead">
          Below are examples of activities we can support (based on your goals,
          preferences, and support needs):
        </p>
      </div>

      <div class="row g-4" id="community-support-container">

        <!-- TEMPLATE -->
        <div class="col-lg-4 col-md-6 col-12 d-none" id="community-support-template">
          <div class="activity-card h-100">
            <div class="activity-card-header text-white d-flex align-items-center gap-2">
              <i class="bi bi-star"></i>
              <h3 class="h5 mb-0 text-white support-title"></h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list support-points"></ul>
            </div>
          </div>
        </div>

        <!-- CTA Card -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="cta-activity-card h-100 d-flex flex-column position-relative overflow-hidden">
            <!-- Sparkles SVG (Right Side) -->
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="sparkles-svg opacity-25" aria-hidden="true">
              <path
                d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
              </path>
              <path d="M20 2v4"></path>
              <path d="M22 4h-4"></path>
              <circle cx="4" cy="20" r="2"></circle>
            </svg>

            <div
              class="activity-card-body d-flex flex-column justify-content-center align-items-center text-center p-4 z-1">
              <h3 class="text-white">Want something different?</h3>
              <p class="mb-3 text-white">We also create custom activities and support special occasions like concerts,
                theme parks, and holidays.</p>
              <a href="{{ route('contact-us') }}" class="btn btn-outline-light rounded-pill px-4">Contact Us</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  {{-- custom activity section --}}
  <section class="custom-hero-section padding-section">
    <div class="container">
      <div class="row align-items-center">

        <!-- LEFT: Text + Buttons -->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h2 class="main-titles" id="community-activity-title">
            Custom Activities & Special Occasions
          </h2>

          <p class="mb-4" id="community-activity-description">
            If you have a specific experience in mind, we can tailor supports for things like:
          </p>

          {{-- <div class="row g-3">
            <div class="col-6">
              <div class="activity-button">Theme Parks & Zoos</div>
            </div>
            <div class="col-6">
              <div class="activity-button">Music & Concerts</div>
            </div>
            <div class="col-6">
              <div class="activity-button">Fishing & Camping</div>
            </div>
            <div class="col-6">
              <div class="activity-button">Holidays & Getaways</div>
            </div>
          </div> --}}

        </div>


        <!-- RIGHT: Image with Overlay Text -->
        <div class="col-lg-6">
          <div class="overlay-card">
            <img id="community-activity-image" src="{{ asset('assets/images/skills/custom-skills.png') }}"
              alt="Custom NDIS Activity">

            <div class="overlay-content">
              <h3 class="text-white" id="community-activity-side-title">
                Your Vision, Supported.
              </h3>
              <p class="text-white" id="community-activity-sub-title">
                From museums to adventure trips, we make your special requests possible.
              </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  {{-- planning --}}
  <div class="container  padding-section">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <img id="community-planning-image" src="{{ asset('assets/images/skills/gateway.png') }}"
          alt="Planning your getaway" class="hero-image" />

      </div>
      <!-- Text Content Column -->
      <div class="col-lg-6">
        <div class="content-card">

          <h2 class="main-titles" id="community-planning-title">
            We take the frustration out of planning your getaway
          </h2>

          <p id="community-planning-description">
            Everyone deserves a break. If you or a family member has a disability,
            Continuity Care can help coordinate supports for a range of options:
          </p>

          <!-- Dynamic Points -->
          <div id="community-planning-points"></div>

          <p id="community-planning-sub-title">
            We guide you through the planning process and coordinate what's needed
            to support goals and comfort—so the experience feels organised,
            supported, and enjoyable.
          </p>

          <div class="note">
            <em id="community-planning-note"></em>
          </div>

        </div>

      </div>

      <!-- Image Column -->

    </div>
  </div>
  <!-- How It Works -->
  <section class="section-care">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="main-titles" id="who-work-main-title">How Our Support Works</h2>
          <p class="section-subtitle" id="who-work-sub-title">Simple, personalised, and built around you</p>
        </div>
      </div>

      <div class="row g-4 justify-content-center position-relative">
        <div class="step-connector"></div> <!-- Add this line -->
        <!-- Step 1 -->
        <div class="col-lg-3 col-md-6 text-center">
          <div class="d-flex flex-column align-items-center mb-3">
            <div class="step-circle d-flex align-items-center justify-content-center">
              1
            </div>
            <h4 class="mt-3 mb-2" id="who-work-card-title-1">We learn what matters to you</h4>
            <p id="who-work-card-desc-1" class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
              Your interests, preferences, goals, and the type of community participation you want.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-lg-3 col-md-6 text-center">
          <div class="d-flex flex-column align-items-center mb-3">
            <div class="step-circle d-flex align-items-center justify-content-center">
              2
            </div>
            <h4 class="mt-3 mb-2" id="who-work-card-title-2">We match the right support</h4>
            <p id="who-work-card-desc-2" class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
              We consider your needs, communication style, comfort levels, and activities you enjoy.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-lg-3 col-md-6 text-center">
          <div class="d-flex flex-column align-items-center mb-3">
            <div class="step-circle d-flex align-items-center justify-content-center">
              3
            </div>
            <h4 class="mt-3 mb-2" id="who-work-card-title-3">We build a tailored activity program</h4>
            <p id="who-work-card-desc-3" class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
              Structure where it helps, flexibility where you need it—designed to support progress.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-lg-3 col-md-6 text-center">
          <div class="d-flex flex-column align-items-center mb-3">
            <div class="step-circle d-flex align-items-center justify-content-center">
              4
            </div>
            <h4 class="mt-3 mb-2" id="who-work-card-title-4">We support, encourage, and grow confidence over time</h4>
            <p id="who-work-card-desc-4" class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
              You can build independence at your pace, with consistent support.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- faq --}}
  <div class="container  padding-section">
    <div class="row g-4">
      <!-- Left Side -->
      <div class="col-lg-6">
        <div class="left-content">

          <h2 class="main-titles">Funding Information and Eligibility</h2>
          <h3>NDIS funding (when Social & Community Participation may be covered)</h3>
          <p align="justify">
            Explore Community Participation may be funded through your NDIS plan when it aligns with your goals and
            support needs. Funding depends on your plan budgets, plan management type, and whether the support is
            considered appropriate for your situation.
          </p>


        </div>
      </div>

      <div class="col-lg-6">
        <div class="accordion faq-wrapper" id="faqAccordion">

          <!-- TEMPLATE -->
          <div class="accordion-item d-none" id="faq-template">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed faq-question" type="button" data-bs-toggle="collapse">
              </button>
            </h2>
            <div class="accordion-collapse collapse">
              <div class="accordion-body faq-answer"></div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <div class=" padding-section">

    <div class="container">

      <h2 class="main-titles text-center">Self-Funded and Fee-for-Service Options</h2>
      <p class="text-center">
        We offer flexible self-funded and fee-for-service options for those who want quick access to supports or have
        specific goal-focused needs.
      </p>
      <div class="row">
        <div class="col-lg-6">
          <!-- Left Card: Self-Funded -->
          <div class="card-funded">
            <div class="card-headers">
              <div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-user-check" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:739:24" data-component-name="UserCheck">
                  <path d="m16 11 2 2 4-4"></path>
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                </svg></div>

            </div>
            <h3 class="card-titles mb-4">Self-Funded</h3>
            <p>
              Pay for services with your own money for maximum flexibility and one-off requests.
            </p>
            <ul class="list-unstyled approach-list">
              <li><span></span> One-off request (event, appointment)</li>
              <li><span></span> Funding doesn’t cover what you need</li>
              <li><span></span> Waiting for funding approval</li>
              <li><span></span> Quick access to supports</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Right Card: Fee-for-Service -->
          <div class="card-funded right">
            <div class="card-headers">
              <div class="card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-chart-no-axes-column-increasing" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:762:24" data-component-name="BarChart">
                  <path d="M5 21v-6"></path>
                  <path d="M12 21V9"></path>
                  <path d="M19 21V3"></path>
                </svg></div>
            </div>
            <h3 class="card-titles mb-4">Fee-for-Service</h3>

            <p>
              Structured packages for people who want goal-focused, consistent support sessions.
            </p>
            <ul class="list-unstyled approach-list">
              <li><span></span> Capacity building and life skills</li>
              <li><span></span> Confidence and independence</li>
              <li><span></span> Social participation</li>
              <li><span></span> Tailored weekly supports</li>
            </ul>
          </div>
        </div>



      </div>
    </div>

  </div>
  <!-- Final CTA -->
  <section class="new-cta-section" id="contact">
    <div class="container">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-white">Ready to Begin Your Journey?</h2>
        <p class="text-white fs-5 mb-4">Let’s build a plan that helps you connect, grow, and thrive.</p>

        <div class="d-flex gap-3 justify-content-center flex-wrap mb-4">
          <button class="btn btn-custom-primary btn-lg">
            <i class="fas fa-envelope me-2"></i> Enquire Today
          </button>
          <button class="btn btn-custom-secondary btn-lg">
            <i class="fas fa-phone me-2"></i> Request a Call Back
          </button>
        </div>

        <p class="mt-4 text-white">
          <i class="fas fa-check-circle me-2"></i> Friendly, local team
          <span class="mx-2">•</span>
          <i class="fas fa-check-circle me-2"></i> No obligation
          <span class="mx-2">•</span>
          <i class="fas fa-check-circle me-2"></i> We explain all NDIS options clearly
        </p>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.case-left').forEach(item => {
        item.addEventListener('click', () => {
          document.querySelectorAll('.case-item').forEach(i => i.classList.remove('active'));
          item.parentElement.classList.add('active');
        });
      });
    });


    document.addEventListener('DOMContentLoaded', () => {
      window.FRONTEND_CONFIG = {
        DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
      };

      fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/community-participation-service`)
        .then(res => res.json())
        .then(data => {

          console.log('API DATA ', data);

          const community_about = data.community_about;
          if (community_about) {
            document.getElementById('community-about-title').textContent = community_about.main_title ?? '';
            document.getElementById('community-about-description').textContent = community_about.description_1 ?? '';

            const pointsContainer = document.getElementById('community-about-list');

            if (pointsContainer && Array.isArray(community_about.points)) {
              pointsContainer.innerHTML = community_about.points
                .map(point => `
                                                                    <li><span></span>${point}</li>
                                                                `)
                .join('');
            }
            const img = document.getElementById('community-about-image');
            if (img && community_about.image) img.src = community_about.image;
          }
          const communityBenefit = data.communityBenefit;
          if (communityBenefit) {
            document.getElementById('community-benefit-sub-title').textContent = communityBenefit.sub_title ?? '';
            document.getElementById('community-benefit-main-title').textContent = communityBenefit.main_title ?? '';
            document.getElementById('community-benefit-side-title').textContent = communityBenefit.side_title ?? '';


            communityBenefit.cards?.forEach((card, index) => {
              const i = index + 1;

              document.getElementById(`community-benefit-card-title-${i}`).textContent = card.title ?? '';
              document.getElementById(`community-benefit-card-desc-${i}`).textContent = card.main_title ?? '';

              const img = document.getElementById(`community-benefit-card-img-${i}`);
              if (img && card.image) img.src = card.image;
            });
          }



          const communityApproachSection = data.communityApproachSection;
          if (communityApproachSection) {
            document.getElementById('community-approach-title').textContent = communityApproachSection.main_title ?? '';
            document.getElementById('community-approach-sub-title').textContent = communityApproachSection.sub_title ?? '';
            document.getElementById('community-approach-description').textContent = communityApproachSection.description_1 ?? '';
            document.getElementById('community-approach-side-title').textContent = communityApproachSection.side_title ?? '';

            const pointsContainer = document.getElementById('community-approach-list');

            if (pointsContainer && Array.isArray(communityApproachSection.points)) {
              pointsContainer.innerHTML = communityApproachSection.points
                .map(point => `
                                                                    <li><span></span>${point}</li>
                                                                `)
                .join('');
            }
            const pointsContainer2 = document.getElementById('community-approach-list2');

            if (pointsContainer2 && Array.isArray(communityApproachSection.points_2)) {
              pointsContainer2.innerHTML = communityApproachSection.points_2
                .map(point_2 => `
                                                                    <li><span></span>${point_2}</li>
                                                                `)
                .join('');
            }

          }

          const communityService = data.communityService;

          const servicesContainer = document.getElementById('services-container');
          const serviceTemplate = document.getElementById('service-template');

          if (
            Array.isArray(communityService) &&
            communityService.length > 0 &&
            servicesContainer &&
            serviceTemplate
          ) {
            // Remove previously injected items (keep template)
            servicesContainer
              .querySelectorAll('.case-item:not(#service-template)')
              .forEach(el => el.remove());

            communityService.forEach((service, index) => {
              const clone = serviceTemplate.cloneNode(true);

              clone.classList.remove('d-none');
              clone.removeAttribute('id');

              // Number formatting (01, 02, 03...)
              const number = String(index + 1).padStart(2, '0');

              clone.querySelector('.service-left').textContent =
                `${number}. ${service.title ?? ''}`;

              clone.querySelector('.service-number').textContent = `${number}.`;
              clone.querySelector('.service-title').textContent = service.title ?? '';
              clone.querySelector('.service-description').innerHTML =
                service.description ?? '';

              const imageEl = clone.querySelector('.service-image');
              imageEl.src = service.image ?? '';
              imageEl.alt = service.title ?? 'Service Image';

              // First item active
              if (index === 0) {
                clone.classList.add('active');
              }

              servicesContainer.appendChild(clone);
            });
          }


          const communitySupport = data.communitySupport;

          const container = document.getElementById('community-support-container');
          const template = document.getElementById('community-support-template');

          if (
            Array.isArray(communitySupport) &&
            communitySupport.length > 0 &&
            container &&
            template
          ) {
            // Remove old cards except template & CTA
            container
              .querySelectorAll(
                '.col-lg-4:not(#community-support-template):not(.cta-activity-card)'
              )
              .forEach(el => {
                if (!el.querySelector('.cta-activity-card')) {
                  el.remove();
                }
              });

            communitySupport.forEach(service => {
              const clone = template.cloneNode(true);

              clone.classList.remove('d-none');
              clone.removeAttribute('id');

              // Title
              clone.querySelector('.support-title').textContent =
                service.title ?? '';

              // Points
              const pointsList = clone.querySelector('.support-points');
              pointsList.innerHTML = '';

              if (Array.isArray(service.points)) {
                service.points.forEach(point => {
                  const li = document.createElement('li');
                  li.innerHTML = `<span></span> ${point}`;
                  pointsList.appendChild(li);
                });
              }

              container.insertBefore(clone, container.lastElementChild);
            });
          }



          const communityActivity = data.communityActivity;

          if (communityActivity) {
            const title = document.getElementById('community-activity-title');
            const subTitle = document.getElementById('community-activity-sub-title');
            const description = document.getElementById('community-activity-description');
            const sideTitle = document.getElementById('community-activity-side-title');
            const image = document.getElementById('community-activity-image');

            if (title) title.textContent = communityActivity.main_title ?? '';
            if (subTitle) subTitle.textContent = communityActivity.sub_title ?? '';
            if (description) description.textContent = communityActivity.description_1 ?? '';
            if (sideTitle) sideTitle.textContent = communityActivity.side_title ?? '';

            if (image && communityActivity.image) {
              image.src = communityActivity.image;
            }
          }
          const communityPlanning = data.communityPlanning;

          if (communityPlanning) {
            const title = document.getElementById('community-planning-title');
            const subTitle = document.getElementById('community-planning-sub-title');
            const description = document.getElementById('community-planning-description');
            const note = document.getElementById('community-planning-note');
            const image = document.getElementById('community-planning-image');
            const pointsContainer = document.getElementById('community-planning-points');

            if (title) title.textContent = communityPlanning.main_title ?? '';
            if (subTitle) subTitle.textContent = communityPlanning.sub_title ?? '';
            if (description) description.textContent = communityPlanning.description_1 ?? '';
            if (note) note.textContent = communityPlanning.note ?? '';

            if (image && communityPlanning.image) {
              image.src = communityPlanning.image;
            }

            // Points
            if (pointsContainer && Array.isArray(communityPlanning.points)) {
              pointsContainer.innerHTML = '';

              communityPlanning.points.forEach(point => {
                const item = document.createElement('div');
                item.className = 'feature-item';
                item.innerHTML = `
                      <span class="feature-icons">✔</span>
                      <span class="feature-text">${point}</span>
                    `;
                pointsContainer.appendChild(item);
              });
            }
          }

          const communityWork = data.communityWork;
          if (communityWork) {
            document.getElementById('who-work-sub-title').textContent = communityWork.sub_title ?? '';
            document.getElementById('who-work-main-title').textContent = communityWork.main_title ?? '';


            communityWork.cards?.forEach((card, index) => {
              const i = index + 1;

              document.getElementById(`who-work-card-title-${i}`).textContent = card.title ?? '';
              document.getElementById(`who-work-card-desc-${i}`).textContent = card.main_title ?? '';


            });
          }


          const communityEligiblilityFaq = data.communityEligiblilityFaq;

          const faqContainer = document.getElementById('faqAccordion');
          const faqTemplate = document.getElementById('faq-template');

          if (
            Array.isArray(communityEligiblilityFaq) &&
            communityEligiblilityFaq.length > 0 &&
            faqContainer &&
            faqTemplate
          ) {

            faqContainer
              .querySelectorAll('.accordion-item:not(#faq-template)')
              .forEach(el => el.remove());

            communityEligiblilityFaq.forEach((item, index) => {
              const clone = faqTemplate.cloneNode(true);
              const collapseId = `faq-collapse-${index}`;

              clone.classList.remove('d-none');
              clone.removeAttribute('id');

              // Question
              const questionBtn = clone.querySelector('.faq-question');
              questionBtn.textContent = item.question ?? '';
              questionBtn.setAttribute('data-bs-target', `#${collapseId}`);
              questionBtn.setAttribute('aria-controls', collapseId);

              // Answer
              const collapse = clone.querySelector('.accordion-collapse');
              collapse.id = collapseId;
              collapse.setAttribute('data-bs-parent', '#faqAccordion');

              clone.querySelector('.faq-answer').innerHTML = item.answer ?? '';

              // First item open
              if (index === 0) {
                questionBtn.classList.remove('collapsed');
                questionBtn.setAttribute('aria-expanded', 'true');
                collapse.classList.add('show');
              }

              faqContainer.appendChild(clone);
            });
          }



        })
        .catch(err => console.error('API ERROR ', err));

    });



  </script>
@endpush