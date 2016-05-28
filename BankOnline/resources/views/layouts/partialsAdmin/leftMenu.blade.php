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
                <p>Hola, {{ Auth::user()->user }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
          @if( Auth::user()->state == 1 )
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span> Inicio</span>
                </a>
            </li>

            @if( Auth::user()->tipo_usuario_id == 1 )

                <li>
                    <a href="{{ url('admin/users') }}">
                        <i class="fa fa-user"></i> <span>Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/centros') }}">
                        <i class="fa fa-bell-o"></i> <span>Centros de Salud</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/TiposCentros') }}">
                        <i class="fa fa-circle-o-notch" aria-hidden="true"></i> <span>Tipos de Centro</span>
                    </a>
                </li>
            @endif

            @if( Auth::user()->tipo_usuario_id != 1 )
              <li>
                  <a href="{{ url('admin/boleta/create') }}">
                      <i class="fa fa-plus"></i> <span> Crear Boleta</span>
                  </a>
              </li>

              @if( Auth::user()->tipo_usuario_id == 2 )
                <li>
                  <a href="{{ url('admin/boleta') }}">
                    <i class="fa fa-list" aria-hidden="true"></i> <span>Reporte Semanal</span>
                  </a>
                </li>
              @endif

            @endif

            @if( Auth::user()->tipo_usuario_id != 3 )
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-bar-chart" aria-hidden="true"></i> <span> Reportes</span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>

                  <ul class="treeview-menu">
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-globe"></i> <span> Generales </span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>

                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ url('admin/reports/no_cesarias') }}">
                            <i class="fa fa-angle-right"></i> <span> Cesáreas anteriores </span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/no_abortos') }}">
                            <i class="fa fa-angle-right"></i> <span> Abortos</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/no_embarazos') }}">
                            <i class="fa fa-angle-right"></i> <span> Embarazos</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/no_partos') }}">
                            <i class="fa fa-angle-right"></i> <span> Partos</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato6/1') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes por preclampsia/eclampsia</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato11/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes por ITU</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato2/3') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con enfermedad renal</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato4/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con factor RH negativo</span>
                          </a>
                        </li>
                      </ul>

                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-calendar"></i> <span> Por edad</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>

                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ url('admin/reports/dato2/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes embarazadas adolescentes (10 a 19 años)</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato3/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes embarazadas mayores de 35 años</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-stethoscope"></i> <span> Por enfermedad</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>

                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ url('admin/reports/dato6/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con VIH</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato4/3') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con hipertensión</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato1/3') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con diabetes</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('admin/reports/dato8/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con anemia</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-medkit"></i> <span> Por estado nutricional</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>

                      <ul class="treeview-menu">
                        <li>
                          <a href="{{ url('admin/reports/dato9/2') }}">
                            <i class="fa fa-angle-right"></i> <span> Pacientes con desnutrición u obesidad</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </li>
            @endif
        </ul>
        @else
        <script>window.location.href = "auth/logout";</script>
        @endif
    </section>
    <!-- /.sidebar -->
</aside>
