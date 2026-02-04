@extends("frontend.layout.master")
@section("title", " Blog Details | Continuity Care")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg16.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Single Blog</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Single Blog
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                <div class="col-xl-8">
                    <div class="blog-details-content">
                        <div class="blog-details-img">
                            <img id="blog-image" src="assets/images/blog14.jpg" class="w-100" alt="blog">
                        </div>

                        <ul class="p-0 mt-0 list-unstyled d-flex align-items-center info">
                            <li>
                                <a href="#" class="d-flex align-items-center gap-10 text-decoration-none">
                                    <i class="ti ti-user-circle text-primary"></i>
                                    <span id="blog-author">By Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="#comment" class="d-flex align-items-center gap-10 text-decoration-none">
                                    <i class="ti ti-message text-primary"></i>
                                    <span id="blog-date">01 Comment</span>
                                </a>
                            </li>
                        </ul>

                        <h2 id="blog-title">The Emotional Side of Caregiving How to Cope with Stress and Burnout</h2>
                        <p id="blog-description">As an aged care worker, I am dedicated to providing compassionate support,
                            assisting with daily
                            activities, and ensuring the physical and emotional well-being of older adults. This role
                            requires patience, empathy, and strong communication skills, as it involves building trusting
                            relationships and respecting each person's dignity and independence. Working in this field has
                            deepened my understanding of the importance of quality care and the vital role it plays in
                            enhancing the quality of life seniors.</p>



                        <blockquote>
                            <div class="d-sm-flex align-items-center gap-30">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/images/quote3.svg') }}" alt="quote">
                                </div>
                                <div class="flex-grow-1">
                                    <p id="blog-quote">Old care, also known as aged care, is a vital service that focuses on
                                        supporting the
                                        physical, emotional, and social well-being of elderly individuals. It involves
                                        assisting older.”</p>
                                </div>
                            </div>
                        </blockquote>

                        {{-- <h3>We understand injuries and pain happen unexpectedly</h3> --}}
                        <p id="blog-benefits">It involves providing personal support, helping with daily activities, and
                            offering companionship
                            to those who may need extra care and attention. This work requires kindness, patience, and
                            understanding, as every person has unique needs and stories. I chose this career because I
                            believe in treating older adults with the respect and dignity they deserve.</p>


                        {{-- <ul class="p-0 mb-4 mb-lg-5 list-unstyled">
                            <li class="d-flex align-items-center gap-15 mb-4">
                                <i class="ti ti-circle-check-filled fs-20 text-warning"></i>
                                <span>Provide assistance with mobility, transfers, and positioning to ensure safety and
                                    comfort.</span>
                            </li>
                            <li class="d-flex align-items-center gap-15 mb-4">
                                <i class="ti ti-circle-check-filled fs-20 text-warning"></i>
                                <span>Assist with medication management by reminding seniors to take prescribed medications
                                    at scheduled times.</span>
                            </li>
                            <li class="d-flex align-items-center gap-15">
                                <i class="ti ti-circle-check-filled fs-20 text-warning"></i>
                                <span>Prepare nutritious meals, taking into consideration dietary restrictions and
                                    preferences.</span>
                            </li>
                        </ul> --}}

                        <div class="d-flex flex-wrap gap-10 align-items-center justify-content-between tags-social">
                            <ul class="p-0 m-0 list-unstyled d-flex align-items-center tags">
                                <li>
                                    <i class="ti ti-tag-filled"></i>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none">Health,</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none">Mental,</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none">Happy life</a>
                                </li>
                            </ul>
                            <ul class="p-0 m-0 list-unstyled d-flex align-items-center social-link">
                                <li>
                                    <span>Share:</span>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- <div class="d-sm-flex author-info">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <img src="assets/images/author.jpg" class="rounded-circle" alt="author">
                            </div>

                            <div class="flex-grow-1">
                                <h4>Nobuko Rosenthal</h4>
                                <p>This profession requires patience, empathy, and strong communication skills, as it plays
                                    a vital role in improving the quality of life for older adults. Working in aged care
                                    allows me to make a positive difference every day and build genuine connections with
                                    those who need care and companionship</p>

                                <div class="d-flex align-items-center social-link">
                                    <a href="https://www.facebook.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-facebook-filled"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-x"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" class="text-decoration-none" target="_blank">
                                        <i class="ti ti-brand-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <h3 id="comment">01 Comments</h3>

                        <div class="d-sm-flex comment-info position-relative z-1">
                            <div class="flex-shrink-0 mb-3 mb-sm-0">
                                <img src="assets/images/team1.jpg" alt="author">
                            </div>

                            <div class="flex-grow-1">
                                <h4>Michael Greenlee</h4>
                                <span>Oct 20, 2025 | 08:10 pm</span>
                                <p class="m-0">A career in aged care is a meaningful and fulfilling path that involves
                                    supporting elderly individuals with compassion dignity and respect. It includes
                                    assisting with daily tasks providing emotional</p>

                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div> --}}

                        <form class="comment-form">
                            <h3>Leave A Reply</h3>
                            <p>Your email address will not be published. Required fields are marked</p>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control bg-f2f3f5" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control bg-f2f3f5" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-f2f3f5" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="default-btn active">
                                        <span class="d-flex align-items-center gap-10 align-items-center">
                                            <span>Post A Comment</span>
                                            <img src="{{ asset('assets/images/right.svg') }}" alt="right">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    @include('frontend.components.blog-sidebar');
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get slug from URL → /blog/{slug}
            const slug = window.location.pathname.split('/').pop();
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/blogs`)
                .then(res => {
                    if (!res.ok) throw new Error('API failed');
                    return res.json();
                })
                .then(data => {

                    const BLOGS = data.blogs;
                    if (!Array.isArray(BLOGS)) return;

                    //  Find blog by slug
                    const blog = BLOGS.find(item => item.slug === slug);

                    if (!blog) {
                        console.error('Blog not found for slug:', slug);
                        return;
                    }

                    const date = new Date(blog.published_at);
                    const formattedDate = date.toLocaleDateString("en-GB", {
                        day: "2-digit",
                        month: "short",
                        year: "numeric"
                    });

                    // Image
                    document.getElementById("blog-image").src =
                        `http://localhost:8080/storage/${blog.image}`;
                    document.getElementById("blog-image").alt = blog.title;

                    // Meta
                    document.getElementById("blog-author").innerText = blog.author;
                    document.getElementById("blog-date").innerText = formattedDate;

                    // Content
                    document.getElementById("blog-title").innerText = blog.title;
                    document.getElementById("blog-description").innerHTML = blog.description;

                    // Quote
                    if (blog.quote) {
                        document.getElementById("blog-quote").innerText = blog.quote;
                    }

                    // Benefits
                    if (blog.benefits) {
                        document.getElementById("blog-benefits").innerHTML = blog.benefits;
                    }



                })
                .catch(err => console.error('BLOG DETAILS ERROR:', err));

            fetch('http://localhost:8080/api/blogs')
                .then(res => {
                    if (!res.ok) throw new Error('API response failed');
                    return res.json();
                })
                .then(data => {
                    console.log('API DATA:', data);

                    const BLOGS = data.blogs;

                    if (Array.isArray(BLOGS) && BLOGS.length > 0) {
                        const blogContainer = document.getElementById("blog-list");
                        blogContainer.innerHTML = "";

                        BLOGS.forEach((blog, index) => {
                            const date = new Date(blog.published_at);
                            const day = date.getDate();
                            const month = date.toLocaleString("default", { month: "short" });


                            blogContainer.insertAdjacentHTML("beforeend", `
                            <div class="col-md-6">
                                <div class="blog-single-item text-decoration-none">
                                    <a href="/blog-details/${blog.slug}" class="position-relative d-block text-decoration-none">
                                        <img class="w-100 h-100" src="http://localhost:8080/storage/${blog.image}" alt="${blog.title}" style="max-height:380px">
                                        <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1">
                                            <span class="fs-20 fw-800 d-block mb-1">${day}</span>
                                            ${month}
                                        </span>
                                    </a>

                                    <div class="blog-content mt-4 pt-xl-3">
                                        <div class="d-flex info">
                                            <span class="d-flex align-items-center gap-10">
                                                <i class="ti ti-user-circle text-primary"></i>
                                                <span class="fs-15">By ${blog.author}</span>
                                            </span>
                                        </div>

                                        <a href="/blog-details/${blog.slug}" class="text-decoration-none d-block">
                                            <h3>${blog.title}</h3>
                                            <p>${stripHtml(blog.description).substring(0, 120)}...</p>
                                            <span class="read-more d-flex align-items-center mt-3 pt-1">
                                                <span>Learn More</span>
                                                <img src="/assets/images/right.svg" alt="right">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `);
                        });
                    }
                    const popularPostContainer = document.getElementById("popular-post-list");

                    if (popularPostContainer && Array.isArray(BLOGS)) {
                        popularPostContainer.innerHTML = "";

                        BLOGS.slice(0, 3).forEach(blog => {
                            const date = new Date(blog.published_at);
                            const formattedDate = date.toLocaleDateString("en-GB", {
                                day: "2-digit",
                                month: "short",
                                year: "numeric"
                            });

                            popularPostContainer.insertAdjacentHTML("beforeend", `
                    <a href="/blog/${blog.slug}" class="d-sm-flex align-items-center item">
                        <div class="flex-shrink-0 mb-3 mb-sm-0">
                            <img 
                                src="http://localhost:8080/storage/${blog.image}" 
                                class="object-fit-cover" 
                                alt="${blog.title}"
                                style="width: 80px; height: 80px;"
                            >
                        </div>
                        <div class="flex-grow-1">
                            <span>${formattedDate}</span>
                            <h4>${blog.title}</h4>
                        </div>
                    </a>
                `);
                        });
                    }


                    const CATEGORIES = data.blog_category;

                    if (Array.isArray(CATEGORIES) && CATEGORIES.length > 0) {
                        const categoryList = document.getElementById("category-list");
                        categoryList.innerHTML = "";

                        CATEGORIES.forEach(category => {
                            categoryList.insertAdjacentHTML("beforeend", `
                                <li>
                                    <a href="/blogs?category=${category.slug}"
                                       class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>${category.name}</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                            `);
                        });
                    }

                })
                .catch(err => console.error(' API ERROR:', err));
        });
    </script>
@endpush