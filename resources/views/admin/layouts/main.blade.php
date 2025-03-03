<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }} ">
  <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

      <ul class="navbar-nav ms-auto" style="margin-right: 55px">
          <!-- Authentication Links -->
          <li class="nav-item dropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  {{ __('Выйти') }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="pt-4 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('users') }}" class="nav-link">
            <i class="nav-icon fa fa-user-circle" aria-hidden="true"></i>
              <p>
              Пользователи
            </p>
          </a>
        </li>
      </li>

      <li class="nav-item">
        <a href="{{ route('record') }}" class="nav-link">
          <i class="nav-icon fa fa-envelope-open" aria-hidden="true"></i>
          <p>
            Заявки на прием
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin-record_doctor') }}" class="nav-link">
          <i class="nav-icon fa fa-calendar-check" aria-hidden="true"></i>
          <p>
            Записи к Врачу
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin-daily_accountings') }}" class="nav-link">
          <i class="fa fa-address-card" aria-hidden="true"></i>
          <p>
            Ежедневный учет
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin-patient_card') }}" class="nav-link">
          <i class="fa fa-id-card" aria-hidden="true"></i>
          <p>
            Карточка пациента
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">

        <p>
          Пользовательская часть
        <i class="fas fa-angle-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
          <a href="{{ route('admin-services') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Услуги</p>
          </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin-doctor') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Наши доктора</p>
          </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-chart') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>График работы</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-clinic') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>О клинике</p>
            </a>
          </li>
        </ul>
      </li>

</ul>




  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="max-width: 99%">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Стоматология Алия</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js"') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
</body>
</html>
