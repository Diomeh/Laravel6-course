@extends('base')

@section('head')
	@parent
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">

	{{-- Font --}}
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
@stop

@section('content')
	<div class="wrapper">
		<div class="col1">
			@include('admin.sidebar')
		</div>
		<div class="col2">
			
				@include('alert')

				@yield('content')
			</div>
		</div>
	</div>
@stop