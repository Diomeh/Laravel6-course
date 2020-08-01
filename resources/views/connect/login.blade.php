{{-- Inherith HTML from master --}}
@extends('connect.master')

{{-- Update Title --}}
@section('title', 'Login')

{{-- Page content --}}
@section('content')
<div class="box center shadow-lg mb-5 bg-white rounded">
	<div class="header">
		<a href="{{ url('/') }}">
			<img src="{{ url('/static/images/logo.png') }}" alt="" class="img-fluid">
		</a>
	</div>

	<div class="inside">
		{!! Form::open(['url' => 'login']) !!}
			<label for="email">Correo electrónico</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="far fa-envelope"></i>
					</div>
				</div>
				{!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>
			
			<label class="mtop16" for="email">Contraseña</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fas fa-unlock-alt"></i>
					</div>
				</div>
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>

			{!! Form::submit('Ingresar', ['class' => 'btn btn-primary mtop16']) !!}
		{!! Form::close() !!}

		<div class="footer mtop16">
			<hr style="border-top: 2.5px solid #bbb; border-radius: 5px;">

			<div class="container">
				<div class="row">
					<label class="col" style="text-align: center;">¿No posees una cuenta aún?</label>
					<label class="col" style="text-align: center;">¿Olvidaste tus datos?</label>
				</div>
			</div>

			<div class="btn-group" role="group" aria-label="Botones de acción">
				<a href="{{ url('/register') }}" 
					class="btn btn-light" 
					style="border-right: 1px solid #bbb;">
					Regístrate
				</a>
				<a href="{{ url('/recover') }}" 
					class="btn btn-light" 
					style="border-left: 1px solid #bbb;">
					Recupéralos
				</a>
			</div>

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
</div>
@stop

