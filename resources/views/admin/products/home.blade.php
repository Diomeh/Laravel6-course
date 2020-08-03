@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
	@include('breadcrumbs.admin.products.home')	
@endsection

@section('content-title')
	<i class="fas fa-boxes"></i>
	&nbsp Productos
@endsection

@section('content-inside')
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