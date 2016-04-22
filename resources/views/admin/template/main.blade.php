<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'default') Document</title>
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body class="admin-body">

	{{-- incluir archivo con la barra de navegacion --}}
	@include('admin.template.partials.nav')

	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>

			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>
		</div>
	</section>

	<script src="{{ asset('plugins/jquery/jquery-2.2.3.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>

