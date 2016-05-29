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
                <div class="box-body text-center">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="wow animated zoomInRight titleWelcome" data-wow-delay=".2s"><i class="fa fa-stethoscope wow animated zoomInLeft" data-wow-delay=".5s"></i> <span class="wow animated zoomInDown" data-wow-delay=".9s">Bienvenido</span></h1>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

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
