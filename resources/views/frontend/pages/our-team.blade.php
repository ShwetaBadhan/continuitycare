@extends("frontend.layout.master")
@section("title", "Our Team")
@section("content")


    <!-- Start Team Area -->
    <div class="team-area padding-section">
        <div class="container mw-1685">
            <div class="row g-4" data-cues="slideInUp" data-duration="900">
                <div class="trait-pills">
                    <span class="trait-pill">Human</span>
                    <span class="trait-pill">Bold</span>
                    <span class="trait-pill">Visionary</span>
                    <span class="trait-pill">Resolute</span>
                </div>
                <h2 class="main-titles text-center">Our Leadership</h2>
                <p class="text-center">
                    Continuity Care Leadership Team is a diverse group that includes healthcare industry
                    experts and practitioners, health and social care professionals who understand the complex human
                    services and its technological needs with modern cloud technologists, and entrepreneurial innovators who
                    have scaled market-leading organizations.
                </p>

                <ul class="nav custom-nav-tabs" id="leadershipTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="medical" data-bs-toggle="tab" data-bs-target="#medical" type="button">
                            Advisory Board
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="board-tab" data-bs-toggle="tab" data-bs-target="#board"
                            type="button">
                            Executive Board
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button">
                            Management Team
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff" type="button">
                            Other
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="leaders-tab" data-bs-toggle="tab" data-bs-target="#leaders"
                            type="button">
                            Our Leaders
                        </button>
                    </li>

                </ul>

                <div class="tab-content" id="leadershipTabContent">

                    <div class="tab-pane fade " id="leaders">
                        <div class="row g-4" id="our_leaders"></div>
                    </div>

                    <div class="tab-pane fade show active" id="board">
                        <div class="row g-4" id="executive_board"></div>
                    </div>

                    <div class="tab-pane fade" id="team">
                        <div class="row g-4" id="leadership_team"></div>
                    </div>

                    <div class="tab-pane fade" id="staff">
                        <div class="row g-4" id="staff_data"></div>
                    </div>

                    <div class="tab-pane fade" id="medical">
                        <div class="row g-4" id="medical_board"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/our-team`)
                .then(res => res.json())
                .then(data => {

                    renderTeam(data.our_leaders, 'our_leaders');
                    renderTeam(data.executive_board, 'executive_board');
                    renderTeam(data.leadership_team, 'leadership_team');
                    renderTeam(data.staff, 'staff_data');
                    renderTeam(data.medical, 'medical_board');

                })
                .catch(err => console.error('API ERROR ', err));

        });


        function renderTeam(list, containerId) {
            const container = document.getElementById(containerId);
            if (!container || !list || list.length === 0) {
                container.innerHTML = '<p class="text-center">No data found</p>';
                return;
            }

            container.innerHTML = list.map(member => `
                <div class="col-xl-3 col-sm-6">
                    <div class="team-single-item">
                        <a href="javascript:void(0)" class="team-img">
                            <img src="http://localhost:8080/uploads/${member.image ?? '/assets/images/placeholder.png'}" alt="${member.fullname}">
                        </a>
                        <div class="team-content">
                            <h3>${member.fullname}</h3>
                            <span>${member.designation}</span>

                            <ul class="p-0 mb-0 list-unstyled d-flex">
                                ${socialIcon(member.facebook, 'facebook')}
                                ${socialIcon(member.instagram, 'instagram')}
                                ${socialIcon(member.twitter, 'x')}
                                ${socialIcon(member.linkedin, 'linkedin')}
                            </ul>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function socialIcon(url, type) {
            if (!url) return '';
            const icons = {
                facebook: 'ti ti-brand-facebook-filled',
                instagram: 'ti ti-brand-instagram',
                x: 'ti ti-brand-x',
                linkedin: 'ti ti-brand-linkedin'
            };
            return `
                <li>
                    <a href="${url}" target="_blank">
                        <i class="${icons[type]}"></i>
                    </a>
                </li>
            `;
        }
    </script>

@endpush