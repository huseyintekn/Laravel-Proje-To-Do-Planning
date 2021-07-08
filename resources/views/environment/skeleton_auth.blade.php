<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('name', 'HSYN TKN') }} - @yield('title')</title>

		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Scripts -->
		<script src="{{ asset('assets/plugins/jquery/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.js') }}"></script>
		<script src="{{ asset('assets/plugins/popper/js/popper.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/asst/js/general.js') }}"></script>

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/css/jquery-ui.structure.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/asst/css/general.css') }}">

	</head>
	<body class="auth">
		<main id="auth">
			<section class="section">@yield('content')</section>
		</main>
	</body>
</html>
