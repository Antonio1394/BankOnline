@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inicio
                <small>Estas en la pagina de inicio</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box  box-primary">
                <div class="box-body">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                              <h4><strong>Nombre: </strong>{{$Cliente->nombre.$Cliente->apellido}}</h4>
                              <h4><strong>DPI: </strong>  {{$Cliente->dpi}}</h4>
                              <h4><strong>Correo: </strong>  {{$Cliente->email}}</h4>
                              <h4><strong>Dirección: </strong>  {{$Cliente->direccion}}</h4>
                              <h4><strong>Teléfono: </strong>  {{$Cliente->telefono}}</h4>
                              <h4><strong>Beneficiario:  </strong> {{$Cliente->beneficiario}}</h4>
                              <h4><strong>Usuario: </strong>  {{$Usuario->usuario}}</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box box-primary">
                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Servicios</h3></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            @foreach($alertServers as  $key => $data)
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <h3>
                                                {{ $data->monto }}
                                            </h3>
                                            <p>
                                                {{ $data->descripcion }}
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-shopping-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">
                                            Pagar <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div><!-- ./col -->
                            @endforeach
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });
    </script>
@endsection
