@extends("frontend.layout.master")
@section("title", "Support Coordination | Continuity Care")
@section("content")
  <div class="services-area padding-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <div class="details-content">
            <img id="support-about-card-image" src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
              alt="services-details">
          </div>
        </div>
        <div class="col-md-6">
          <div class="details-content">
            <h3 id="support-about-main-title" class="main-titles">What is Support Coordination?</h3>
            <p id="support-about-description" align="justify">Support Coordination is a capacity-building service under
              the NDIS designed to help participants
              understand, implement, and maximise their NDIS plans. In Brisbane alone, thousands of participants rely on
              Support Coordinators to simplify the complexities of the system, connect with trusted service providers, and
              build long-term independence.</p>

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
      <div class="row g-4 mt-5" id="support-plan-wrapper">
        <!-- support_coordination_plan injected here -->
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
      <div class="row g-4" id="support-coordination-service-wrapper">
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

      <div class="row g-4" id="support-benefits-wrapper">

      </div>


    </div>
  </section>




  <!-- What is Section -->
  <section class="padding-section bg-light">
    <div class="container">


      <div class="row g-4 d-flex align-items-center">
        <div class="col-lg-5 mx-auto">
          <img id="Support-Image" src="{{ asset('assets/images/about/download.png') }}" class="rounded" alt="">
        </div>
        <div class="col-lg-7 mx-auto">
          <h2 id="Support-Title" class="main-titles">Why Choose Continuity Care for Support Coordination in Brisbane?</h2>

          <p id="Support-Description">
            With years of experience serving participants across Brisbane, Kuremara has become a trusted name in Support
            Coordination. Here's why families, carers, and participants continue to choose us:
          </p>

          <ul class="list-unstyled approach-list" id="Support-Points">
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
          <div class="accordion faq-wrapper" id="accordionExample">
            <!-- FAQs injected via API -->
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {

      window.FRONTEND_CONFIG = {
        DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
      };

      fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/support-coordination-service`)
        .then(res => {
          if (!res.ok) throw new Error('API failed');
          return res.json();
        })
        .then(data => {

          console.log('COMMUNITY API DATA', data);
          // about section
          const support_about = data.support_coordination_about;
          if (support_about) {
            document.getElementById('support-about-main-title').textContent = support_about.title ?? '';
            document.getElementById('support-about-description').textContent = support_about.description ?? '';
            const imgE2 = document.getElementById('support-about-card-image');
            if (imgE2) imgE2.src = support_about.image;


          }
          // benefit
          const benefit = data.support_coordination_benefit;
          if (benefit) {
            const imgEl = document.getElementById('Support-Image');
            const titleEl = document.getElementById('Support-Title');
            const descEl = document.getElementById('Support-Description');
            const listEl = document.getElementById('Support-Points');

            if (imgEl && benefit.image) imgEl.src = benefit.image;
            if (titleEl) titleEl.innerText = benefit.title;
            if (descEl) descEl.innerText = benefit.description;

            listEl.innerHTML = '';
            if (Array.isArray(benefit.points)) {
              benefit.points.forEach(point => {
                listEl.insertAdjacentHTML('beforeend', `
                                      <li >

                                        <span></span>${point}
                                      </li>
                                    `);
              });
            }
          }
          // support coordination plan
          const planWrapper = document.getElementById('support-plan-wrapper');

          if (planWrapper) {
            planWrapper.innerHTML = '';

            if (Array.isArray(data.support_coordination_plan)) {
              data.support_coordination_plan.forEach(plan => {
                planWrapper.insertAdjacentHTML('beforeend', `
                      <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                          <div class="icon-wrapper">
                            <img src="${plan.image ?? ''}" alt="${plan.title}" width="40">
                          </div>
                          <p>${plan.description ?? ''}</p>
                        </div>
                      </div>
                    `);
              });
            }
          }
          const coordinationWrapper = document.getElementById(
            'support-coordination-service-wrapper'
          );

          if (coordinationWrapper && Array.isArray(data.support_coordination_service)) {
            coordinationWrapper.innerHTML = '';

            data.support_coordination_service.forEach(service => {
              coordinationWrapper.insertAdjacentHTML('beforeend', `
          <div class="col-lg-4 col-md-6">
            <div class="why-card">

              <div class="why-icon">
                ${service.image
                  ? `<img src="${service.image}" alt="${service.title}" width="28" height="28">`
                  : `<i class="bi bi-heart"></i>`
                }
              </div>

              <h4>${service.title ?? ''}</h4>

              <p>
                ${service.description ?? ''}
              </p>

            </div>
          </div>
        `);
            });
          }

          // benefits
          const serviceWrapper = document.getElementById('support-benefits-wrapper');

          if (serviceWrapper && data.support_coordination_benefit) {

            const service = data.support_coordination_benefit;

            // build points list
            let pointsHTML = '';
            if (Array.isArray(service.points)) {
              pointsHTML = `
                <ul class="support-points">
                  ${service.points.map(point => `<li>${point}</li>`).join('')}
                </ul>
              `;
            }

            serviceWrapper.innerHTML = `
              <div class="col-md-4">
                <div class="support-card">
                  <img src="${service.image ?? ''}"
                       alt="${service.title ?? ''}"
                       class="support-card-img">

                  <div class="support-card-body">
                    <div class="support-card-icon">
                      <i class="bi bi-heart-pulse-fill"></i>
                    </div>

                    <h4>${service.title ?? ''}</h4>
                    <p>${service.description ?? ''}</p>

                    ${pointsHTML}
                  </div>
                </div>
              </div>
            `;
          }



          // faqs
          const faqWrapper = document.getElementById('accordionExample');

          if (faqWrapper) {
            faqWrapper.innerHTML = '';

            if (Array.isArray(data.faqs) && data.faqs.length) {
              data.faqs.forEach((faq, index) => {
                const id = `faq-${index}`;

                faqWrapper.insertAdjacentHTML('beforeend', `
                                            <div class="accordion-item">
                                              <h2 class="accordion-header">
                                                <button class="accordion-button ${index ? 'collapsed' : ''}"
                                                  type="button"
                                                  data-bs-toggle="collapse"
                                                  data-bs-target="#${id}">
                                                  ${faq.question}
                                                </button>
                                              </h2>
                                              <div id="${id}"
                                                class="accordion-collapse collapse ${index === 0 ? 'show' : ''}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  ${faq.answer}
                                                </div>
                                              </div>
                                            </div>
                                          `);
              });
            }
          }

        })
        .catch(err => console.error('COMMUNITY API ERROR:', err));
    });
  </script>
@endpush