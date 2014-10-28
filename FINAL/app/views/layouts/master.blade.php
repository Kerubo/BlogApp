<!doctype html>
<html>
<meta charset="UTF-8">
@include('includes.head')
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/cs\
s/bootstrap.min.css">

<link rel="stylesheet" href=" /asset/css/style.css">
 <link rel="stylesheet" href="/assets/css/layout.css" />
</head>

<body>
<div id="wrapper">

	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">

			@yield('content')

	</div>
	

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.j\
s"></script>
</body>
</html>
