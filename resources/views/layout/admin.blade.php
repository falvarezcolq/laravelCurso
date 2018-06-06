<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de matenimiento ITIC">
    <meta name="author" content="FAC">

	<title>Admin</title>

	<link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
	
	<div class="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Laravel -Curso</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="index.html">{{ Auth::user()->name }}</a>
                </li>
               
                <li class="dropdown">
                    
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
         
         
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> inicio</a>
                        </li>
                        <li>
                               <a href="#">
                            	<i class="fa fa-bar-chart-o fa-fw"></i> Usuarios<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('user')}}">Ver usuarios</a>
                                </li>
                                <li><a href="{{url('user/create')}}">Registrar usuario</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#">
                            	<i class="fa fa-industry fa-fw"></i> Producto<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('product/create')}}">Registrar producto</a>
                                </li>
                                <li>
                                    <a href="{{ url('product')}}">Listar productos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#">
                            	<i class="fa fa-industry fa-fw"></i> Profesiones<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('profession/create')}}">Registrar Profesion</a>
                                </li>
                                <li>
                                    <a href="{{ url('profession')}}">Listar profesiones</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#">
                            	<i class="fa fa-industry fa-fw"></i> Ventas<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('sale/create')}}">Registrar venta</a>
                                </li>
                                <li>
                                    <a href="{{ url('sale')}}">Listar ventas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
             @yield('content')
        </div>
        <!-- /#page-wrapper -->
	</div>


	<script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/metisMenu/metisMenu.min.js') }}"></script>   
    <script src="{{ asset('asset/dist/js/sb-admin-2.js') }}"></script>

    @section('scripts')
    @show
</body>
</html>