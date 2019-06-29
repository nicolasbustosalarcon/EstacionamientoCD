@extends('layouts.app')

@section('title', 'Ver Estacionamientos')

@section('content')

<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="col">
	<h2>Lista de estacionamientos
	<a href="/estacionamientos/create"><button class='btn btn-info font-weight-bold '>Nuevo +</button></a></h2>
	</div>
		

		<table class="table text-center">
		  <thead>
		    <tr">
		    	<th scope="col">#</th>
		    	<th scope="col">Estado</th>
		    	<th scope="col">Módulo</th>
		    	<!--th scope="col">hora</th-->
		    	<th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($estacionamientos as $est)
			    <tr>
			       	<td>{{$est->id}}</td>
			    	<!----USO DE IF PARA DEFINIR LOS COLORES ROJO Y VERDE-->
			    	
		    		@if($est->estado === 'disponible')
						<td class="bg-success text-uppercase">{{$est->estado}}</td>	
					@endif
					@if($est->estado === 'ocupado')
						<td class="bg-danger text-uppercase">{{$est->estado}}</td>	
					@endif
				
					<!------------------------------------------------------>
					<td> {{$est->modulo}}</td>
					<!--td></td-->
					<td>	
						<a href="/estacionamientos/{{$est->id}}/edit" type="button" class="btn btn-warning ">Editar estacionamiento</a>
					</td>		      				     
			    </tr>
		    @endforeach
		  </tbody>
		</table>
	
</div>
<div class="col-md-3"></div>


@endsection