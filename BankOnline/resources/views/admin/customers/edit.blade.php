{!! Form::model($customer, ['route' => ['admin.clientes.update', $customer->id], 'method' => 'PUT', 'class' => 'form-validate', 'id' => 'editForm']) !!}
    @include('admin.customers.partials.inputsCustomers')
    <div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}


{!!Html::script("js/jquery.validate.js")!!}
{!! Html::script("js/admin/clientes/create.js") !!}
