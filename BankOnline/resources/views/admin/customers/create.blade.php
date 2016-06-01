@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Clientes
                <small>Creación de clientes</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Crear cliente</h3></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  {!!Form::open(['route' => 'admin.clientes.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}
                      @include('admin.customers.partials.inputsCustomers')
                      @include('admin.customers.partials.inputsAccount')
                      @include('admin.customers.partials.inputsUsers')
                      <div class="content back-white">
                        <div class="row">
                            <div class="form-group col-md-11 text-right">
                                {!!Form::submit('Crear Boleta', array('class' => 'btn btn-primary'))!!}
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
    {!! Html::script("js/admin/clientes/create.js") !!}
@endsection
