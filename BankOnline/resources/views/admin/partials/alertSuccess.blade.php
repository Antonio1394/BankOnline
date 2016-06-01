@if( Session::has('message') )
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert alert-success alert-dismissable homeloader wow animated fadeInDown" id="error">
                <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b>Alerta!</b> {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif
