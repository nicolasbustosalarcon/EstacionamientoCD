@extends ('layouts.app')

@section ('title', 'Estacionamiento Edit - ' .' ' .$estacionamientos->id)

@section ('content')
<div class="col-3"></div>
<div class="col-6">
<form class="form-group" method="POST" action="/estacionamientos/{{$estacionamientos->id}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<div class="form-group ">
		<label for="">Estado estacionamiento #{{$estacionamientos->id}}</label>
		<select name="estado" class="form-control" >
		<option value="{{$estacionamientos->estado}}">Actual: {{$estacionamientos->estado}}</option>
		
			@if($estacionamientos->estado === 'disponible')
					<option value="ocupado">ocupado</option>
			@endif
			@if($estacionamientos->estado === 'ocupado')
					<option value="disponible">disponible</option>
			@endif	

	

	</select>
		<label>Módulo</label>
		<input name="modulo" class="form-control" value="{{$estacionamientos->modulo}}" required></input>

		
	</div>
    <button type="submit" class="btn btn-primary">Editar</button>
    <a href="../"><button class='btn btn-danger'>Atrás</button></a>

</form>

</div>
<div class="col-3"></div>
@endsection
