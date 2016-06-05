
<div class="form-group">
	{!! Form::hidden('idtipo', 2, ['id' => 'user_id']) !!}
	{!! Form::hidden('cuenta_origen',0, ['id' => 'user_id']) !!}

	<label for="">Numero de Cuenta</label>
	{!!Form::text('cuenta_destino', null, array('class' => 'form-control', 'placeholder' => 'Inserta el número de Cuenta', 'required' => 'required'))!!}
</div>
<div class="form-group">
	<label for="">Monto a Retirar</label>
	{!!Form::text('monto',null, array('class' => 'form-control', 'placeholder' => 'Inserta el Monto', 'required' => 'required'))!!}
</div>

<script type="text/javascript">
$("#createForm").validate({
		rules: {
						monto: {
							number: true
						}
				},///Fin de Reglas
		messages: {
						cuenta_destino: {
								required: "Por favor ingrese el No. Cuenta."
						},
						monto: {
								required: "Por favor ingrese el monto.",
								number: "Por favor ingrese solo numeros."
						}
				},///fin de messages
				submitHandler: function(form){
					$('#createForm .btn-primary').prop('disabled', true);
					form.submit();
				}///Fin Funcion Submit
			});

</script>
