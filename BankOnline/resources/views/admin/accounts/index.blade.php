@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cuentas
                <small>Estas en la pagina de cuentas</small>
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
                          <div class="col-md-6"><h3 class="box-title">Cuentas</h3></div>
                      </div>
                  </div>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Tipo de cuenta</th>
                              <th>Monto</th>
                              <th>Fecha de creacion</th>
                              <th>Estado</th>
                              <th>No. Cuenta</th>
                              <th>Cuentahabiente</th>
                              <th class="text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($accounts as  $key => $account)
                           <tr>
                               <td>{{ $key + 1   }}</td>
                               <td>{{ $account->tipo->descripcion }} </td>
                               <td>{{ $account->monto }} </td>
                               <td>{{ date("d/m/Y", strtotime($account->fechaCreacion)) }} </td>
                               <td>
                                   @if( $account->estado == true )
                                       <strong style="color:green;">Activa</strong>
                                   @else
                                       <strong style="color:red;">Desactiva</strong>
                                   @endif
                               </td>
                               <td>{{ $account->noCuenta }} </td>
                               <td>{{ $account->cliente->nombre }} {{ $account->cliente->apellido }}</td>
                               <td class="text-center">
                                   @if($account->estado == 0)
                                       <button type="button" name="delete" class="btn btn-success btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="cuentas/{{ $account->id }}" data-title="Eliminar Centro">Activar</button>
                                   @else
                                       <button type="button" name="delete" class="btn btn-danger btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="cuentas/{{ $account->id }}" data-title="Eliminar Centro">Desactivar</button>
                                   @endif
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
