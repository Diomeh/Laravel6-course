<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- Bootstrap 4 --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	{{-- Icons --}}
	<script src="https://kit.fontawesome.com/c7ca3a084e.js" crossorigin="anonymous"></script> 

	{{-- jQuery --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	{{-- ajax --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="{{ url('/static/libs/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ url('/static/js/admin.js') }}"></script>

	{{-- Init Bootstrap tooltips --}}
	<script>
		$(document).ready(function(){
			$('[data-toogle="tooltip"]').tooltip()
		})
	</script>

	@yield('head')

	<title>@yield('title') - My CMS</title>
</head>
<body>
	@yield('content')
	@yield('scripts')
</body>
</html>