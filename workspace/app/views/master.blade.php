<!doctype html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
<link href="assets/Fonts/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>

	@include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container" style="margin:20px auto; background:#fff;">

	<div id="main" class="row">

			@yield('content')

	</div>
	
	<div class="sidebar">
		@include('includes.sidebar')
	</div>

	 <!-- <footer class="footer">
		@include('includes.footer')
	</footer> -->
	@include('alert')

</div>
</body>
</html>
