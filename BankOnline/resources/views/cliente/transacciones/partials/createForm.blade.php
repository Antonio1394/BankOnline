{!!Form::open(['route' => 'admin.transacciones.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}

    @include('cliente.transacciones.partials.inputsForm')

    <div class="modal-footer">
		{!!Form::submit('Generar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	 </div>
{!!Form::close()!!}
