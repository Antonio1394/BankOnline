@extends('layouts.layoutLogin')

@section('content')
    @if (count($errors) > 0)

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br><br>
                <div class="alert alert-danger alert-dismissable homeloader wow zoomInDown" data-wow-duration="1.5s">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Oh!</strong> Por favor corrige los siguientes errores.<br><br>
                    <ul>
                    	@foreach ($errors->all() as $error)
                    		<li>{{ $error }}</li>
                    	@endforeach
                    </ul>
        		</div>
            </div>

        </div>

	@endif

    {!!Form::open(['url' => 'auth/login', 'method' => 'POS', 'class' => 'login-form homeloader wow bounceInDown', 'data-wow-duration' => '1s', 'id' => 'send'])!!}

        <div class="login-wrap">
            <p class="login-img homeloader wow bounceInDown" data-wow-duration="1.5s"><i class="icon_lock_alt"></i></p>
            <div class="input-group wow fadeInLeft" data-wow-duration="1.5s">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'autofocus' => 'autofocus', 'required' => 'required'])!!}
            </div>
            <div class="input-group wow fadeInLeft" data-wow-duration="1.7s">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'required' => 'required'])!!}
            </div>
            {!!Form::submit('Iniciar Sesion', ['class' => 'btn btn-primary btn-lg btn-block homeloader wow bounceInDown', 'data-wow-duration' => '1.5s'])!!}
        </div>

    {!!Form::close()!!}

@endsection
