@extends("frontend.layout.master")
@section("title", "Continuity Connect Patient Portal")
@section("content")

   <!-- Hero Section -->
    <section class="connect-hero-section">
        <div class="hero-bg"></div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="badge-custom">
                        Continuity Connect Patient Portal
                    </div>
                    <h1 class="main-titles">
                        Most health tech companies are<br>
                        <span class="text-blue">over-advised by doctors</span><br>
                        <span class="text-slate">and under-advised by patients</span>
                    </h1>
                    <p class="hero-subtitle">
                        If the only people advising your product have never used it, you have a blind spot.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom text-white">
                        Work with us <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Statement -->
    <section class="py-5">
        <div class="container">
            <div class="card-custom">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="fw-bold mb-4">The Industry Obsession</h2>
                        <p class="fs-5 text-secondary mb-4">
                            Health tech, femtech, and AI startups obsess over medical credibility. So they recruit physicians, researchers, and clinical advisors.
                        </p>
                        <p class="fs-5 text-secondary mb-4">
                            All necessary.
                        </p>
                        <p class="fs-3 fw-bold text-blue">
                            And none of them are your customer.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-blue-gradient">
                            <h3 class="fs-5 fw-bold mb-4">Patients are the ones who:</h3>
                            <div class="check-item">
                                <i class="bi bi-check-circle-fill check-icon"></i>
                                <span class="text-secondary">Navigate care across broken systems</span>
                            </div>
                            <div class="check-item">
                                <i class="bi bi-check-circle-fill check-icon"></i>
                                <span class="text-secondary">Decide whether your product fits into their real lives</span>
                            </div>
                            <div class="check-item">
                                <i class="bi bi-check-circle-fill check-icon"></i>
                                <span class="text-secondary">Abandon tools that add friction—even when they're "clinically sound"</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="comparison-card doctor-card">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-heart-pulse icon-large"></i>
                            <h3 class="fw-bold mb-0">Doctors</h3>
                        </div>
                        <p class="fs-4 fw-medium mb-0">
                            Validate accuracy
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="comparison-card patient-card">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-people-fill icon-large"></i>
                            <h3 class="fw-bold mb-0">Patients</h3>
                        </div>
                        <p class="fs-4 fw-medium mb-0">
                            Validate usability, relevance, and survival value
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Without Patient Advisors -->
    <section class="py-5">
        <div class="container">
            <div class="warning-card">
                <div class="d-flex align-items-center gap-3 mb-5">
                    <i class="bi bi-exclamation-circle-fill icon-large text-danger"></i>
                    <h2 class="fw-bold mb-0">Without patient advisors:</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="warning-item">
                            <p class="fs-5 mb-0">
                                The "patient journey" is <span class="fw-bold text-danger">theoretical</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="warning-item">
                            <p class="fs-5 mb-0">
                                Pain points are <span class="fw-bold text-danger">guessed, not lived</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="warning-item">
                            <p class="fs-5 mb-0">
                                Value props sound impressive—but <span class="fw-bold text-danger">don't stick</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Insight -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="insight-card">
                        <p class="fs-3 fw-bold mb-4">
                            Medical advisors keep you correct.
                        </p>
                        <p class="fs-2 fw-bold mb-0">
                            Patient advisors make you useful.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Message -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="final-card text-center">
                        <h2 class="fw-bold mb-4">
                            If patients only enter the room after the product is built,<br>
                            you're not patient-centric.
                        </h2>
                        <p class="display-6 fw-bold text-blue mb-4">
                            You're patient-adjacent.
                        </p>
                        <div class="divider"></div>
                        <p class="fs-4 text-secondary mb-4">
                            This is the work I do with teams before they launch.
                        </p>
                        <a href="#contact" class="btn btn-primary-custom text-white">
                            Let's talk <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection