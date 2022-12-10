@extends('layouts.app')
@section('title', __('Bienvenido'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> SportSize </h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				{{ __('Bienvenido a ') }} {{ ('SporStize') }} ! </br>
				Por favor inicia sesión o regístate para ingresar.
                
			@else
					Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection