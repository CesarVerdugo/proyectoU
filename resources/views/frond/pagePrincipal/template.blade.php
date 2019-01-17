<!DOCTYPE html>
<html>
<head>

  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/document.css')}}">
	<title>@yield('title','programing C&J')</title>

<!--borrar -->
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

</head>
<body>
	@include('frond.store.partials.navbar')
	@include('frond.pagePrincipal.slider')
	@include('frond.pagePrincipal.promociones')
  
	@yield('content')






  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js') }}"></script>


  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>


<!--borrar -->
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
