<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hola</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          @if( Auth::user()->idCliente == 1 )
          <li>
              <a href="{{ url('admin/clientes') }}">
                  <i class="fa fa-users"></i> <span> Clientes</span>
              </a>
          </li>
          <li>
              <a href="{{ url('admin/tarjetas') }}">
                  <i class="fa fa-credit-card-alt"></i> <span> Tarjetas</span>
              </a>
          </li>
          <li>
              <a href="{{ url('admin/cuentas') }}">
                  <i class="fa fa-money"></i> <span> Cuentas</span>
              </a>
          </li>
          <li>
              <a href="{{ url('admin/retiros') }}">
                  <i class="fa fa-arrow-up"></i> <span>Retiros</span>
              </a>
          </li>
          <li>
              <a href="{{ url('admin/depositos') }}">
                  <i class="fa fa-arrow-down"></i> <span>Depositos</span>
              </a>
          </li>
          @else
          <li>
              <a href="{{ url('admin/tarjetas') }}">
                  <i class="fa fa-credit-card-alt"></i> <span> Cuentas</span>
              </a>
          </li>
          <li>
              <a href="{{ url('admin/transacciones') }}">
                  <i class="fa fa-exchange"></i> <span>Transferencias</span>
              </a>
          </li>
        </ul>
        @endif

    </section>
    <!-- /.sidebar -->
</aside>
