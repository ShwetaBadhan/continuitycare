@extends("frontend.layout.master")
@section("title", "Transition Care")
@section("content")

 <section class="fc-wrapper-section">
        <div class="container">
            <div class="fc-levels-container">
                <p class="fc-intro-paragraph">
                    Your funding classification is determined by an independent assessment through My Aged Care and reflects the classification of support needed to help you live safely at home:
                </p>

                <!-- Level 1 -->
                <div class="fc-level-row fc-level-1">
                    <div class="fc-number-badge">1</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Basic support</span>
                        <span class="fc-support-description">– occasional help with tasks like housework or meal prep.</span>
                    </div>
                </div>

                <!-- Level 2 -->
                <div class="fc-level-row fc-level-2">
                    <div class="fc-number-badge">2</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Low-level support</span>
                        <span class="fc-support-description">– regular assistance such as personal care and transport.</span>
                    </div>
                </div>

                <!-- Level 3 -->
                <div class="fc-level-row fc-level-3">
                    <div class="fc-number-badge">3</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Moderate support</span>
                        <span class="fc-support-description">– more frequent care, including equipment and personal care.</span>
                    </div>
                </div>

                <!-- Level 4 -->
                <div class="fc-level-row fc-level-4">
                    <div class="fc-number-badge">4</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Mid-level support</span>
                        <span class="fc-support-description">– high frequency personal and household support.</span>
                    </div>
                </div>

                <!-- Level 5 -->
                <div class="fc-level-row fc-level-5">
                    <div class="fc-number-badge">5</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">High support</span>
                        <span class="fc-support-description">– daily support and clinical coordination.</span>
                    </div>
                </div>

                <!-- Level 6 -->
                <div class="fc-level-row fc-level-6">
                    <div class="fc-number-badge">6</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Very high support</span>
                        <span class="fc-support-description">– comprehensive medical and personal care at home.</span>
                    </div>
                </div>

                <!-- Level 7 -->
                <div class="fc-level-row fc-level-7">
                    <div class="fc-number-badge">7</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Intensive support</span>
                        <span class="fc-support-description">– intensive daily care across multiple needs.</span>
                    </div>
                </div>

                <!-- Level 8 -->
                <div class="fc-level-row fc-level-8">
                    <div class="fc-number-badge">8</div>
                    <div class="fc-content-area">
                        <span class="fc-support-title">Highest support</span>
                        <span class="fc-support-description">– daily care and comprehensive clinical services, including palliative care.</span>
                    </div>
                </div>

                <!-- Footer Information -->
                <div class="fc-footer-info">
                    <p class="fc-footer-text">
                        Currently funding ranges from $10,692.72 to $77,709.00 per annum. For more information on Support at Home program visit 
                        <a href="#" class="fc-footer-link">Support at Home program | Australian Government Department of Health, Disability and Ageing</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection