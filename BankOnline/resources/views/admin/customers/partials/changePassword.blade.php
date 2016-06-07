{!! Form::model($customer, ['route' => ['admin.users.update', $customer->id], 'method' => 'PUT', 'class' => 'form-validate', 'id' => 'editForm']) !!}
    <div class="form-group col-md-12">
      <label for="password">Password</label>
        {!!Form::password('password',  array('class' => 'form-control', 'placeholder' => 'Inserte el Password del usuario', 'required' => 'required'))!!}
    </div>
    <div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}


{!!Html::script("js/jquery.validate.js")!!}
{!! Html::script("js/admin/clientes/create.js") !!}
