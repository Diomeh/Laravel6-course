@extends('admin.master')

@section('title', 'Añadir Productos')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin') }}" class="nav-link">
			<i class="fas fa-home"></i>
			&nbsp Dashboard
		</a>
	</li>

	<li class="breadcrumb-item">
		<a href="{{ url('/admin/products') }}" class="nav-link">
			<i class="fas fa-boxes"></i>
			&nbsp Productos
		</a>
	</li>

	<li class="breadcrumb-item active" aria-current="page">
		<div class="nav-link">
			<i class="fas fa-boxes"></i>
			&nbsp Añadir producto
		</div>
	</li>
@endsection

@section('content-title')
	<i class="fas fa-boxes"></i>
	&nbsp Productos - Añadir
@endsection

@section('page-content')
	{!! Form::open(['url' => '/admin/products/add']) !!}
		<div class="row">
		    <div class="col-md-6">
		        <label for="name">Nombre del producto</label>
		        <div class="input-group">
		            <div class="input-group-prepend">
		                <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
		            </div>
		            {!! Form::text('name', null, ['class' => 'form-control']) !!}
		        </div>
		    </div>

		    <div class="col-md-3">
		        <label for="name">Categoría</label>
		        <div class="input-group">
		            <div class="input-group-prepend">
		                <div class="input-group-text"><i class="fas fa-tags"></i></div>
		            </div>
		            {!! Form::select('category', ['L' => 'Large', 'S' => 'Small'], 'S', ['class' => 'form-control']) !!}
		        </div>
		    </div>

		    <div class="col-md-3">
		        <label for="name">Imagen destacada</label>
		        <div class="input-group">
		            <div class="input-group-prepend">
		                <div class="input-group-text"><i class="fas fa-image"></i></div>
			            <div class="custom-file">
			            	{!! Form::file('image', ['class' => 'custom-file-input', 'id' => 'customFile', 'lang' => 'es']) !!}
							<label class="custom-file-label" for="image">Seleccionar archivo</label>
						</div>
		            </div>

		        </div>
		    </div>
		</div>

		<div class="row mtop16">
			<div class="col-md-6">
				<label for="price">Precio</label>
				<div class="input-group">
		            <div class="input-group-prepend">
		                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></i></div>
		            </div>
		            {!! Form::number('price', null, ['class' => 'form-control', 
		            		'min' => '0.001', 
		            		'step' => 'any']
		            	) 
            		!!}
		        </div>
			</div>

			<div class="col-md-6">
				<label for="discount">Descuento</label>
					<div class="input-group">
			            <div class="input-group-prepend">
			                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></i></div>
			            </div>
			            {!! Form::number('discount', null, ['class' => 'form-control', 
		            			'min' => '0.1', 
		            			'max' => '100', 
		            			'step' => 'any']
		            		) 
            			!!}
			        </div>
				</div>
			</div>

		<div class="row mtop16">
			<div class="col-md-12">
				<label for="description">Descripción</label>
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="row mtop16">
			<div class="col-md-3">
				<div class="btn-group">
					{!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
					<a href="{{ url('/admin/products') }}" class="btn btn-primary">Cancelar</a>
				</div>
			</div>
		</div>
	{!! Form::close() !!}

	<script>
		$(document).ready(function() {
			$('#file-input').on('change', function(event){
	 			$('#file-label').text(event.target.value.substring(12));
			});
		})
	</script>
@stop