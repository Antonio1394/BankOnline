
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
	$(document).ready(function () {
		hiddenFather();
		$('input:radio[name=distrito]').change(hiddenFather);
	});

    $("#createForm, #editForm").validate({
        rules: {
                cuenta_destino: {
                    required: true,
                },
                monto: {
                    required: true,
                }

             },
            messages: {
                cuenta_destino: {
                    required: 'Por favor Escoja una opción',
                },
            monto: {
                    required: "Por favor ingrese la dirección.",
                }

            }
			submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
