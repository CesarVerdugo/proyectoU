<!doctype html>
<html lang="es">

<head>
  <title>Sistema de venta online.</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--     Fonts and icons     -->

  <!-- Material Kit CSS -->
  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <link href="{{asset('css/select/css/bootstrap-select.min.css')}}" rel="stylesheet">



@yield('link')

</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="row">
      <div class="col-lg-2" >
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
           <div class="sidebar-wrapper" >
              <ul class="nav">
                <li class="nav-item active  ">
                  <a class="nav-link" href="{{url('/')}}">
                      <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a  class="nav-link" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-unlock-alt"></i><span>Administración</span>
                  </a>
                </li>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a class="nav-link" href="{{route("users.index")}}"><i class="fas fa-user"></i> <span>Usuarios</span></a>
                </li>
                <li>
                    <a class="nav-link" href="{{route("roles.index")}}"><i class="fas fa-user-tie"></i> <span>Roles</span></a>
                </li>
                <li>
                    <a class="nav-link" href="{{route("permissions.index")}}"><i class="fas fa-user-tag"></i><span>Permisos</span></a>
                </li>
                <li>
                    <a class="nav-link" href="{{route("users_roles.index")}}"><i class="fas fa-address-book"></i><span>Asignación de rol</span></a>
                </li>
                <li>
                    <a class="nav-link" href="{{route("role_permissions.index")}}"><i class="fas fa-address-card"></i><span>Asignación de permiso</span></a>
                </li>
              </ul>
                <li class="nav-item ">
                      <a class="nav-link" href="{{route("purchases.index")}}">
                      <i class="fas fa-shopping-cart"></i>
                        <p>Compras</p>
                      </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("sales.index")}}">
                    <i class="fas fa-money-bill-alt"></i>
                    <p>Ventas</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("category.index")}}">
                    <i class="fab fa-product-hunt"></i>
                    <p>Categorias</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("products.index")}}">
                    <i class="fab fa-product-hunt"></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("clients.index")}}">
                      <i class="fas fa-users"></i>
                    <p>Clientes</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("commentaries.index")}}">
                  <i class="fas fa-comment-alt"></i>
                    <p>Cometarios</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route("quotations.index")}}">
                  <i class="fas fa-clipboard-list"></i>
                    <p>Cotización</p>
                  </a>
                </li>
          </ul>
    </div>
  </div>
</div>

<div class="col-lg-10" id="contenido" >

<div class="content" style="padding-right:10px;padding-left:10px " >

          @yield('content')

</div>
</div>
</div>
</div>

    <!-- End Navbar -->

<div class="fixed-plugin" style="margin-top:-7%;">
  <div class="dropdown show-dropdown" style="color:#000">
    <a href="#" data-toggle="dropdown" >
      <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="nav-item dropdown" >

      <div class="dropdown-menu dropdown-menu-right" style="background-color: transparent;color:#000" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="javascript:void(0)">Ayuda</a>

        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                             <i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;Cerrar

                                       </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                </form>
      </div>

    </ul>
  </div>
</div>

</div>
  @yield('script')
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js') }}"></script>

  <script src="{{asset('js/select/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script src="{{asset('js/document.js')}}"></script>
    <script src="{{asset('js/datatable.js') }}"></script>
  <script src="{{asset('js/sweetalert.min.js')}}"></script>


</body>

</html>
