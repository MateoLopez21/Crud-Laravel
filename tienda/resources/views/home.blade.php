@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> SportSize</h5></div>
			<div class="card-body">
				<h5>Hola <strong>{{ Auth::user()->name }},</strong> {{ __('has iniciado sesión en ') }}{{ (' SportSize') }}</h5>
				</br> 
				<hr>
								
			<div class="row w-100">
					<div class="col-md-3">
						<div class="card border-info mx-sm-1 p-3">
							<div class="text-info text-center mt-3"><h4>Clientes en línea</h4></div>
							<div class="text-info text-center mt-2"><h1>1.587</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-success mx-sm-1 p-3">
							<div class="text-success text-center mt-3"><h4>Productos Disponibles</h4></div>
							<div class="text-success text-center mt-2"><h1>12.732</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-danger mx-sm-1 p-3">
							<div class="text-danger text-center mt-3"><h4>Clientes Mensuales</h4></div>
							<div class="text-danger text-center mt-2"><h1>8.927</h1></div>
						</div>
					</div>
				 </div>				
			</div>
		</div>
	</div>
</div>
</div>
@endsection