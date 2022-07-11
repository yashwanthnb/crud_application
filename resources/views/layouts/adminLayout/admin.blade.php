<!DOCTYPE html>
<html lang="en">
<head>
{{-- head --}}
@include('layouts.adminTemplates.head')
@yield("customcss")

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

{{-- header --}}
@include('layouts.adminTemplates.header')
{{-- left sidebar --}}
@include('layouts.adminTemplates.leftSidebar')

  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->
{{-- footer --}}
@include('layouts.adminTemplates.footer')

{{-- footerscript --}}
@include('layouts.adminTemplates.footerscript')
@yield("customjs")
</body>
</html>
