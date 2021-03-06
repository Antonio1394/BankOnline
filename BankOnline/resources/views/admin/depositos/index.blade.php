@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Depositos
                <small>Estas en la pagina de depositos</small>
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
                          <div class="col-md-6"><h3 class="box-title">Depositos</h3></div>
                          <div class="col-md-6 text-right"><a href="{{ url('admin/depositos/create') }}" class="btn btn-primary" style="color: white;">Crear Depositos</a></div>
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
                              <th>Tipo Cuenta</th>
                              <th>Fecha de Operacion</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($depositos as  $key => $data)
                           <tr>
                               <td>{{ $key + 1   }}</td>
                               <td> {{ $data->Cuenta->noCuenta }} </td>
                               <td>{{ $data->monto }} </td>
                               <td> {{ $data->Cuenta->tipo->descripcion }} </td>
                               <td>{{ $data->fecha }} </td>
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
