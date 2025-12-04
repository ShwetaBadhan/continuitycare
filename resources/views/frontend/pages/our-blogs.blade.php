@extends("frontend.layout.master")
@section("title", "Our Blogs")
@section("content")
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg15.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="main-title mx-auto text-white">Latest Blog</h2>
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
    <div class="blog-area ptb-120">
        <div class="container mw-1685">
            <div class="row g-4 justify-content-center" data-cues="slideInUp" data-duration="900">
                <div class="col-xl-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="blog-single-item text-decoration-none">
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">03 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">03 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">01 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">02 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">No Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                                <a href="{{route("blog-details")}}" class="position-relative d-block text-decoration-none">
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
                                        <a href="{{route("blog-details")}}"
                                            class="d-flex align-items-center gap-10 text-decoration-none">
                                            <i class="ti ti-message text-primary"></i>
                                            <span class="fs-15">01 Comment</span>
                                        </a>
                                    </div>

                                    <a href="{{route("blog-details")}}" class="text-decoration-none d-block">
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
                        </div>

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
                    <div class="sidebar">
                        <div class="sidebar-widget widget-search bg-f2f3f5">
                            <h3>Search Here</h3>

                            <form class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">

                                <button type="submit" class="search-btn">
                                    <i class="ti ti-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>Popular Post</h3>

                            <div class="popular-post-list">
                                <a href="{{route("blog-details")}}" class="d-sm-flex align-items-center item">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <img src="assets/images/blog5.jpg" class="object-fit-cover" alt="blog">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span>01 Sep 2025</span>
                                        <h4>Caring for Seniors with Dementia Tips for Families and Caregivers</h4>
                                    </div>
                                </a>
                                <a href="{{route("blog-details")}}" class="d-sm-flex align-items-center item">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <img src="assets/images/blog6.jpg" class="object-fit-cover" alt="blog">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span>02 Sep 2025</span>
                                        <h4>Maintaining Dignity and Independence in Elderly Care</h4>
                                    </div>
                                </a>
                                <a href="{{route("blog-details")}}" class="d-sm-flex align-items-center item">
                                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                                        <img src="assets/images/blog7.jpg" class="object-fit-cover" alt="blog">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span>03 Sep 2025</span>
                                        <h4>Mental Health and Emotional Wellbeing in Older Adults</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>News Category</h3>

                            <ul class="category-list p-0 m-0 list-unstyled">
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Transportation Assistance</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Rehabilitation Services</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Municipal health services</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Home Safety Assessments</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Personalized Care Plans</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="categories.html"
                                        class="d-flex justify-content-between align-items-center text-decoration-none">
                                        <span>Palliative and hospice care</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget bg-f2f3f5">
                            <h3>Popular Tags</h3>

                            <ul class="p-0 m-0 list-unstyled d-flex flex-wrap tags">
                                <li>
                                    <a href="tags.html">Mental Health</a>
                                </li>
                                <li>
                                    <a href="tags.html">Home Care</a>
                                </li>
                                <li>
                                    <a href="tags.html">Senior Care</a>
                                </li>
                                <li>
                                    <a href="tags.html">Physical Therapy</a>
                                </li>
                                <li>
                                    <a href="tags.html">Elder Care</a>
                                </li>
                                <li>
                                    <a href="tags.html">Happy Life</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
@endsection