
<div class="form-group">
	{!! Form::hidden('cuenta_origen',$cuentaOrigen, ['id' => 'cuentaOrigen']) !!}

<label for="">Cuenta de Destino:</label>
	{!!Form::text('cuenta_destino', null, array('class' => 'form-control', 'placeholder' => 'Inserta el número de Cuenta', 'required' => 'required','id'=>'destino'))!!}
</div>
<div class="form-group">
	<label for="">Monto de a Transferir:</label>
	{!!Form::number('monto',null, array('class' => 'form-control', 'placeholder' => 'Inserta el Monto', 'required' => 'required','id'=>'monto'))!!}
</div>
<input type="hidden" name="fecha" value="{{ \Carbon\Carbon::now() }}">

<label class="form-group" id="msg" style="display:none;"></label>


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
					$('#msg').css('display', 'none');
					$.ajax({
                url: 'transacciones/VerificarCuenta/' + $( "#destino" ).val()+'/'+$( "#monto" ).val()+'/'+$( "#cuentaOrigen" ).val(),
                type: "get",
                 success: function(response){

									 if(response=='noExiste'){
										 $("#msg").html('Esta Cuenta no Existe');
                           $('#msg').css('display', 'inline');
                           $('#msg').css('color', '#f56954');
									 }
									 else{
											 if(response=='no'){
												 $("#msg").html('La cuenta Actualmente Esta desactivada');
 	                            $('#msg').css('display', 'inline');
 	                            $('#msg').css('color', '#f56954');
											 }//Fin de else Principal
											 else{
												 if(response=='menor'){
													 form.submit();
												 }else{
													 $("#msg").html('El monto que Desea retirar Es mayor al saldo en la Cuenta');
													 $('#msg').css('display', 'inline');
													 $('#msg').css('color', '#f56954');
												 }
											 }

										 }
                 }
              });


				}///Fin Funcion Submit
			});

</script>
