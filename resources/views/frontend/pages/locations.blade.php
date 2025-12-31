@extends("frontend.layout.master")
@section("title", "Locations")
@section("content")
 <!-- Results Page -->
    <div class="results-page" >
        <!-- Results Header -->
        <div class="results-header-section">
            <div class="container">
                <h2 class="main-titles text-center">Find an Anglicare Southern Queensland<br>service at a location near you</h2>
                
                <div class="search-bar-small">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="text-white">By name</label>
                            <input type="text" placeholder="Type a name">
                        </div>
                        <div class="col-md-3">
                            <label class="text-white">By service type</label>
                            <select>
                                <option>Select service</option>
                                <option>Aged Care</option>
                                <option>Community Services</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="text-white">By location</label>
                            <input type="text" value="Western Australia, Australia">
                        </div>
                        <div class="col-md-2">
                            <button class="btn-search-small">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facility Cards -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="facility-card" onclick="openContactModal('Charleville – Social and Community Services')">
                        <div class="card-header">
                            <h5>Charleville – Social and Community Services</h5>
                            <div class="arrow-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body-custom">
                            <div class="facility-address">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>41 Alfred Street, Charleville Q, 4470</span>
                            </div>
                            <div class="facility-services">
                                <span class="service-tag">✓ Children </span>
                                <span class="service-tag">✓ Family Support</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="facility-card" onclick="openContactModal('Roma – Foster and Kinship Care Service')">
                        <div class="card-header">
                            <h5>Roma – Foster and Kinship Care Service</h5>
                            <div class="arrow-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body-custom">
                            <div class="facility-address">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>52 Arthur Street, Roma QLD, 4455</span>
                            </div>
                            <div class="facility-services">
                                <span class="service-tag">✓ Foster & Kinship Care</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="facility-card" onclick="openContactModal('Roma – Home and Community Aged Care Services')">
                        <div class="card-header">
                            <h5>Roma – Home and Community Aged Care</h5>
                            <div class="arrow-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body-custom">
                            <div class="facility-address">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>50 Arthur Street, Roma Q, 4455</span>
                            </div>
                            <div class="facility-services">
                                <span class="service-tag">✓ Aged Care</span>
                                <span class="service-tag">✓ Support at Home</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="facility-card" onclick="openContactModal('Roma – Social and Community Services')">
                        <div class="card-header">
                            <h5>Roma – Social and Community Services</h5>
                            <div class="arrow-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body-custom">
                            <div class="facility-address">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>50-52 Arthur Street, Roma Q, 4455</span>
                            </div>
                            <div class="facility-services">
                                <span class="service-tag">✓ Children and Parenting Programs</span>
                                <span class="service-tag">✓ Family Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white">Contact Facility</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5 id="facilityName"></h5>
                    <form id="contactForm" onsubmit="submitForm(event)">
                        <input type="text" class="form-control" placeholder="Full Name" required>
                        <input type="email" class="form-control" placeholder="Email Address" required>
                        <input type="tel" class="form-control" placeholder="Phone Number" required>
                        <input type="text" class="form-control" placeholder="Subject" required>
                        <textarea class="form-control" rows="2" placeholder="Message (Optional)"></textarea>
                        <button type="submit" class="btn-submit-form">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection