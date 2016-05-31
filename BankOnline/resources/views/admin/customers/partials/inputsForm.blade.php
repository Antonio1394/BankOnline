<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h3>Datos del cliente</h3>
          <hr>
          <div class="row">
            <div class="form-group col-md-6">
            	<label for="nombre">Nombre</label>
            	{!!Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required' => 'required'))!!}
            </div>

            <div class="form-group col-md-6">
            	<label for="apellido">Apellidos</label>
            	{!!Form::text('apellido', null, array('class' => 'form-control', 'placeholder' => 'Ingrese los apellidos', 'required' => 'required'))!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
            	<label for="dpi">DPI</label>
            	{!!Form::text('dpi', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el DPI', 'required' => 'required'))!!}
            </div>

            <div class="form-group col-md-6">
            	<label for="direccion">Dirección</label>
            	{!!Form::text('direccion', null, array('class' => 'form-control', 'placeholder' => 'Ingrese la dirección ', 'required' => 'required'))!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
            	<label for="telefono">Teléfono</label>
            	{!!Form::text('telefono', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el telefono'))!!}
            </div>

            <div class="form-group col-md-6">
            	<label for="">Correo Electrónico</label>
            	{!!Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el Correo Electrónico','id'=>'correo'))!!}
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
            	<label for="beneficiario">Beneficiario</label>
            	{!!Form::text('beneficiario', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el beneficiario'))!!}
            </div>
          </div>
        </div>
    </div>
</div>
