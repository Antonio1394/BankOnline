@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Servicio
                <small>Creación de servicio</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('admin.partials.alertSuccess')
            @include('admin.partials.alertErrors')

            <div class="box box-primary">
                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Crear Servicio</h3></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  {!!Form::open(['route' => 'admin.servicios.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}
                      <div class="content back-white">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-5">
                                    <label for="idTarjeta">Tarjeta:</label>
                                	{!!Form::select('idTarjeta', $cards, null, array('class' => 'form-control', 'required' => 'required'))!!}
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="fechaPago">Fecha</label>
                                	{!!Form::date('fechaPago', \Carbon\Carbon::now(), array('class' => 'form-control', 'placeholder' => 'Fecha', 'required' => 'required'))!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-5">
                                    <label for="monto">Monto</label>
                                	{!!Form::number('monto', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el monto', 'required' => 'required', 'step' => 'any'))!!}
                                </div>
                                <div class="form-group col-md-5">
                                	<label for="descripcion">Descripcion: </label>
                                	{!!Form::textarea('descripcion', null, array('class' => 'form-control', 'placeholder' => 'Ingrese la descripcion', 'required' => 'required', 'rows' => '4', 'cols' => '50'))!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-11 text-right">
                                    {!!Form::submit('Crear Deposito', array('class' => 'btn btn-primary'))!!}
                                </div>
                            </div>
                      </div>
                  {!!Form::close()!!}
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section>
    </aside>
@endsection

@section('scripts')
    {!!Html::script("js/jquery.validate.js")!!}

    <script type="text/javascript">
    $("#createForm").validate({
        rules: {
                monto: {
                  number: true
              },
              fechaPago: {
                  date: true
              }
            },///Fin de Reglas
        messages: {
                idTarjeta: {
                    required: "Por favor seleccione una tarjeta."
                },
                monto: {
                    required: "Por favor ingrese el monto.",
                    number: "Por favor ingrese solo numeros."
                },
                fechaPago: {
                    required: "Por favor ingrese una fecha.",
                    date: "Por favor ingrese una fecha valida."
                },
                descripcion: {
                    required: "Por favor ingrese una descripcion."
                }
            },///fin de messages
            submitHandler: function(form){
              $('#createForm .btn-primary').prop('disabled', true);
              form.submit();
            }///Fin Funcion Submit
          });

    </script>
@endsection
