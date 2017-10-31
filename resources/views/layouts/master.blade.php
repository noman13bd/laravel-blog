<!DOCTYPE html>
<html>
<head>
	<title>My App</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="/css/blog.css" rel="stylesheet">
</head>
<body>
	@include ('layouts.nav')
	<div class="container">
		<div class="row">
			@yield('content')
			@include ('layouts.sidebar')
		</div><!-- /.row -->
	</div><!-- /.container -->
	@include ('layouts.footer')
</body>
</html>