@extends('master')

@section('titulo')
<h2>
	TODO APP
</h2>
@stop 

@section('contenido')
<div class="col-xs-12">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Fecha de inicio</th>
				<th>Descripción</th>
				<th>Fecha de terminación</th>				
				<th>Estatus</th>   
				<th>
					<a href="{{url('/registrar')}}" class="btn btn-success btn-xs">Registrar nueva tarea</a>
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($tareas as $tarea)
			<tr> 
				<td>{{$tarea->fecha}}</td>
				<td>{{$tarea->descripcion}}</td>
				<td>{{$tarea->fecha_terminacion}}</td>
	            <td>
	                @if($tarea->estatus==1)
	                    <span class="label label-success">COMPLETADA</span>
	                @endif	                     
	                @if($tarea->estatus==0) 
	                    <span class="label label-warning">PENDIENTE</span>      
	                @endif 
	            </td>
				<td>
					<a href="{{url('/editarTarea')}}/{{$tarea->id}}" class="btn btn-xs btn-primary">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$tarea->id}}">
					  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</td>
			</tr>
		<!-- Modal -->
		<div class="modal fade" id="modal{{$tarea->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar la Tarea?</h4>
		      </div>
		      <div class="modal-body">
		        ¡No se podrá recuperar el registro!
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <a href="{{url('/eliminarTarea')}}/{{$tarea->id}}" class="btn btn-danger">Eliminar</a>
		      </div>
		    </div>
		  </div>
		</div>
		@endforeach
	</table>

</div>
@stop