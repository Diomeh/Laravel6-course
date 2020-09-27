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
		<div class="col-md-4">
			<div class="container-fluid">
				<div class="panel shadow">
					<div class="header">
						<h2 class="title">
							<i class="fas fa-plus-square"></i>
							&nbsp Añadir categoría
						</h2>
					</div>

					<div class="inside">
						{!! Form::open(['url' => '/admin/category/add','class' => 'needs-validation', 'id' => 'needs-validation', 'novalidate']) !!}
							<div class="form-row">
								<div class="col-md-12">
									<label for="name">Nombre:</label>
							        <div class="input-group">
							            <div class="input-group-prepend">
							                <div class="input-group-text"><i class="fas fa-keyboard"></i></div>
							            </div>
							            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
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
							            {!! Form::select('module', getModulesArray(), null, ['class' => 'form-control', 'required']) !!}
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
							            {!! Form::text('icon', null, ['class' => 'form-control', 'required']) !!}
							            <div class="invalid-feedback">Es necesario un ícono</div>
							        </div>
								</div>
							</div>

							<div class="form-row mtop16">
								<div class="col-md-12">
									{!! Form::submit('Añadir', ['class' => 'btn btn-primary', 'id' => 'submit']) !!}
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>


		<div class="col-md">
			<div class="container-fluid">
				<div class="panel shadow">
					<div class="header">
						<h2 class="title">
							<i class="fas fa-tags"></i>
							&nbsp  Categorías
						</h2>
					</div>

					<div class="inside">
						<nav class="nav nav-pills nav.fill">
							@foreach(getModulesArray() as $m => $k)
								<a href="{{ url('/admin/categories/'.$m) }}" class="nav-link">{{ $k }}</a>
							@endforeach
						</nav>
						<table class="table mtop16">
							<thead>
								<tr>
									<th style="width: 32px;">Ícono</th>
									<th>Nombre</th>
									<th>Acciones</th>
								</tr>
							</thead>

							<tbody>
								@foreach($categories as $c)
									<tr>
										<td>{!! htmlspecialchars_decode($c->icon) !!}</td>
										<td>{{ $c->name }}</td>
										<td>
											<div class="btn-group">
												<a href="{{ url('admin/category/'.$c->id.'?action=edit') }}" 
													class="btn btn-primary"
													data-toogle="tooltip"
													data-placement="top"
													title="Editar">
													<i class="fas fa-user-edit"></i>
												</a>
												<a href="{{ url('admin/category/'.$c->id.'?action=delete') }}" 
													class="btn btn-primary"
													data-toogle="tooltip"
													data-placement="top"
													title="Borrar">
													<i class="fas fa-trash"></i>
												</a>
											</div>
										</td>		
									</tr>
								@endforeach
							</tbody>
						</table>
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