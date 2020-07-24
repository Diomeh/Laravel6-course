{{-- Inherith HTML from master --}}
@extends('connect.master')

{{-- Update Title --}}
@section('title', 'Login')

{{-- Page content --}}
@section('content')
<div class="box box-login shadow-lg p-3 mb-5 bg-white rounded">
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

		{{-- <div class="btn-group mtop16" role="group">
			{!! Form::submit('Ingresar', [
				'class' => 'btn btn-primary',
				'style' => 'border-right: 1px solid darkgray;'
			]) !!}

			{!! Form::button('¿Olvidaste tus datos?', [
				'class' => 'btn btn-primary',
				'style' => 'border-left: 1px solid darkgray;'
			]) !!}
		</div> --}}

		{!! Form::submit('Ingresar', ['class' => 'btn btn-primary mtop16']) !!}
	{!! Form::close() !!}
</div>
@stop

