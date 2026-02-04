@extends("frontend.layout.master")
@section("title", "Our Blogs")
@section("content")
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-img  position-relative" style="background-image: url(assets/images/page-bg15.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Latest Blog</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route("home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Blog
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                <div class="col-xl-8">
                    <div class="row g-4" id="blog-list">
                        {{-- <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog8.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">24</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">03 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>Legal and Financial Planning for Elder Care What You Need to Know</h3>
                                        <p>Senior care is about more than just meeting the medical needs of older adults
                                            about ensuring they live with goal</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog9.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">25</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">03 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>The Emotional Side of Caregiving How to Cope with Stress and Burnout</h3>
                                        <p>Quality senior care focuses on building meaningful relationships promoting
                                            independence where possible and creating</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog10.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">26</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">01 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>Caring for Seniors with Dementia What Every Caregiver Should Know</h3>
                                        <p>As people age they often face challenges such as declining loss or chronic health
                                            conditions that require ongoing attention</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog11.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">27</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">02 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>Careers in Aged Care Why More People Are Choosing This Path</h3>
                                        <p>I chose this career because I believe in treating older adults with the respect
                                            and dignity they deserve and I find great</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog12.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">28</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">No Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>Creating a Safe And Comfortable Home For Elderly Loved Ones</h3>
                                        <p>It involves providing personal support helping with daily activities and offering
                                            companionship to those who may need extra</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route(" blog-details")}}" class="position-relative d-block text-decoration-none">
                                    <img src="assets/images/blog13.jpg" alt="blog">
                                    <span class="tag text-center rounded-2 bg-warning fs-14 fw-normal lh-1"> <span
                                            class="fs-20 fw-800 d-block mb-1">29</span> Aug</span>
                                </a>

                                <div class="blog-content mt-4 pt-xl-3">
                                    <div class="d-flex info">
                                        <a href="author.html"
                                            class="d-flex align-items-center gap-10 d-block text-decoration-none">
                                            <i class="ti ti-user-circle text-primary"></i>
                                            <span class="fs-15">By Admin</span>
                                        </a>
                                        <a href="{{route(" blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">01 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route(" blog-details")}}" class="text-decoration-none d-block">
                                        <h3>Daily Routines in Aged Care What a Typical Day Looks Like</h3>
                                        <p>This profession requires patience empathy strong communication skills as it plays
                                            a vital role in improving the quality of life</p>
                                        <span class="read-more d-flex align-items-center mt-3 pt-1">
                                            <span>Learn More</span>
                                            <img src="assets/images/right.svg" class="rounded-0" alt="right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-12">
                            <div class="pagination-area mt-md-3 mt-lg-4 pt-lg-3 d-flex align-items-center">
                                <button class="next page-numbers border-0">
                                    <i class="ti ti-chevron-left"></i>
                                </button>

                                <span class="page-numbers border-0 current" aria-current="page">1</span>
                                <button class="page-numbers border-0">2</button>
                                <button class="page-numbers border-0">3</button>

                                <button class="next page-numbers border-0">
                                    <i class="ti ti-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    @include('frontend.components.blog-sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function stripHtml(html) {
                const div = document.createElement("div");
                div.innerHTML = html;
                return div.textContent || div.innerText || "";
            }


            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/blogs`)
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
                                        <img class="w-100 h-100" src="${window.FRONTEND_CONFIG.DASHBOARD_URL}/storage/${blog.image}" alt="${blog.title}" style="max-height:380px">
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