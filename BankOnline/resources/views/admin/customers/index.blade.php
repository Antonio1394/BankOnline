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
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>DPI</th>
                              <th>Dirección</th>
                              <th>Teléfono</th>
                              <th class="text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($customers as  $key => $customer)
                           <tr>
                               <td>{{ $key + 1   }}</td>
                               <td>{{ $customer->nombre }} </td>
                               <td>{{ $customer->apellido }} </td>
                               <td>{{ $customer->dpi }} </td>
                               <td>{{ $customer->direccion }} </td>
                               <td>{{ $customer->telefono }} </td>
                               <td class="text-center">
                                   <button type="button" name="edit" class="btn btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="clientes/{{ $customer->id }}/edit" data-title="Actualizar Cliente">Editar</button>
                                   <button type="button" name="delete" class="btn btn-warning btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="{{('MostrarTarjeta/' . $customer->id ) }}" data-title="Agregar Tarjeta">Agregar Tarjeta</button>
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
