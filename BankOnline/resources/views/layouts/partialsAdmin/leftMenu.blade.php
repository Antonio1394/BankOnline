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
          <li>
              <a href="{{ url('admin/clientes') }}">
                  <i class="fa fa-users"></i> <span> Clientes</span>
              </a>
          </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
