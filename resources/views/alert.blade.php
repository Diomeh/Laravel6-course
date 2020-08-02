@if(Session::has('message'))
	<div class="container mtop16">
		<hr class="mtop16" id="divider" style="border-top: 1px solid #bbb; border-radius: 5px;">
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