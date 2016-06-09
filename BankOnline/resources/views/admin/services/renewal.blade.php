{!! Form::open(['route' => 'admin/servicio/renovar', 'method' => 'POST', 'class' => 'form-validate']) !!}
    <h3>Desea renovar su servicio para el año {{$newYear}}</h3>
    <input type="hidden" name="year" value="{{$newYear}}">
    <input type="hidden" name="idServicio" value="{{$idServicio}}">
    <div class="modal-footer">
		{!!Form::submit('Renovar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}
