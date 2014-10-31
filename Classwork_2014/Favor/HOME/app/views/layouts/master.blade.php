<!doctype html>
<html>
<head>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/layout.css" />
    <title>E-botics</title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">

			@yield('content')

	</div>
	<div class="sidebar">
		@include('includes.sidebar')
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js">
        </script>
</body>
</html>
