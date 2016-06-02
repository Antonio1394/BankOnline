{!! Form::open(['route' => 'admin.cuentas.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm']) !!}
    @include('admin.customers.partials.inputsAccount')
    <input type="hidden" name="idCliente" value="{{ $id }}">
    <div class="modal-footer">
		{!!Form::submit('Crear', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}


{!!Html::script("js/jquery.validate.js")!!}
{!! Html::script("js/admin/clientes/create.js") !!}
