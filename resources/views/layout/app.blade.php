<!DOCTYPE html>
<html>
<head>
	<title>Gestão de Clínica</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')

	<div class="container">

		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-4 col-lg-4">
				@yield('inc.sidebar')
			</div>

			<div class=" col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>

		</div>
	</div>


	<br/>
	<br/>
	<br/>
	<footer id="footerHD" class="text-center">
		<p>Desenvolvido por Daniela Mendes</p>
	</footer>
</body>
</html>