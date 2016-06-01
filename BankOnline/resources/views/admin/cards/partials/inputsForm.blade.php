
<div class="form-group">
	{!!Form::label('tipo','Tipo de Tarjeta:')!!}
	{!!Form::select('tipo', config('TipoTarjetas'), null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	<label for="">Numero de Tarjeta</label>
	{!!Form::text('numeroTarjeta', rand(11100,999985495), array('class' => 'form-control', 'placeholder' => 'Inserta el Nombre del centro', 'required' => 'required'))!!}
</div>
<div class="form-group">
	<label for="">Fecha de Vencimiento</label>
	{!!Form::date('fechaVencimiento', null, array('class' => 'form-control', 'placeholder' => 'Inserta la dirección del centro', 'required' => 'required'))!!}
</div>

<script type="text/javascript">
	$(document).ready(function () {
		hiddenFather();
		$('input:radio[name=distrito]').change(hiddenFather);
	});



    $("#createForm, #editForm").validate({
        rules: {
                tipo: {
                    required: true
                },
                numeroTarjeta: {
                    required: true
                },
				        fechaVencimiento: {
                  required: true
				        },

             },
            messages: {
                tipo: {
                    required: "Por favor Escoja una opción."
                },
                numeroTarjeta: {
                    required: "Por favor ingrese la dirección."
                },

            },
			submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
