@extends('layouts.app')

@section('title', 'Crear Estacionamientos')

@section('content')
<div class="col-4"></div>

<div class="col-3">
	<form class="form-group" method="POST" action="/estacionamientos">
		@csrf
		<div class="form-group">
			<!---INGRESO DE ESTADO DEL ESTACIONAMIENTO------------>
			<label for="">Estado</label>
			
			<select name="estado" class="form-control" required>
					<option disabled selected value>Selecionar...</option>
					<option value="disponible">disponible</option>
					<option value="ocupado">ocupado</option>
			</select>
			<!---------------------------------------------------->
			<!-----------INGRESO MODULO DEL ESTACIONAMIENTO------->
			<label for="">Módulo</label>
			
			<input name="modulo" class="form-control" required></input>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	    <a href="/estacionamientos"><button class='btn btn-danger'>Atrás</button></a>

	</form>
</div>
<div class="col-4"></div>

@endsection