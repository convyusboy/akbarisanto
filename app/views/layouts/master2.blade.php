<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Akbarisanto</title>
	<meta name="author" content="Tim Berguru" />
	<meta name="description" content="Cari ilmu? Berguru aja" />
	<meta name="keywords"  content="berguru, ilmu, course, online, belajar, science, pengetahuan" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" media="all" href="{{asset('assets/css/main.css')}}" />
	<link rel="stylesheet" media="all" href="{{asset('assets/css/animated-menu.css')}}" />
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.booklet.latest.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/akbarisanto.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fixed-positioning.css')}}"> -->

	<script src="{{asset('assets/js/modernizr.custom.37797.js')}}"></script> 
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.4.min.js')}}"></script>
	<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('assets/js/jquery.booklet.latest.min.js')}}"></script>	
	<script src="{{asset('assets/js/skrollr.min.js')}}"></script>	
	<script src="{{asset('assets/js/parallax.js')}}"></script>
	<script src="{{asset('assets/js/animated-menu.js')}}"></script>
</head>
<body>
	<div id="topbar">	
		<!-- <a href="akbarisanto/public/"><img Part of img/topbar-logo.png" alt="akbarisanto" /></a> -->
		<ul>
			<li class="green">
				<p><a href="{{url('home')}}">Home</a></p>
				<p class="subtext">The front page</p>
			</li>
			<li class="yellow">
				<p><a href="{{url('work')}}">Work</a></p>
				<p class="subtext">All I do</p>
			</li>
			<li class="red">
				<p><a href="{{url('story')}}">Story</a></p>
				<p class="subtext">Story of My Life</p>
			</li>
			<li class="blue">
				<p><a href="{{url('gallery')}}">Gallery</a></p>
				<p class="subtext">My stuff</p>
			</li>
			<li class="purple">
				<p><a href="{{url('about')}}">About</a></p>
				<p class="subtext">Part of me</p>
			</li>
			<li class="black">
				<p><a href="{{url('contact')}}">Contact</a></p>
				<p class="subtext">Get in touch</p>
			</li>
		</ul>
	</div>

	@if(Session::has('message'))
	<div id="message">{{ Session::get('message') }}</div>
	@endif

	@yield('content')

</body>
</html>