@extends('admin.master')

@section('title', 'Categorías')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin') }}" class="nav-link">
			<i class="fas fa-home"></i>
			&nbsp Dashboard
		</a>
	</li>

	<li class="breadcrumb-item active" aria-current="page">
		<div class="nav-link">
			<i class="fas fa-tags"></i>
			&nbsp Categorías
		</div>
	</li>
@endsection

@section('page')
	<div class="row">
		<div class="col-md">
			<div class="container-fluid">
				<div class="panel shadow">
					<div class="header">
						<h2 class="title">
							<i class="fas fa-user-edit"></i>
							&nbsp Editar categoría
						</h2>
					</div>

					<div class="inside">
						{!! Form::open(['url' => '/admin/category/'.$category->id.'/edit','class' => 'needs-validation', 'id' => 'needs-validation', 'novalidate']) !!}
							<div class="form-row">
								<div class="col-md-12">
									<label for="name">Nombre:</label>
							        <div class="input-group">
							            <div class="input-group-prepend">
							                <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
							            </div>
							            {!! Form::text('name', $category->name, ['class' => 'form-control', 'required']) !!}
							            <div class="invalid-feedback">El nombre no puede estar en blanco</div>
							        </div>
								</div>
							</div>

							<div class="form-row mtop16">
								<div class="col-md-12">
									<label for="module">Módulo:</label>
							        <div class="input-group">
							            <div class="input-group-prepend">
							                <div class="input-group-text"><i class="fas fa-tags"></i></div>
							            </div>
							            {!! Form::select('module', getModulesArray(), $category->module, ['class' => 'form-control', 'required']) !!}
							            <div class="invalid-feedback">Debe escoger un módulo</div>
							        </div>
								</div>
							</div>

							<div class="form-row mtop16">
								<div class="col-md-12">
									<label for="icon">Ícono:</label>
							        <div class="input-group">
							            <div class="input-group-prepend">
							                <div class="input-group-text"><i class="fas fa-image"></i></div>
							            </div>
							            {!! Form::text('icon', $category->icon, ['class' => 'form-control', 'required']) !!}
							            <div class="invalid-feedback">Es necesario un ícono</div>
							        </div>
								</div>
							</div>

							<div class="form-row mtop16">
								<div class="col-md-12">
									{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'submit']) !!}
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
 
@section('scripts')
	@parent

	@include('formFeedback')	
@endsection