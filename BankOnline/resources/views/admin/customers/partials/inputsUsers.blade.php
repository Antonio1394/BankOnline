<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h3>Datos del Usuario</h3>
          <hr>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="usuario">Usuario</label>
            	{!!Form::text('usuario', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Usuario', 'required' => 'required','id'=>'usuario'))!!}
            </div>

            <div class="form-group col-md-6">
              <label for="password">Password</label>
            	{!!Form::password('password',  array('class' => 'form-control', 'placeholder' => 'Inserte el Password del usuario', 'required' => 'required'))!!}
            </div>
          </div>
        </div>
    </div>
</div>
