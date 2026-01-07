<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Welcome to Admin Panel</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset("img/favicon.png") }}">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset("img/apple-touch-icon.png") }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="plugins/icons/feather/feather.css">

	<!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="plugins/tabler-icons/tabler-icons.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-white">

	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row">
					<div class="col-lg-5">
						<div class="d-lg-flex align-items-center justify-content-center d-none flex-wrap vh-100 bg-primary-transparent">
							<div>
								<img src="{{ asset("img/bg/authentication-bg-03.svg") }}" alt="Img">
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12">
						<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
							<div class="col-md-7 mx-auto vh-100">
								<form action="{{ route('login.submit') }}" method="POST" class="vh-100">
@csrf

<div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">

    <div class="mx-auto mb-5 text-center">
        <img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="Logo">
    </div>

    <div>
        <div class="text-center mb-3">
            <h2 class="mb-2">Sign In</h2>
            <p class="mb-0">Please enter your details to sign in</p>
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <div class="input-group">
                <input type="email" name="email" class="form-control border-end-0" required>
                <span class="input-group-text border-start-0">
                    <i class="ti ti-mail"></i>
                </span>
            </div>
        </div>

        {{-- Password --}}
        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="pass-group">
                <input type="password" name="password" class="pass-input form-control" required>
                <span class="ti toggle-password ti-eye-off"></span>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="form-check form-check-md mb-0">
                <input class="form-check-input" id="remember_me" name="remember" type="checkbox">
                <label for="remember_me" class="form-check-label mt-0">Remember Me</label>
            </div>

            <a href="#" class="link-danger">Forgot Password?</a>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </div>
    </div>

    <div class="mt-5 pb-4 text-center">
        <p class="mb-0 text-gray-9">
            Copyright © {{ date('Y') }} - Continuity Care |
            Developed By Vibrantick Infotech Solutions
        </p>
    </div>

</div>
</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="js/script.js"></script>

<script src="scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="685ff7b80562b765a543fbab-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

</html>