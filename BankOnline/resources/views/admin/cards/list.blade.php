@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Clientes
                <small>Estas en la pagina de clientes</small>
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
                          <div class="col-md-6"><h3 class="box-title">Clientes</h3></div>
                          <div class="col-md-6 text-right"><a href="{{ url('admin/clientes/create') }}" class="btn btn-primary" style="color: white;">Crear Cliente</a></div>
                      </div>
                  </div>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th># Tarjeta</th>
                              <th>Cuenta</th>
                              <th>Tipo</th>
                              <th>Fecha Vencimiento</th>
                              <th>Cliente</th>
                              <th class="text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($tarjeta as  $key => $data)
                           <tr>
                               <td>{{ $key + 1   }}</td>
                               <td>{{ $data->numeroTarjeta }} </td>
                               <td>{{ $data->cuenta->noCuenta }} </td>
                               @if($data->tipo==1)
                               <td>Debito</td>
                               @else
                               <td>Credito</td>
                               @endif
                               <td>{{ $data->fechaVencimiento }} </td>
                               <td>{{ $data->cuenta->cliente->nombre }} </td>
                               <td class="text-center">
                                   <button type="button" name="edit" class="btn btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="" data-title="Actualizar Centro">Ver Movimientos</button>

                               </td>
                           </tr>
                       @endforeach
                      </tbody>
                  </table>
              </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
      @include('admin.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
        });
    </script>
@endsection
