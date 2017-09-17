<!DOCTYPE html>
<html>
<head>
  <title>@yield('title') #InMov</title>
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="{{asset('plugins/fullcalendar/lib/jquery.min.js')}}"></script>
 
 <script src="{{asset('plugins/bootstrap/js/jquery-2.2.3.min.js')}}"></script>

  @yield('head')
  
  <!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>m</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IN</b>mov</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
    


      </div> 
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- search form (Optional) -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
           <!-- <li class="header">HEADER</li>-->
        <!-- Optionally, you can add icons to the links -->
        

        <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>Clientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Crear</a></li>
            <li><a href="#">Otro</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-home"></i> <span>Propiedades</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Crear</a></li>
            <li><a href="#">Otro</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-eye"></i> <span>Publicaciones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Crear</a></li>
            <li><a href="#">Otro</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i> <span>Documentos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Crear</a></li>
            <li><a href="#">Otro</a></li>
          </ul>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
       
    @yield('cabecera')
     
  
    </section>

    <!-- Main content -->
    <section class="content">

     @yield('cuerpo')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Prototipo Funcional
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">TercerPunto</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->

@yield('scripts')

<!-- Bootstrap 3.3.6 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('plugins/bootstrap/js/app.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>