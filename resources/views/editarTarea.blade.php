@extends('master')

@section('titulo')
	<h2>Editar Tarea</h2>
	<hr>
@stop

@section('contenido')
<div class="col-xs-12">
	<form action="{{url('actualizarTarea')}}/{{$tareas->id}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label for="fecha">Fecha de Inicio:</label>
			<input name="fecha" type="date" placeholder="Teclea la fecha de inicio" class="form-control" value="{{$tareas->fecha}}" required>
		</div>

		<div class="form-group">
			<label for="descripcion">Descripción:</label>
			<textarea name="descripcion" type="text" placeholder="Teclea la descripción de la tarea" class="form-control" required>{{$tareas->descripcion}}</textarea>
		</div>

		<div class="form-group">
			<label for="fecha_terminacion">Fecha de Terminación:</label>
			<input name="fecha_terminacion" type="date" placeholder="Teclea la fecha de terminación" class="form-control" value="{{$tareas->fecha_terminacion}}" required>
		</div>		

		<div class="form-group">
			<label for="estatus">Estatus</label>
				<select name="estatus" class="form-control">
					@if ($tareas->estatus=='1')					
	            		<option value="0">Pendiente</option>
	            		<option value="1" selected>Completada</option>
	            	@else
	            		<option value="0" selected>Pendiente</option>
	            		<option value="1">Completada</option>
	            	@endif												
	            </select>
		</div>

		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/tareas')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
@stop