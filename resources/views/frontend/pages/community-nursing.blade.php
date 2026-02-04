@extends("frontend.layout.master")
@section("title", "Community Nursing")
@section("content")
  {{-- about section --}}
  <div class="services-area padding-section">
    <div class="container">
      <div class="row d-flex align-items-center">

        <div class="col-md-6">
          <div class="details-content">
            <img id="communityImage" src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
              alt="services-details">
          </div>
        </div>

        <div class="col-md-6">
          <div class="details-content">
            <h3 class="main-titles" id="communityTitle">
              Enabling the Transformation of Community Nursing
            </h3>

            <p id="communityDescription">
              Continuity Connect supports the delivery of high-quality care within the comfort of home,
              connecting caregivers, patients, and families for better health outcomes.
            </p>

            <ul id="communityPoints" class="mt-3"></ul>
          </div>

          <a href="tel:1800012273" class="default-btn active mt-5">
            <div class="d-flex gap-10 align-content-center">
              <span>Book a Free Consultation</span>
              <img src="assets/images/right.svg" alt="right-white">
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  {{-- services --}}
  <div class="nursing-care-section padding-section">
    <h2 class="main-titles" id="communityServiceHeading">
      Comprehensive Care at Home
    </h2>

    <p id="communityServiceIntro">
      Our cloud-based platform connects every stakeholder to improve overall health,
      well-being, and quality of life.
    </p>

    <div class="care-features-grid" id="communityServiceGrid">
      <!-- Services will be injected here -->
    </div>
  </div>
  {{-- nursing section --}}
  <div class="nursing-section">
    <div class="container">
      <div class="row d-flex align-items-center">

        <!-- LEFT CONTENT -->
        <div class="col-lg-6">
          <div class="nursing-content">

            <span class="nursing-tag" id="activityTag">
              New Aged Care Act Aligned
            </span>

            <h2 class="rights-header" id="activityTitle">
              Rights-Based Community Nursing
            </h2>

            <p class="rights-desc" id="activityDescription">
              Australia’s new Aged Care Act places the rights of older people at the centre of the aged care system.
            </p>

            <ul class="rights-benefits" id="activityPoints">

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Safer care at home through early detection</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Choice, control and participation</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Reduced risk of harm</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Better transparency for families</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Evidence-informed decision-making</span>
              </li>
            </ul>

          </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-6">
          <div class="impact-container">

            <h3 class="impact-title" id="activitySideTitle">
              Why this matters in Australia
            </h3>

            <!-- Benefits List -->
            <ul class="rights-benefits">
              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Safer care at home through early detection</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Choice, control and participation</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Reduced risk of harm</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Better transparency for families</span>
              </li>

              <li class="rights-benefit">
                <span class="benefit-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </span>
                <span class="benefit-text">Evidence-informed decision-making</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>




  <div class="services-area padding-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12">

          <h2 class="main-titles text-center">FAQs</h2>
          <h4 class="text-center">maintain optimal care, enable early intervention, minimise hospital presentations</h4>
          <div class="accordion faq-wrapper" id="accordionExample">
            <!-- FAQs from API -->
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

      fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/community-nursing-service`)
        .then(res => {
          if (!res.ok) throw new Error('API failed');
          return res.json();
        })
        .then(data => {

          console.log('COMMUNITY API DATA', data);



          const about = data.community_about;
          if (about) {
            const imgEl = document.getElementById('communityImage');
            const titleEl = document.getElementById('communityTitle');
            const descEl = document.getElementById('communityDescription');
            const listEl = document.getElementById('communityPoints');

            if (imgEl && about.image) imgEl.src = about.image;
            if (titleEl) titleEl.innerText = about.title;
            if (descEl) descEl.innerText = about.description;

            listEl.innerHTML = '';
            if (Array.isArray(about.points)) {
              about.points.forEach(point => {
                listEl.insertAdjacentHTML('beforeend', `
                    <li class="d-flex align-items-center gap-10 mb-2">
                      <i class="ti ti-circle-check-filled text-warning"></i>
                      <span>${point}</span>
                    </li>
                  `);
              });
            }
          }


          const services = data.community_services;
          const grid = document.getElementById('communityServiceGrid');
          grid.innerHTML = '';

          if (Array.isArray(services) && services.length) {
            services.forEach(service => {
              grid.insertAdjacentHTML('beforeend', `
                  <div class="nursing-feature-card">
                    <div class="nursing-feature-header">
                      <div class="nursing-feature-icon">
                        <img src="${service.image}" alt="${service.title}" width="32">
                      </div>
                    </div>
                    <h3>${service.title}</h3>
                    <div class="nursing-feature-text">
                      ${service.description}
                    </div>
                  </div>
                `);
            });
          }


          const activity = data.community_activity;
          if (activity) {
            const tagEl = document.getElementById('activityTag');
            const titleEl = document.getElementById('activityTitle');
            const descEl = document.getElementById('activityDescription');
            const sideEl = document.getElementById('activitySideTitle');
            const listEl = document.getElementById('activityPoints');

            if (tagEl) tagEl.innerText = activity.sub_title;
            if (titleEl) titleEl.innerText = activity.title;
            if (descEl) descEl.innerText = activity.description;
            if (sideEl) sideEl.innerText = activity.side_title;

            listEl.innerHTML = '';
            if (Array.isArray(activity.points)) {
              activity.points.forEach(point => {
                listEl.insertAdjacentHTML('beforeend', `
                    <li class="rights-benefit">
                      <span class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                          <path d="m9 12 2 2 4-4"></path>
                        </svg>
                      </span>
                      <span class="benefit-text">${point}</span>
                    </li>
                  `);
              });
            }
          }


          const faqWrapper = document.getElementById('accordionExample');
          faqWrapper.innerHTML = '';
          console.log('FAQ HTML:', faqWrapper.innerHTML);
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

        })
        .catch(err => console.error('COMMUNITY API ERROR:', err));
    });
  </script>
@endpush