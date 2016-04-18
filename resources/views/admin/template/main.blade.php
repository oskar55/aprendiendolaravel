<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'default') Document</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>

	{{-- incluir archivo con la barra de navegacion --}}
	@include('admin.template.partials.nav')
	@yield('content')
	

	<script src="{{ asset('plugins/jquery/jquery-2.2.3.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>