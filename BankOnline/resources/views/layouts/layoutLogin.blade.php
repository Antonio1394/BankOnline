@include('layouts.partialsLogin.head')
  <body class="login-img3-body">

    <div id="element" class="introLoading"></div>

    <div class="container">

      @yield('content')

    </div>

    @include('layouts.partialsLogin.scripts')


    <script type="text/javascript">
        $( "#send" ).submit(function( event ) {
            $("#send .btn-primary").prop('disabled', true);
        });
    </script>
  </body>
</html>
