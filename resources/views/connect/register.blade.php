@extends('connect.master')

@section('title', 'Registro')

@section('content')
<div class="box center shadow-lg mb-5 bg-white rounded">
	<div class="header">
		<a href="{{ url('/') }}">
			<img src="{{ url('/static/images/logo.png') }}">
		</a>
	</div>

	<div class="inside">
		{!! Form::open(['url' => 'register']) !!}
			<label for="email">Nombres:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-user"></i>
					</div>
				</div>
				{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
			</div>

			<label for="email" class="mtop16">Apellidos:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="far fa-user"></i>
					</div>
				</div>
				{!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
			</div>

			<label for="email" class="mtop16">Correo electrónico:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="far fa-envelope"></i>
					</div>
				</div>
				{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
			</div>
			
			<label class="mtop16" for="email">Contraseña:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-unlock-alt"></i>
					</div>
				</div>
				{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
			</div>

			<label class="mtop16" for="email">Confirmar contraseña:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-unlock-alt"></i>
					</div>
				</div>
				{!! Form::password('cpassword', ['class' => 'form-control', 'required']) !!}
			</div>

			{!! Form::submit('Registrarse', ['class' => 'btn btn-primary mtop16']) !!}
		{!! Form::close() !!}
		<a href="{{ url('/login') }}" class="btn btn-light mtop16" style="border: 1px solid #bbb;">Cancelar</a>

		{{-- Display error messages --}}
		@if(Session::has('message'))
			<div class="container mtop16">
				<hr class="mtop16" id="divider" style="border-top: 2.5px solid #bbb; border-radius: 5px;">
				<div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
					{{ Session::get('message') }}
					@if($errors->any())
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					@endif
					<script>
						$('.alert').slideDown();
						setTimeout(function() { 
							$('.alert').slideUp();
							$('#divider').hide();
						 }, 10000)
					</script>
				</div>
			</div>
		@endif
	</div>
</div>
@stop