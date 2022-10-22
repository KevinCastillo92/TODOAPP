@extends('master')

@section('titulo')
	<h2>Registrar Tarea</h2>
	<hr>
@stop

@section('contenido')
<div class="col-xs-12">
	<form action="{{url('/guardarTarea')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
            <label for="fecha_hora">Fecha de Inicio:</label>
             <input name="fecha_hora" type="date" placeholder="Teclea fecha de inicio" class="form-control" required>
        </div>

		<div class="form-group">
			<label for="descripcion">Descripción:</label>
			<textarea name="descripcion" type="text" placeholder="Teclea la descripción de la tarea" class="form-control" required></textarea>
		</div>

		<div class="form-group">
            <label for="fecha_terminacion">Fecha de Terminación:</label>
             <input name="fecha_terminacion" type="date" placeholder="Teclea fecha de terminación" class="form-control" required>
        </div>		

		<div class="form-group">
			<label for="estatus">Estatus</label>
				<select name="estatus" class="form-control">
	            		<option value="0">Pendiente</option>
	            		<option value="1">Completada</option>										
	            </select>
		</div>

		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/tareas')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
@stop
