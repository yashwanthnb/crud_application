<!DOCTYPE html>
<html lang="en">
<head>

@include('layouts.createAdminTemplate.head')


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts.createAdminTemplate.header')

@include('layouts.createAdminTemplate.leftsidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->

@include('layouts.createAdminTemplate.footer')

@include('layouts.createAdminTemplate.footerscript')





</body>
</html>
