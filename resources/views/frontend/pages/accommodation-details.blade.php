@extends("frontend.layout.master")
@section("title", "Accommodation Details")
@section("content")
    <!-- Start Banner Area -->
    <div class="banner-area bg-img" style="background-image: url('{{ asset('assets/images/banner-bg2.jpg') }}');">

        <div class="container ">
            <div class="ptb-100">
                <div class="row align-items-center g-4">
                    <div class="col-xl-6">
                        <div class="banner-content style-two py-0" data-group="images" data-cues="slideInUp"
                            data-duration="900">

                            <h1 class="mb-0" id="acc-title">The Halston</h1>


                            <a href="form" class="default-btn active">
                                <div class="d-flex gap-10 align-content-center">
                                    <span>Book a Tour</span>
                                    <img src="{{ asset('assets/images/right.svg') }}" alt="right-white">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="banner-img-two h-100">
                            <img id="acc-banner-image" src="{{ asset('assets/images/banner-img3.jpg') }}"
                                class="img h-c-100" alt="banner-img" style="max-height: 300px">

                            {{-- <div class="d-flex align-items-center info">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/images/banner-img4.jpg') }}" alt="banner-img">
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Services Area -->
    <div class="services-area ptb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="details-content">
                        <!-- Swiper -->

                        <div class="gallery-wrapper">


                            <!-- MAIN IMAGE -->
                            <div class="swiper product-swiper">
                                <div class="swiper-wrapper" id="acc-gallery-main"></div>
                                <div class="swiper-button-prev product-prev"></div>
                                <div class="swiper-button-next product-next"></div>
                            </div>

                            <!-- THUMBNAILS -->
                            <div class="swiper product-thumb-swiper">
                                <div class="swiper-wrapper" id="acc-gallery-thumb"></div>
                            </div>




                        </div>


                        <br>
                        <p id="acc-description"></p>
                        <br>
                        <p id="acc-overview"></p>

                        <div class="accordion faq-wrapper style-two" id="acc-faq"></div>

                        <!-- FAQ TEMPLATE -->
                        <div class="accordion-item d-none" id="faq-template">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed faq-question" type="button"></button>
                            </h2>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body faq-answer"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar mw-442">



                        <div class="sidebar-widget bg-f2f3f5">
                            <h3 class="text-center">Get Ready.</h3>
                            <h3 class="text-center">Get Set.</h3>
                            <h3 class="text-center">Get Support!</h3>
                            <p class="text-center">Whether you’re ready to start experiencing quality care or just want to
                                learn more about our services, our friendly support team are here to help. Send us a message
                                by filling in the form, or call us anytime on.</p>

                            <form>
                                <div class="mb-4">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-4">
                                    <input type="number" class="form-control" placeholder="Phone">
                                </div>
                                <div class="mb-4">
                                    <select name="" id="" class="form-control">
                                        <option value="">North Strathfield</option>
                                        <option value="">Blacktown</option>
                                        <option value="">Leaumedh</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <textarea rows="5" class="form-control" placeholder="Your message"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="default-btn w-100">
                                        <span class="d-flex gap-10 align-items-center justify-content-center">
                                            <span>contact now</span>
                                            <img src="assets/images/right-white.svg" alt="right-white">
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Area -->


@endsection
@push('scripts')
    <script>
        window.FRONTEND_CONFIG = {
            DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
        };

      
        const ACCOMMODATION_SLUG = "{{ $slug }}";
        fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/support-independent-service`)
            .then(res => res.json())
            .then(data => {

                const services = data.support_services;
                const gallery = data.accommodation_gallery;
                const faqs = data.accommodation_faq;

                const service = services.find(s => s.slug === ACCOMMODATION_SLUG);

                if (!service) {
                    console.error('Service not found for slug:', ACCOMMODATION_SLUG);
                    return;
                }


                document.getElementById('acc-title').textContent = service.title;
                document.getElementById('acc-description').innerHTML = service.description;
                document.getElementById('acc-overview').innerHTML = service.overview;

                const bannerImg = document.getElementById('acc-banner-image');
                if (bannerImg) bannerImg.src = service.image;


                const mainGallery = document.getElementById('acc-gallery-main');
                const thumbGallery = document.getElementById('acc-gallery-thumb');

                gallery
                    .filter(img => img.service_id.includes(service.id))
                    .forEach(img => {
                        mainGallery.insertAdjacentHTML('beforeend', `
                      <div class="swiper-slide">
                        <img src="${img.image}" alt="">
                      </div>
                    `);

                        thumbGallery.insertAdjacentHTML('beforeend', `
                      <div class="swiper-slide">
                        <img src="${img.image}" alt="">
                      </div>
                    `);
                    });

                
                const thumbSwiper = new Swiper('.product-thumb-swiper', {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    watchSlidesProgress: true,
                });

                new Swiper('.product-swiper', {
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.product-next',
                        prevEl: '.product-prev',
                    },
                    thumbs: {
                        swiper: thumbSwiper,
                    },
                });

             
                const faqContainer = document.getElementById('acc-faq');
                const faqTemplate = document.getElementById('faq-template');

                faqs
                    .filter(f => f.service_id.includes(service.id))
                    .forEach((faq, index) => {
                        const clone = faqTemplate.cloneNode(true);
                        const collapseId = `faq-${index}`;

                        clone.classList.remove('d-none');
                        clone.removeAttribute('id');

                        const btn = clone.querySelector('.faq-question');
                        btn.textContent = faq.question;
                        btn.setAttribute('data-bs-toggle', 'collapse');
                        btn.setAttribute('data-bs-target', `#${collapseId}`);

                        const collapse = clone.querySelector('.accordion-collapse');
                        collapse.id = collapseId;
                        collapse.setAttribute('data-bs-parent', '#acc-faq');

                        clone.querySelector('.faq-answer').innerHTML = faq.answer;

                        if (index === 0) {
                            btn.classList.remove('collapsed');
                            collapse.classList.add('show');
                        }

                        faqContainer.appendChild(clone);
                    });

            })
            .catch(err => console.error('API ERROR:', err));


    </script>
@endpush