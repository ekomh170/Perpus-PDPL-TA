<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard')</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('components.adminlte.navbar')

  <!-- Sidebar -->
  @include('components.adminlte.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    @include('partials.content-header')

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid mt-3">
        @yield('content')
      </div>
    </section>
  </div>

  <!-- Footer -->
  @include('components.adminlte.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
