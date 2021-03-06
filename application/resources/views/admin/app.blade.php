<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ trans('app.page.description') }}">
	<meta name="generator" content="BoNeMEAL">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="robots" content="noindex, nofollow">

	<title>{{ trans('app.page.title') }}</title>

	<link href="{{ asset('/styles/admin.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js"></script>
	<![endif]-->

	@yield('styles')
</head>
<body>
	<div id="wrapper">
		@include('partials.navigation', ['admin' => true])

		<div id="page-wrapper">			
			@yield('content')
			<br /><br />
		</div>
	</div>

	<script src="{{ asset('/scripts/admin.js') }}" type="text/javascript"></script>

	@yield('scripts')

	@include('partials.flash')
</body>
</html>
