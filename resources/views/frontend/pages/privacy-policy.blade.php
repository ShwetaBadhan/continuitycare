@extends("frontend.layout.master")
@section("title", "Privacy Policy")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg2.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Privacy Policy</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{route(" home")}}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Privacy Policy
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner Area -->

    <!-- Start Privacy policy Area -->
    <div class="padding-section">
        <div class="container">
            <div class="main-content-text">
                <span class="update" id="privacy_sub_title">Last updated: April 2025</span>
                <h3 id="privacy_main_title">Privacy policy</h3>
                <div id="privacy_description"></div>
            </div>
        </div>
    </div>
    <!-- End Privacy policy Area -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/privacy-policy`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);



                    const PRIVACY_POLICY = data.privacy_policy;
                    if (PRIVACY_POLICY) {
                        document.getElementById('privacy_sub_title').textContent = PRIVACY_POLICY.sub_title ?? '';
                        document.getElementById('privacy_main_title').textContent = PRIVACY_POLICY.main_title ?? '';
                        document.getElementById('privacy_description').textContent = PRIVACY_POLICY.description ?? '';

                    }




                })
                .catch(err => console.error('API ERROR ', err));

        });

    </script>
@endpush