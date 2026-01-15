@extends("frontend.layout.master")
@section("title", "Fully Management")
@section("content")

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
                        <h3 class="main-titles">All the benefits of self-management, expertly coordinated for you</h3>
                        <p>Continuity Care’s Fully Coordinated service gives you the freedom and control of self-management backed by the support and expertise of a dedicated care coordinator.</p>
                        <p>Stay in control while your service worker sourcing, scheduling and quality management are handled for you by experts who know your care plan inside out.</p>
                    </div>
                    <a href="" class="default-btn active mt-5">
                        <div class="d-flex gap-10 align-content-center">
                            <span>Book a Free Call</span>
                            <img src="assets/images/right.svg" alt="right-white">
                        </div>
                    </a>
                  
                </div>

            </div>
        </div>
    </div>
    <!-- End Case Study Area -->

   <div class="case-study-area pb-120 pt-80 pt-120 bg-light">
  <div class="container">
    <h1 class="main-titles text-center mb-5">
      How Fully Coordinated Works
    </h1>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="h-100 shadow-lg p-4 rounded bg-white text-center">
          <h4 class="mb-3">1. Consultation and setup</h4>
          <p class="mb-0">
            Your coordinator helps personalise your care plan with you.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="h-100 shadow-lg p-4 rounded bg-white text-center">
          <h4 class="mb-3">2. Sourcing and scheduling</h4>
          <p class="mb-0">
            Your preferred service workers are sourced and scheduled for you.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="h-100 shadow-lg p-4 rounded bg-white text-center">
          <h4 class="mb-3">3. Continuous support</h4>
          <p class="mb-0">
            Ongoing assistance, quality check-ins, oversight, and transparent reporting.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


  <section class="activities-section py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="main-titles">What's included?</h2>
        <p class="lead">Comprehensive support designed to give you peace of mind</p>
      </div>

      <div class="row g-4">
        <!-- Movement & Wellbeing -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-heart-pulse"></i>
              <h3 class="h5 mb-0 text-white">Compliance support</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li> The compliance and background checking of all your service providers</li>
                <li> Dedicated support to help you navigate the Support at Home program and maximise your funding</li>
                <li> Help with sourcing, organising and scheduling compliant service providers on your behalf</li>

              </ul>
            </div>
          </div>
        </div>

        <!-- Creative & Confidence -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-palette"></i>
              <h3 class="h5 mb-0 text-white">Care management</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li> A dedicated care partner</li>
                <li> Design and ongoing maintenance of your care plan and budget</li>
                <li> Periodic care plan and budget reviews</li>
                
              </ul>
            </div>
          </div>
        </div>

        <!-- Learning & Life Skills -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header  text-white d-flex align-items-center gap-2">
              <i class="bi bi-book"></i>
              <h3 class="h5 mb-0 text-white">Care coordination</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li> Care coordination support to help you navigate your Support at Home funding</li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Social Outings -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header text-white d-flex align-items-center gap-2">
              <i class="bi bi-balloon-heart"></i>
              <h3 class="h5 mb-0 text-white">Clinical support</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li> Access to our in-house team of clinical nursing professionals to oversee your care plan and any health concerns</li>
               <li></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Social Outings -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="activity-card h-100">
            <div class="activity-card-header text-white d-flex align-items-center gap-2">
              <i class="bi bi-heart"></i>
              <h3 class="h5 mb-0 text-white">Package management</h3>
            </div>
            <div class="activity-card-body">
              <ul class="list-unstyled approach-list">
                <li> Management of the financial components of your Support at Home funding, including the payment of invoices and reimbursements</li>
                <li> Ensure your services are paid on time with our daily payment runs</li>
               

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


<section class="activities-section py-5">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="main-titles text-center">Service Rates</h2>
<p class="text-center">Transparent pricing with no hidden fees. Find the best available options for your location.</p>
<table class="table table-bordered text-center">
<thead>
<tr>
<th>Service</th>
<th>Rate per Hour</th>
<th>Other Providers</th>
</tr>
</thead>
<tbody>
<tr>
<td>Registered Nurse</td>
<td><strong>$145</strong></td>
<td><strong>$224</strong></td>
</tr>
<tr>
<td>Occupational therapist</td>
<td><strong>$238</strong></td>
<td><strong>$290</strong></td>
</tr>
<tr>
<td>Physiotherapist</td>
<td><strong>$172</strong></td>
<td><strong>$302</strong></td>
</tr>
<tr>
<td>Podiatrist</td>
<td><strong>$125</strong></td>
<td><strong>$265</strong></td>
</tr>
<tr>
<td>Personal Care</td>
<td><strong>$86</strong></td>
<td><strong>$135</strong></td>
</tr>
<tr>
<td>Social support</td>
<td><strong>$79</strong></td>
<td><strong>$135</strong></td>
</tr>
<tr>
<td>House Cleaning</td>
<td><strong>$79</strong></td>
<td><strong>$135</strong></td>
</tr>
<tr>
<td>Shopping assistance</td>
<td><strong>$79</strong></td>
<td><strong>$135</strong></td>
</tr>
<tr>
<td>Gardening</td>
<td><strong>$92</strong></td>
<td><strong>$145</strong></td>
</tr>
</tbody>
</table>
<p>* Prices shown are a 60-day average as at November 1, 2025 and may vary slightly based on your location, service needs, and the rates you agree with your selected care workers.</p>
</div>
</div>
</div>
</section>
@endsection