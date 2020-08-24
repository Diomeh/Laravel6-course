@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin') }}" class="nav-link">
			<i class="fas fa-home"></i>
			&nbsp Dashboard
		</a>
	</li>

	<li class="breadcrumb-item active" aria-current="page">
		<div class="nav-link">
			<i class="fas fa-boxes"></i>
			&nbsp Productos
		</div>
	</li>
@endsection

@section('content-title')
	<i class="fas fa-boxes"></i>
	&nbsp Productos
@endsection

@section('page-content')
	<div class="btn-group">
		<a href="{{ url('/admin/products/add') }}" class="btn btn-primary">
			<i class="fas fa-plus-square"></i>
			&nbsp Añadir producto
		</a>
	</div>

	<table class="table">
		<thead>
			
		</thead>

		<tbody>
			
		</tbody>
	</table>
@endsection