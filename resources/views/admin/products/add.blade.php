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
		            {!! Form::select('category', getModulesArray(), 0, ['class' => 'form-control']) !!}
		        </div>
		    </div>

		    <div class="col-md-3">
		        <label for="name">Imagen destacada</label>
		        <div class="input-group">
		            <div class="input-group-prepend">
		                <div class="input-group-text"><i class="fas fa-image"></i></div>
		            </div>
		            <div class="custom-file">
		            	{!! Form::file('image', ['class' => 'custom-file-input', 'id' => 'file-input', 'lang' => 'es']) !!}
						<label class="custom-file-label" id="file-label" for="image">Seleccionar archivo</label>
					</div>
		        </div>
		    </div>
		</div>			

		<div class="row mtop16">
			<div class="col-md-4">
				<label for="price">Precio</label>
				<div class="input-group">
		            {!! Form::number('price', '0.001', ['class' => 'form-control', 
		            		'id' => 'price',
		            		'min' => '0.001', 
		            		'step' => 'any',
	            			'style' => 'text-align:right;']
		            	) 
            		!!}
		            <div class="input-group-append">
		                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></i></div>
		            </div>
		        </div>
			</div>

			<div class="col-md-4">
				<span>
					<label for="discount">Descuento</label>
					<div class="slider-checkbox">  
						<input type="checkbox" value="has-discount" id="discount-checkbox" name="check" checked />
						<label for="discount-checkbox"></label>
					</div>
				</span>
				<div class="input-group">

					{!! Form::number('discount', '0', ['class' => 'form-control', 
							'id' => 'discount',
	            			'min' => '0.00', 
	            			'max' => '100', 
	            			'step' => 'any',
	            			'style' => 'text-align:right;']
	            		) 
        			!!}	
					<div class="input-group-append">
		                <div class="input-group-text"><i class="fas fa-percentage"></i></div>
		            </div>
				</div>
			</div>

			<div class="col-md-4">
		        <label for="total-price" style="float: right; margin-right: 3em;">Total</label>
		        <div class="input-group">
		            {!! Form::text('total-price', '0.001', ['class' => 'form-control',
		            		'id' => 'total-price',
		            		'disabled',
	            			'style' => 'text-align:right;']
            			)
        			!!}	
		            <div class="input-group-append">
		                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
		            </div>
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
		// Update file input text box when file uploaded
		$('#file-input').on('change', function(event){
 			$('#file-label').text(event.target.value.substring(12));
		});

		// Update total price tag
		function updatePrice(price, discount) {
			if(discount > 0)
				price -= (price*discount/100);

			document.getElementById('total-price').value = price;
		};

		$('#price').on('change', function(event){
			updatePrice(event.target.value, document.getElementById('discount').value);
		});

		$('#discount').on('change', function(event){
			updatePrice(document.getElementById('price').value, event.target.value);
		});

		// Toggle discount input based on checkbox state
		$('#discount-checkbox').on('change', function() {
			var checked = $(this).is(':checked');
			$('#discount').prop('disabled', !checked);

			updatePrice(document.getElementById('price').value, checked ? document.getElementById('discount').value : 0)
		})
		
	</script>
@stop