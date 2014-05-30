<!DOCTYPE html>

<html>
<head>
	<!-- title and favicon -->
	<title>Akbarisanto - Admin</title>
	<link rel="icon" href="{{asset('assets/images/RA_logo_blue.png')}}" type="image/png" sizes="16x16">

	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.4.min.js')}}"></script>
	<script src="{{asset('assets/js/dropzone.js')}}"></script>
	
	<link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}" />
</head>
<body>
	@if(Session::has('message'))
	<div id="message">{{ Session::get('message') }}</div>
	@endif

	@yield('content')
	<a href="{{url('admin/logout')}}">Logout</a>
</body>
</html>