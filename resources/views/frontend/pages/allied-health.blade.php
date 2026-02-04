@extends("frontend.layout.master")
@section("title", "Allied Health")
@section("content")

  <div class="services-area padding-section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <div class="details-content">
            <img id="alliedAboutImage" src="{{ asset('assets/images/breadcrumbs/nurese.png') }}" class="rounded-4"
              alt="services-details">
          </div>
        </div>
        <div class="col-md-6">
          <div class="details-content">
            <h3 id="alliedAboutTitle" class="main-titles">Our mission is to improve the quality of life of our
              participants</h3>
            <p id="alliedAboutDescription" align="justify">Continuity Care was born in 2017 from the idea of creating an
              environment where people living with a
              disability or health condition, and the clinicians that support them, were put first.</p>

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
          <h2 class="main-title" id="alliedSupportTitle">
            Empowering communities with quality home care support
          </h2>

          <p class="hero-text" id="alliedSupportDescription">
            Continuity Care has proudly provided Support at Home services to communities since 2020. Our care coordinators
            ensure easy access to high-quality home care support.
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
            <img id="alliedSupportImage" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800"
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

    <div class="care-features-grid" id="alliedServiceGrid">

    </div>
  </div>


  <div class="services-area padding-section">
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


  <div class="custom-hero-section padding-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="main-titles" id="alliedJourneyTitle">Begin your journey today</h2>
          <p id="alliedJourneyDescription" align="justify">Get a head start on receiving support with our experienced
            clinicians by submitting our referral form. If
            you've got questions, our team is ready to assist you – simply use our enquiry form to get in touch.</p>
          <a href="tel:1800 012 273" class="default-btn active mt-">
            <div class="d-flex gap-10 align-content-center">
              <span>Book a Free Consultation</span>
              <img src="assets/images/right.svg" alt="right-white">
            </div>


          </a>
          <div class="mt-3">
            <img id="alliedJourneyImage" src="{{ asset('assets/images/skills/skill-1.png') }}" class="w-75 rounded"
              alt="img" style="max-height: 250px">

          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-form bg-img border p-4 p-lg-5 rounded-4">
            <h3 class="mt-0">Take A Schedule Appointment</h3>
            <p>Our booking process is simple confidential and flexible to fit your schedule</p>

            <form id="leadForm">
              <div class="row g-4">
                <div class="col-lg-6">

                  <input type="text" name="fullname" class="form-control bg-f2f3f5" placeholder="Full Name">
                </div>
                <div class="col-lg-6">
                  <input type="email" name="email" class="form-control bg-f2f3f5" placeholder="Email">
                </div>
                <div class="col-lg-6">
                  <input type="number" name="phone" class="form-control bg-f2f3f5" placeholder="Phone" maxlength="10"
                    pattern="[0-9]{10}" inputmode="numeric" placeholder="Enter 10-digit phone number" required
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);">
                </div>
                <div class="col-lg-6">
                  <input type="text" name="subject" class="form-control bg-f2f3f5" placeholder="Subject">
                </div>
                <div class="col-lg-12">
                  <textarea rows="5" name="message" class="form-control bg-f2f3f5"
                    placeholder="Write Your Message"></textarea>
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
            </form>
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

      fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/allied-health-service`)
        .then(res => {
          if (!res.ok) throw new Error('API failed');
          return res.json();
        })
        .then(data => {

          console.log('ALLIED API DATA', data);


          const about = data.allied_about;
          if (about) {
            const imgEl = document.getElementById('alliedAboutImage');
            const titleEl = document.getElementById('alliedAboutTitle');
            const descEl = document.getElementById('alliedAboutDescription');

            if (imgEl) imgEl.src = about.image;
            if (titleEl) titleEl.innerText = about.title;
            if (descEl) descEl.innerText = about.description;
          }

          const support = data.allied_support;
          if (support) {
            const imgE2 = document.getElementById('alliedSupportImage');
            const titleE2 = document.getElementById('alliedSupportTitle');
            const descE2 = document.getElementById('alliedSupportDescription');

            if (imgE2) imgE2.src = support.image;
            if (titleE2) titleE2.innerText = support.title;
            if (descE2) descE2.innerText = support.description;
          }
          const journey = data.allied_journey;
          if (journey) {
            const imgE2 = document.getElementById('alliedJourneyImage');
            const titleE2 = document.getElementById('alliedJourneyTitle');
            const descE2 = document.getElementById('alliedJourneyDescription');

            if (imgE2) imgE2.src = journey.image;
            if (titleE2) titleE2.innerText = journey.title;
            if (descE2) descE2.innerText = journey.description;
          }


          const services = data.allied_services;
          const grid = document.getElementById('alliedServiceGrid');

          if (grid) {
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
          }


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
        .catch(err => console.error('ALLIED API ERROR:', err));
    });

    // for form #
    document.getElementById("leadForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const form = e.target;
      const submitBtn = form.querySelector("button[type='submit']");

      submitBtn.disabled = true;

      Swal.fire({
        title: 'Verifying...',
        text: 'Checking security',
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading()
      });

      grecaptcha.ready(function () {
        grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {
          action: 'contact_form'
        }).then(async function (token) {

          const payload = {
            fullname: form.fullname.value.trim(),
            email: form.email.value.trim(),
            phone: form.phone.value.trim(),
            subject: form.subject.value.trim(),
            message: form.message.value.trim(),
            recaptcha_token: token
          };

          try {
            const response = await fetch("/api/leads", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
              },
              body: JSON.stringify(payload),
            });

            const data = await response.json();
            Swal.close();

            if (response.ok) {
              Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: data.message,
                confirmButtonColor: '#0d6efd'
              });
              form.reset();
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Failed',
                text: data.message || 'Validation failed',
                confirmButtonColor: '#dc3545'
              });
            }

          } catch (error) {
            Swal.close();
            Swal.fire({
              icon: 'error',
              title: 'Server Error',
              text: 'Please try again later'
            });
          } finally {
            submitBtn.disabled = false;
          }
        });
      });
    });

  </script>

@endpush