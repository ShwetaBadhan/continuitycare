@extends("frontend.layout.master")
@section("title", "Terms and Conditions")
@section("content")
    <!-- Start Page Banner Area -->
    {{-- <div class="page-banner-area bg-img ptb-120 position-relative"
        style="background-image: url(assets/images/page-bg2.jpg);">
        <div class="container mw-1685">
            <div class="page-banner-content text-center">
                <h2 class="mx-auto text-white">Terms & Conditions</h2>
                <ul class="p-0 m-0 list-unstyled d-flex align-items-center justify-content-center">
                    <li>
                        <a href="{{ route(" home") }}" class="text-decoration-none">
                            Home
                        </a>
                    </li>
                    <li>
                        Terms & Conditions
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
                <span class="update" id="terms_sub_title">Last updated: April 2025</span>
                <h3 id="terms_main_title">Terms & Conditions</h3>
                <div id="terms_description"></div>
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

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/terms-conditions`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);



                    const TERMS_CONDITIONS = data.terms_conditions;
                    if (TERMS_CONDITIONS) {
                        document.getElementById('terms_sub_title').textContent = TERMS_CONDITIONS.sub_title ?? '';
                        document.getElementById('terms_main_title').textContent = TERMS_CONDITIONS.main_title ?? '';
                        document.getElementById('terms_description').textContent = TERMS_CONDITIONS.description ?? '';

                    }




                })
                .catch(err => console.error('API ERROR ', err));

        });

    </script>
@endpush