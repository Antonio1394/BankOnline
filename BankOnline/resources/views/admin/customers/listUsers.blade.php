@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Usuarios
                <small>Estas en la pagina de Usuarios</small>
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
                          <div class="col-md-6"><h3 class="box-title">Usuarios</h3></div>
                      </div>
                  </div>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Cliente</th>
                              <th>Usuario</th>
                              <th>Correo</th>
                              <th>Estado</th>
                              <th class="text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($users as  $key => $user)
                           <tr>
                               <td> {{ $key + 1   }} </td>
                               <td> {{ $user->Cliente->nombre }} {{ $user->Cliente->apellido }} </td>
                               <td> {{ $user->usuario }} </td>
                               <td>{{ $user->email }} </td>
                               <td>
                                   @if( $user->estado == true )
                                       <strong style="color:green;">Activa</strong>
                                   @else
                                       <strong style="color:red;">Desactiva</strong>
                                   @endif
                               </td>
                               <td class="text-center">
                                   <button type="button" name="edit" class="btn btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="users/{{ $user->id }}/edit" data-title="Actualizar Contraseña">Editar Contraseña</button>
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
