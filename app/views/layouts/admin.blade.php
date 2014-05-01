<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Akbarisanto</title>
	<meta name="author" content="Tim Berguru" />
	<meta name="description" content="Cari ilmu? Berguru aja" />
	<meta name="keywords"  content="berguru, ilmu, course, online, belajar, science, pengetahuan" />
	<meta name="Resource-type" content="Document" />
	
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.4.min.js')}}"></script>

</head>
<body>
	@if(Session::has('message'))
	<div id="message">{{ Session::get('message') }}</div>
	@endif

	@yield('content')
	<a href="{{url('admin/logout')}}">Logout</a>
</body>
</html>