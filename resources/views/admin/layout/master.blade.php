<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">

	<!-- Favicon -->
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

	<!-- Theme Script js -->
	<script src="{{ asset('js/theme-script.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

	<!-- Feather CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/icons/feather/feather.css')}}">

	<!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/tabler-icons/tabler-icons.min.css')}}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css')}}">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css')}}">

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-lite.min.css')}}">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">

	<!-- Color Picker Css -->
	<link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/%40simonwep/pickr/themes/nano.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>

{{-- header --}}
@include("admin.components.header")

{{-- sidebar --}}
@include("admin.components.sidebar")
 {{-- ✅ MAIN PAGE CONTENT YIELD HERE --}}
    @yield('content')
{{-- copyright --}}
@include("admin.components.copyright")



<script src="{{ asset("js/jquery-3.7.1.min.js") }}"></script>
<!-- Bootstrap Core JS -->
	<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

	<!-- Feather Icon JS -->
	<script src="{{ asset('js/feather.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>

	<!-- Chart JS -->
	<script src="{{ asset('plugins/apexchart/apexcharts.min.js')}}"></script>
	<script src="{{ asset('plugins/apexchart/chart-data.js')}}"></script>

	<!-- Chart JS -->
	<script src="{{ asset('plugins/chartjs/chart.min.js')}}"></script>
	<script src="{{ asset('plugins/chartjs/chart-data.js')}}"></script>

	<!-- Datetimepicker JS -->
	<script src="{{ asset('js/moment.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Daterangepikcer JS -->
	<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

	<!-- Summernote JS -->
	<script src="{{ asset('plugins/summernote/summernote-lite.min.js')}}"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

	<!-- Select2 JS -->
	<script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>

	<!-- Color Picker JS -->
	<script src="{{ asset('plugins/%40simonwep/pickr/pickr.es5.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('js/todo.js')}}"></script>
	<script src="{{ asset('js/theme-colorpicker.js')}}"></script>
	<script src="{{ asset('js/script.js')}}"></script>

<script src="{{ asset('scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="3531cf6022d405b4c7b78fc6-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"3ca157e612a14eccbb30cf6db6691c29","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>

</body>
</html>