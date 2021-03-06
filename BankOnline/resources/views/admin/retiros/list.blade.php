@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Retiros
                <small>Estas en la pagina de Retiros</small>
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
                          <div class="col-md-6"><h3 class="box-title">Retiros</h3></div>
                          <div class="col-md-6  text-right"><button type="button" name="create" class="btn btn-primary loadModal" data-toggle='modal' data-target='#generalModal' data-url="retiros/create " data-title="Crear Retiro">Generar Retiro</button></div>
                      </div>
                  </div>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th># de Cuenta</th>
                              <th>Monto</th>
                              <th>Fecha de Operacion</th>

                          </tr>
                      </thead>
                      <tbody>
                        @foreach($retiro as  $key => $data)
                           <tr>
                               <td>{{ $key + 1   }}</td>
                               <td>{{ $data->cuenta->noCuenta }} </td>
                               <td>{{ $data->monto }} </td>
                               <td>{{ date("d/m/Y", strtotime($data->fecha)) }}</td>

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
    {!!Html::script("js/jquery.validate.js")!!}
    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
        });
    </script>
@endsection
