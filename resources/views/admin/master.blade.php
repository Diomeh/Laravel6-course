@extends('base')

@section('head')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
@endsection

<div class="wrapper">
	<div class="col1">
		@include('admin.sidebar')
	</div>
	<div class="col2">
		<nav class="navbar navbar-expand-lg shadow">
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="{{ url('/admin') }}" class="nav-link">
							<i class="fas fa-home"></i>
							Dashboard
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="page">
			<div class="container-fluid">
				<nav aria-label="breadcrumb shadow">
					<ol class="breadcrumb">
						@section('breadcrumb')
							@include('breadcrumbs.admin.dashboard')
						@show
					</ol>
				</nav>
			</div>
		
			@include('alert')

			{{-- @section('content') --}}
				<div class="container-fluid">
					<div class="panel shadow">
						<div class="header">
							<h2 class="title">@yield('content-title')</h2>
							@yield('content-header')
						</div>

						<div class="inside">
							@yield('content-inside')
						</div>
					</div>
				</div>
			{{-- @show --}}

		</div>
	</div>
</div>