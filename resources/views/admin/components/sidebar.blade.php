<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<!-- Logo -->
	<div class="sidebar-logo">
		<a href="index.html" class="logo logo-normal">
			<img src="{{ asset("assets/images/logo/hozlogo.webp") }}" alt="Logo">
		</a>
		<a href="index.html" class="logo-small">
			<img src="{{ asset("img/logo-small.svg") }}" alt="Logo">
		</a>
		<a href="index.html" class="dark-logo">
			<img src="{{ asset("img/logo-white.svg") }}" alt="Logo">
		</a>
	</div>
	<!-- /Logo -->
	<div class="modern-profile p-3 pb-0">
		<div class="text-center rounded bg-light p-3 mb-4 user-profile">
			<div class="avatar avatar-lg online mb-3">
				<img src="{{ asset("img/profiles/avatar-02.jpg") }}" alt="Img" class="img-fluid rounded-circle">
			</div>
			<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
			<p class="fs-10">System Admin</p>
		</div>
		<div class="sidebar-nav mb-3">
			<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
				<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
				<li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
				<li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-header p-3 pb-0 pt-2">
		<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
			<div class="avatar avatar-md onlin">
				<img src="{{ asset("img/profiles/avatar-02.jpg") }}" alt="Img" class="img-fluid rounded-circle">
			</div>
			<div class="text-start sidebar-profile-info ms-2">
				<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
				<p class="fs-10">System Admin</p>
			</div>
		</div>
		<div class="input-group input-group-flat d-inline-flex mb-4">
			<span class="input-icon-addon">
				<i class="ti ti-search"></i>
			</span>
			<input type="text" class="form-control" placeholder="Search in HRMS">
			<span class="input-group-text">
				<kbd>CTRL + / </kbd>
			</span>
		</div>
		<div class="d-flex align-items-center justify-content-between menu-item mb-3">
			<div class="me-3">
				<a href="calendar.html" class="btn btn-menubar">
					<i class="ti ti-layout-grid-remove"></i>
				</a>
			</div>
			<div class="me-3">
				<a href="chat.html" class="btn btn-menubar position-relative">
					<i class="ti ti-brand-hipchat"></i>
					<span
						class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
				</a>
			</div>
			<div class="me-3 notification-item">
				<a href="activity.html" class="btn btn-menubar position-relative me-1">
					<i class="ti ti-bell"></i>
					<span class="notification-status-dot"></span>
				</a>
			</div>
			<div class="me-0">
				<a href="email.html" class="btn btn-menubar">
					<i class="ti ti-message"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>MAIN MENU</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class="active subdrop">
								<i class="ti ti-smart-home"></i>
								<span>Dashboard</span>
							</a>

						</li>
					</ul>
				</li>
				
				
				<li class="menu-title"><span>CRM</span></li>
				<li>
					<ul>
						<li>
							<a href="contacts-grid.html">
								<i class="ti ti-user-shield"></i><span>Contacts</span>
							</a>
						</li>
						
						
					</ul>
				</li>
				
				<li class="menu-title"><span>RECRUITMENT</span></li>
				<li>
					<ul>
						<li>
							<a href="job-grid.html">
								<i class="ti ti-timeline"></i><span>Jobs</span>
							</a>
						</li>
						<li>
							<a href="candidates-grid.html">
								<i class="ti ti-user-shield"></i><span>Candidates</span>
							</a>
						</li>
						<li>
							<a href="refferals.html">
								<i class="ti ti-ux-circle"></i><span>Referrals</span>
							</a>
						</li>
					</ul>
				</li>
			
				
				<li class="menu-title"><span>CONTENT</span></li>
				<li>
					<ul>
						<li>
							<a href="pages.html">
								<i class="ti ti-box-multiple"></i><span>Pages</span>
							</a>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);">
								<i class="ti ti-brand-blogger"></i><span>Blogs</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="blogs.html">All Blogs</a></li>
								<li><a href="blog-categories.html">Categories</a></li>
								<li><a href="blog-comments.html">Comments</a></li>
								<li><a href="blog-tags.html">Blog Tags</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);">
								<i class="ti ti-map-pin-check"></i><span>Locations</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="countries.html">Countries</a></li>
								<li><a href="states.html">States</a></li>
								<li><a href="cities.html">Cities</a></li>
							</ul>
						</li>
						<li>
							<a href="testimonials.html">
								<i class="ti ti-message-2"></i><span>Testimonials</span>
							</a>
						</li>
						<li>
							<a href="faq.html">
								<i class="ti ti-question-mark"></i><span>FAQ’S</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>PAGES</span></li>
				<li>
					<ul>
						<li>
							<a href="starter.html">
								<i class="ti ti-layout-sidebar"></i><span>Starter</span>
							</a>
						</li>
						<li>
							<a href="profile.html">
								<i class="ti ti-user-circle"></i><span>Profile</span>
							</a>
						</li>
						<li>
							<a href="gallery.html">
								<i class="ti ti-photo"></i><span>Gallery</span>
							</a>
						</li>
						<li>
							<a href="search-result.html">
								<i class="ti ti-list-search"></i><span>Search Results</span>
							</a>
						</li>
						<li>
							<a href="timeline.html">
								<i class="ti ti-timeline"></i><span>Timeline</span>
							</a>
						</li>
						<li>
							<a href="pricing.html">
								<i class="ti ti-file-dollar"></i><span>Pricing</span>
							</a>
						</li>
						<li>
							<a href="coming-soon.html">
								<i class="ti ti-progress-bolt"></i><span>Coming Soon</span>
							</a>
						</li>
						<li>
							<a href="under-maintenance.html">
								<i class="ti ti-alert-octagon"></i><span>Under Maintenance</span>
							</a>
						</li>
						<li>
							<a href="under-construction.html">
								<i class="ti ti-barrier-block"></i><span>Under Construction</span>
							</a>
						</li>
						<li>
							<a href="api-keys.html">
								<i class="ti ti-api"></i><span>API Keys</span>
							</a>
						</li>
						<li>
							<a href="privacy-policy.html">
								<i class="ti ti-file-description"></i><span>Privacy Policy</span>
							</a>
						</li>
						<li>
							<a href="terms-condition.html">
								<i class="ti ti-file-check"></i><span>Terms & Conditions</span>
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->