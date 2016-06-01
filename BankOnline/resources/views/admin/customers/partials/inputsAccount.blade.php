<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h3>Datos de la cuenta</h3>
          <hr>
          <div class="row">
            <div class="form-group col-md-6">
              {!!Form::label('idTipo','Tipo de cuenta:')!!}
            	{!!Form::select('idTipo', $typeAccount, null, ['class' => 'form-control', 'required' => 'required'])!!}
            </div>

            <div class="form-group col-md-6">
            	<label for="monto">Monto</label>
            	{!!Form::number('monto', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el monto', 'required' => 'required', 'step' => 'any'))!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
            	<label for="fechaCreacion">Fecha</label>
            	{!!Form::date('fechaCreacion', null, array('class' => 'form-control', 'placeholder' => 'Fecha', 'required' => 'required'))!!}
            </div>
          </div>
        </div>
    </div>
</div>
