<!DOCTYPE html>
<html>
<head>
	<title>My CMS - @yield('title')</title>
	
	<!-- Required meta tags --> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- CSS stylesheet path --> 
	<link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">

	<!-- Font -->
	<script src="https://kit.fontawesome.com/c7ca3a084e.js" crossorigin="anonymous"></script> 
</head>
<body>
	@section('content')
	@show
</body>
</html>