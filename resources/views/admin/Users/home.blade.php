@extends('admin.master')

@section('title', 'Usuarios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin/users') }}" class="nav-link">
			<i class="fas fa-users"></i>
			Usuarios
		</a>
	</li>
@endsection

@section('content-title')
	<i class="fas fa-users"></i>
	Usuarios
@endsection

@section('content-header')
@endsection

@section('content-inside')
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>E-mail</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $u)
				<tr>
					<td>{{ $u->id }}</td>
					<td>{{ $u->name }}</td>
					<td>{{ $u->lastname }}</td>
					<td>{{ $u->email }}</td>
					<th>
						<div class="btn-group">
							<a href="{{ url('admin/user/'.$u->id.'?action=edit') }}" 
								class="btn btn-primary"
								data-toogle="tooltip"
								data-placement="top"
								title="Editar">
								<i class="fas fa-user-edit"></i>
							</a>
							<a href="{{ url('admin/user/'.$u->id.'?action=delete') }}" 
								class="btn btn-primary"
								data-toogle="tooltip"
								data-placement="top"
								title="Borrar">
								<i class="fas fa-trash"></i>
							</a>
						</div>
					</th>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection