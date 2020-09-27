<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<a href="{{ url('/') }}">
				<img src="{{ url('static/images/logo.png') }}" alt="Logo" class="img-fluid">
			</a>
		</div>

		<div class="user">
			<span class="subtitle">Hola:</span>
			<div class="name">
				{{ Auth::user()->name }}
				{{ Auth::user()->lastname }}
			</div>
			<div class="logout">
				<a href="{{ url('/logout') }}" 
					class="badge badge-pill badge-primary"
					data-toogle="tooltip"
					data-placement="top"
					title="Salir"
				>
					<i class="fas fa-sign-out-alt"></i>
					Cerrar sesión
				</a>
			</div>
		</div>
	</div>

	<div class="main">
		<ul>
			<li>
				<a href="{{ url('/admin') }}">
					<i class="fas fa-home"></i>
					Dashboard
				</a>
			</li>
			<li>
				<a href="{{ url('/admin/products') }}">
					<i class="fas fa-boxes"></i>
					Productos				
				</a>
			</li>
			<li>
				<a href="{{ url('/admin/categories/0') }}">
					<i class="fas fa-tags"></i>
					Categorías
				</a>
			</li>			
			<li>
				<a href="{{ url('/admin/users') }}">
					<i class="fas fa-users"></i>
					Usuarios
				</a>
			</li>
		</ul>
	</div>
</div>