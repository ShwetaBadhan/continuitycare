@extends("frontend.layout.master")
@section("title", "Our Commitment | Continuity Care")
@section("content")


    <div class="faq-area-four padding-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="main-titles" id="commitment_one_main_title">Caring is at the heart of everything we do</h2>
                    <h5 id="commitment_one_sub_title">Whether you need support in your home or an aged care home, respite
                        care, disability services or are
                        looking for activities that connect you with your local community, mecwacare is here to assist you
                        every step of the way.</h5>
                    <p id="commitment_one_description">Through openness in communication, residents and clients, their
                        families and representatives, and
                        staff and volunteers are encouraged to discuss issues and concerns. Our staff and volunteers are
                        supported to assist, guide and engender trust, and residents and clients are encouraged to gain the
                        greatest level of independence and be as actively involved in decision making as they can.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="how-it-works-section padding-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="main-titles" id="commitment_two_main_title">Our Model of Care</h2>
                    <h5 id="commitment_two_sub_title">We provide person-centred care, respecting individual needs,
                        preferences, and diversity. Clients are
                        active partners in their care, from assessment to decision-making.</h5>
                    <p id="commitment_two_description">Our care model has a strong clinical focus, with registered and
                        enrolled nurses supporting aged care
                        homes, in-home care, quality and risk, learning and development and clinical innovation.</p>

                </div>
            </div>
        </div>
    </section>



    <div class="faq-area-four padding-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="main-titles" id="commitment_three_main_title">Charter of Aged Care Rights</h2>
                    <h5 id="commitment_three_sub_title">The Charter of Aged Care Rights safeguards the rights of individuals
                        receiving aged care services
                        funded by the Australian Government.</h5>
                    <p id="commitment_three_description">It is a legal framework that ensures respect and dignity in care
                    </p>
                </div>
            </div>
        </div>
    </div>


    <section class="how-it-works-section padding-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="main-titles" id="commitment_four_main_title">Caring for our Environment</h2>
                    <h5 id="commitment_four_sub_title">At mecwacare, we’re dedicated to reducing our environmental impact
                        and promoting sustainability.
                    </h5>
                    <p id="commitment_four_description">We comply with all regulations and continuously improve our
                        practices to create a greener future.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            window.FRONTEND_CONFIG = {
                DASHBOARD_URL: "{{ config('app.dashboard_url') }}"
            };

            fetch(`${window.FRONTEND_CONFIG.DASHBOARD_URL}/api/our-commitment`)
                .then(res => res.json())
                .then(data => {
                    console.log('API DATA ', data);



                    const COMMITMENT_ONE = data.commitment_one;
                    if (COMMITMENT_ONE) {
                        document.getElementById('commitment_one_sub_title').textContent = COMMITMENT_ONE.sub_title ?? '';
                        document.getElementById('commitment_one_main_title').textContent = COMMITMENT_ONE.main_title ?? '';
                        document.getElementById('commitment_one_description').innerHTML = COMMITMENT_ONE.description_1 ?? '';

                    }
                    const COMMITMENT_TWO = data.commitment_two;
                    if (COMMITMENT_TWO) {
                        document.getElementById('commitment_two_sub_title').textContent = COMMITMENT_TWO.sub_title ?? '';
                        document.getElementById('commitment_two_main_title').textContent = COMMITMENT_TWO.main_title ?? '';
                        document.getElementById('commitment_two_description').innerHTML = COMMITMENT_TWO.description_1 ?? '';

                    }
                    const COMMITMENT_THREE = data.commitment_three;
                    if (COMMITMENT_THREE) {
                        document.getElementById('commitment_three_sub_title').textContent = COMMITMENT_THREE.sub_title ?? '';
                        document.getElementById('commitment_three_main_title').textContent = COMMITMENT_THREE.main_title ?? '';
                        document.getElementById('commitment_three_description').innerHTML = COMMITMENT_THREE.description_1 ?? '';

                    }
                    const COMMITMENT_FOUR = data.commitment_four;
                    if (COMMITMENT_FOUR) {
                        document.getElementById('commitment_four_sub_title').textContent = COMMITMENT_FOUR.sub_title ?? '';
                        document.getElementById('commitment_four_main_title').textContent = COMMITMENT_FOUR.main_title ?? '';
                        document.getElementById('commitment_four_description').innerHTML = COMMITMENT_FOUR.description_1 ?? '';

                    }





                })
                .catch(err => console.error('API ERROR ', err));

        });

    </script>
@endpush