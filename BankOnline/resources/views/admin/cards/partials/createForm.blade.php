{!!Form::open(['route' => 'admin.tarjetas.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}

    @include('admin.cards.partials.inputsForm')

    <div class="modal-footer">
		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	 </div>
   {!! Form::hidden('idCuenta', $id, ['id' => 'user_id']) !!}
{!!Form::close()!!}
