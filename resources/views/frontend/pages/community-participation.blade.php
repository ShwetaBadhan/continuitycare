@extends("frontend.layout.master")
@section("title", "In Home Care Services | Continuity Care")
@section("content")

  <!-- Hero Section -->
  <section class="home-care-section">
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
  <section class="section-padding bg-light">
    <div class="container">


      <div class="row g-4 d-flex align-items-center">
        <div class="col-lg-5 mx-auto">
          <img src="{{ asset('assets/images/about/download.png') }}" class="rounded" alt="">
        </div>
        <div class="col-lg-7 mx-auto">
          <h2 class="main-titles">What Is Social & Community Participation?</h2>

          <p>
            Social and community participation refers to the active involvement of individuals within their communities
            and broader society. It can include things like volunteering, attending community events, joining clubs or
            organisations, taking part in classes, and building everyday connections with others.
          </p>
          <p>It’s not only beneficial for communities—it also supports individuals through:</p>
          <ul class="list-unstyled approach-list">
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
  <section class="why-matters-section">
    <div class="container">

      <!-- Heading -->
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <span class="section-label">WHY IT MATTERS</span>
          <h2 class="main-titles">
            More than just <span>"something to do"</span>
          </h2>
          <p class="section-desc">
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
            <h4>Belonging</h4>
            <p>
              Feeling accepted, included, and part of something bigger than yourself.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
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
            <h4>Connection</h4>
            <p>
              Building friendships, peer interaction, and genuine community support networks.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
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
            <h4>Inclusivity</h4>
            <p>
              Increasing access and participation for everyone in meaningful ways.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
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
            <h4>Wellbeing</h4>
            <p>
              Brighter days, better mood, and meaningful routines that support mental health.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="approach-section">
    <div class="container">
      <div class="row align-items-center g-5">

        <!-- Left Box -->
        <div class="col-lg-6">
          <div class="card-wrapper">
            <div class="content-card">
              <h2 class="text-white">We love to brighten your day</h2>
              <p class="text-white">
                When you work with Continuity Care, we provide a wide
                range of NDIS-aligned activities that provide <strong>structure,
                  purpose, and joy.</strong>
              </p>
              <p class="mb-0 text-white">
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
          <h2 class="main-titles">
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
              <ul class="list-unstyled approach-list">
                <li><span></span> Independence and daily confidence</li>
                <li><span></span> Decision-making and planning</li>
                <li><span></span> Communication and social skills</li>
                <li><span></span> Routines that support wellbeing</li>
                <li><span></span> Community access and inclusion</li>
              </ul>
            </div>

            <!-- TAB 2 -->
            <div class="tab-pane fade" id="tab-two">
              <ul class="list-unstyled approach-list">
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
  <section class="case-section">
    <div class="bg_image-project-two">
      <div class="container text-white text-center">
        <h2 class="text-white">Building Life Skills in Everyday Settings</h2>
        <p class="text-white">Life skills are best learned where you’ll actually use them: in the community, at home, and
          in day-to-day activities.</p>
      </div>
    </div>

    <div class="container">
      <div class="case-accordion">
        <!-- ITEM -->
        <div class="case-item active">
          <div class="case-left">01. Social confidence & communication</div>
          <div class="case-right">
            <img src="{{ asset('assets/images/skills/skill-1.png') }}">
            <div class="case-content">
              <h2>01.</h2>
              <h3>Social confidence & communication</h3>
              <p>starting conversations, joining groups, feeling comfortable in social spaces</p>

            </div>
          </div>
        </div>

        <div class="case-item">
          <div class="case-left">02. Planning & Decision-Making</div>
          <div class="case-right">
            <img src="{{ asset('assets/images/skills/skill-2.png') }}">
            <div class="case-content">
              <h2>02.</h2>
              <h3>Planning & Decision-Making</h3>
              <p>Choosing activities, organising outings, building weekly routines.</p>

            </div>
          </div>
        </div>

        <div class="case-item">
          <div class="case-left">03. Independence Skills</div>
          <div class="case-right">
            <img src="{{ asset('assets/images/skills/skill-3.png') }}">
            <div class="case-content">
              <h2>03.</h2>
              <h3>Independence Skills</h3>
              <p>Using community spaces and building confidence with less support over time.</p>

            </div>
          </div>
        </div>
        <div class="case-item">
          <div class="case-left">04. Improved Learning</div>
          <div class="case-right">
            <img src="{{ asset('assets/images/skills/skill-5.png') }}">
            <div class="case-content">
              <h2>04.</h2>
              <h3>Improved Learning</h3>
              <p>Classes, Hobbies, Workshops, Creative Activities, Skill-based Community Programs.</p>

            </div>
          </div>
        </div>
        <div class="case-item">
          <div class="case-left">05. Everyday Functional Skills</div>
          <div class="case-right">
            <img src="{{ asset('assets/images/skills/skill-6.png') }}">
            <div class="case-content">
              <h2>05.</h2>
              <h3>Everyday Functional Skills</h3>
              <p>Time management, following steps, building consistency, and practical routines.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Activities Section -->
  <section class="activities-section py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="main-titles">NDIS-Funded Activities We Can Support</h2>
        <p class="lead">Below are examples of activities we can support (based on your goals, preferences, and support
          needs):</p>
      </div>

      <div class="row g-4">
        <!-- Movement & Wellbeing -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-heart-pulse"></i>
              <h3 class="h5 mb-0 text-white">Movement & Wellbeing</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li><span></span> Swimming & Aquatics</li>
                <li><span></span> Exercise & Gym</li>
                <li><span></span> Yoga & Meditation</li>
                <li><span></span> Sports Activities</li>
                <li><span></span> Bushwalking & Nature</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Creative & Confidence -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-palette"></i>
              <h3 class="h5 mb-0 text-white">Creative & Confidence</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li><span></span> Dancing & Drama</li>
                <li><span></span> Visual Arts</li>
                <li><span></span> Arts & Crafts</li>
                <li><span></span> Music & Sound</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Learning & Life Skills -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-book"></i>
              <h3 class="h5 mb-0 text-white">Learning & Life Skills</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li><span></span> Cooking & Baking</li>
                <li><span></span> Gardening</li>
                <li><span></span> Literacy & Numeracy</li>
                <li><span></span> Computers & Technology</li>
                <li><span></span> Library & Reading</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Social Outings -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header text-white d-flex align-items-center gap-2">
              <i class="bi bi-balloon-heart"></i>
              <h3 class="h5 mb-0 text-white">Social Outings</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li><span></span> Barbecues & Picnics</li>
                <li><span></span> Bowling</li>
                <li><span></span> Movies & Theatre</li>
                <li><span></span> Community Events</li>
                <li><span></span> Volunteering</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Social Outings -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header text-white d-flex align-items-center gap-2">
              <i class="bi bi-heart"></i>
              <h3 class="h5 mb-0 text-white">Self-Care and Personal Wellbeing</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li><span></span> Self-care activities</li>
                <li><span></span> Wellbeing routines</li>
                <li><span></span> Leisure-based outing</li>
                <li><span></span> Personal development</li>
                <li><span></span> Relaxation strategies</li>

              </ul>
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
  <section class="custom-hero-section">
    <div class="container">
      <div class="row align-items-center">

        <!-- LEFT: Text + Buttons -->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h2 class="main-titles">Custom Activities & Special Occasions</h2>
          <p class="mb-4">
            If you have a specific experience in mind, we can tailor supports for things like:
          </p>

          <div class="row g-3">
            <div class="col-6">
              <div class="activity-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-ticket text-accent" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:394:18" data-component-name="item.icon">
                  <path
                    d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z">
                  </path>
                  <path d="M13 5v2"></path>
                  <path d="M13 17v2"></path>
                  <path d="M13 11v2"></path>
                </svg>
                Theme Parks & Zoos
              </div>
            </div>
            <div class="col-6">
              <div class="activity-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-music text-accent" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:394:18" data-component-name="item.icon">
                  <path d="M9 18V5l12-2v13"></path>
                  <circle cx="6" cy="18" r="3"></circle>
                  <circle cx="18" cy="16" r="3"></circle>
                </svg>
                Music & Concerts
              </div>
            </div>
            <div class="col-6">
              <div class="activity-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-compass text-accent" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:394:18" data-component-name="item.icon">
                  <path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z">
                  </path>
                  <circle cx="12" cy="12" r="10"></circle>
                </svg>
                Fishing & Camping
              </div>
            </div>
            <div class="col-6">
              <div class="activity-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-map-pin text-accent" aria-hidden="true"
                  data-replit-metadata="client/src/pages/home.tsx:394:18" data-component-name="item.icon">
                  <path
                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                  </path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                Holidays & Getaways
              </div>
            </div>
          </div>
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
  <div class="container section">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/skills/gateway.png') }}"
          alt="Person in wheelchair enjoying beach with palm trees" class="hero-image">
      </div>
      <!-- Text Content Column -->
      <div class="col-lg-6">
        <div class="content-card">

          <h2 class="main-titles">We take the frustration out of planning your getaway</h2>
          <p>
            Everyone deserves a break. If you or a family member has a disability, Continuity Care can help coordinate
            supports for a range of options:
          </p>

          <!-- List Items -->
          <div class="feature-item">
            <span class="feature-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-coffee" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:349:22"
                data-component-name="item.icon">
                <path d="M10 2v2"></path>
                <path d="M14 2v2"></path>
                <path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"></path>
                <path d="M6 2v2"></path>
              </svg></span>
            <span class="feature-text">Respite</span>
          </div>

          <div class="feature-item">
            <span class="feature-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-shield-check" aria-hidden="true"
                data-replit-metadata="client/src/pages/home.tsx:349:22" data-component-name="item.icon">
                <path
                  d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                </path>
                <path d="m9 12 2 2 4-4"></path>
              </svg></span>
            <span class="feature-text">Short-term Accommodation (STA)</span>
          </div>

          <div class="feature-item">
            <span class="feature-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-plane" aria-hidden="true" data-replit-metadata="client/src/pages/home.tsx:349:22"
                data-component-name="item.icon">
                <path
                  d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                </path>
              </svg></span>
            <span class="feature-text">Holiday or Weekend Getaway</span>
          </div>

          <p>
            We guide you through the planning process and coordinate what's needed to support goals and comfort—so the
            experience feels organised, supported, and enjoyable.
          </p>

          <div class="note">
            <em>Note: funding for travel-related supports can vary depending on your plan and goals. We’ll help you
              understand what options may apply.</em>
          </div>
        </div>
      </div>

      <!-- Image Column -->

    </div>
  </div>
  <!-- How It Works -->
  <section class="section-padding">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="main-titles">How Our Support Works</h2>
          <p class="section-subtitle">Simple, personalised, and built around you</p>
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
            <h4 class="mt-3 mb-2">We learn what matters to you</h4>
            <p class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
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
            <h4 class="mt-3 mb-2">We match the right support</h4>
            <p class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
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
            <h4 class="mt-3 mb-2">We build a tailored activity program</h4>
            <p class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
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
            <h4 class="mt-3 mb-2">We support, encourage, and grow confidence over time</h4>
            <p class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
              You can build independence at your pace, with consistent support.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container section">
    <div class="row g-4">
      <!-- Left Side -->
      <div class="col-lg-6">
        <div class="left-content">

          <h2 class="main-titles">Funding Information and Eligibility</h2>
          <h3>NDIS funding (when Social & Community Participation may be covered)</h3>
          <p>
            Explore Community Participation may be funded through your NDIS plan when it aligns with your goals and
            support needs. Funding depends on your plan budgets, plan management type, and whether the support is
            considered appropriate for your situation.
          </p>


        </div>
      </div>

      <!-- Right Side - Accordion -->
      <div class="col-lg-6">
        <div class="accordion faq-wrapper" id="accordionExample" data-cues="slideInUp" data-duration="900">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                NDIS Funding Support Categories
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Explore Community Participation may be funded through your NDIS plan when it aligns with your goals and
                  support needs. Funding depends on your plan budgets, plan management type, and whether the support is
                  considered appropriate for your situation.</p>
                <p>Explore can be linked to the following Support Categories in your plan:</p>
                <ul class="list-unstyled approach-list">
                  <li><span></span> Assistance with Daily Life (Core)</li>
                  <li><span></span> Increased Social and Community Participation (Capacity Building)</li>
                  <li><span></span> Improved Daily Living Skills (Capacity Building)</li>
                  <li><span></span> Improved Learning (Capacity Building)</li>
                </ul>
                <p>If you’re unsure what your plan includes, we can help you understand how Explore may fit with your
                  goals and budgets, and work alongside your Support Coordinator or Plan Manager where needed.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Eligibility & NDIS Access
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>NDIS eligibility is assessed by the NDIA. In general, to access the NDIS you typically need to:</p>
                <ul class="list-unstyled approach-list">
                  <li><span></span> Be under 65 at the time you apply</li>
                  <li><span></span> Live in Australia and meet residency requirements</li>
                  <li><span></span> Have a permanent disability that substantially impacts daily life</li>

                </ul>
                <p>If you’re not eligible for the NDIS, you can still access supports through self-funded or
                  fee-for-service options.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Plan management and pricing (important to know)
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Your plan management type can affect how supports are priced and paid:</p>
                <ul class="list-unstyled approach-list">
                  <li><span></span> NDIA-managed or plan-managed: providers follow NDIS pricing arrangements and price
                    limits</li>
                  <li><span></span> Self-managed: you generally have more flexibility in provider choice and how supports
                    are paid</li>


                </ul>
                <p>If you don’t know how your plan is managed, we can talk you through it and explain the easiest way to
                  get started.</p>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <div class="section">

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
  </script>
@endpush