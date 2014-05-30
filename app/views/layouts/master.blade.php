<!DOCTYPE html>

<html>
<head>
	<!-- title and favicon -->
	<title>Akbarisanto - Beta Version</title>
	<link rel="icon" href="{{asset('assets/images/RA_logo_blue.png')}}" type="image/png" sizes="16x16">

	<link rel="stylesheet" media="all" href="{{asset('assets/css/main.css')}}" />
	<link rel="stylesheet" media="all" href="{{asset('assets/css/buttons.css')}}" />
	<link rel="stylesheet" media="all" href="{{asset('assets/css/social-buttons.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('assets/css/story.css')}}"/>
    <link rel="stylesheet" media="all" href="{{asset('assets/css/jquery.booklet.1.1.0.css')}}"/>
    <link rel="stylesheet" media="all" href="{{asset('assets/css/magnific-popup.css')}}"/>
    <!-- <link rel="stylesheet" media="all" href="{{asset('assets/css/galleria.classic.css')}}"/> -->
	<!-- <link rel="stylesheet" media="all" href="{{asset('assets/css/animated-menu.css')}}" /> -->
	<!-- <link rel="stylesheet" media="all" href="{{asset('assets/css/jquery.booklet.latest.css')}}"> -->
	<!-- <link rel="stylesheet" media="all" href="{{asset('assets/css/akbarisanto.css')}}"> -->
	<!-- <link rel="stylesheet" media="all" href="{{asset('assets/css/fixed-positioning.css')}}"> -->
<!-- 	
	<script src="{{asset('assets/js/parallax.js')}}"></script>
 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="{{asset('assets/js/modernizr.custom.37797.js')}}"></script> 
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.4.min.js')}}"></script>
	<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('assets/js/jquery.booklet.latest.min.js')}}"></script>	
	<script src="{{asset('assets/js/skrollr.min.js')}}"></script>	
	<script src="{{asset('assets/js/animated-menu.js')}}"></script>
	<script src="{{asset('assets/js/galleria-1.3.5.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

	<!-- cufon -->
    <script src="{{asset('assets/cufon/cufon-yui.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/cufon/ChunkFive_400.font.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/cufon/Note_this_400.font.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      // Cufon.replace('h1,p,.b-counter');
      // Cufon.replace('.book_wrapper a', {hover:true});
      // Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
      // Cufon.replace('.reference a', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
      // Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily:'ChunkFive'});
    </script>
    <style>
    #galleria1 {position:absolute; left:25%; top:100px; width: 50%; height: 75%;}
    /*#galleria2 {position:absolute; left:51%; top:100px; width: 48%; height: 75%;}*/
    #galleria1-title {position:absolute; left:25%; top:65px; width: 50%; height: 75%; font-size: 20px; font-weight: bold; color: #FF8E8E;}
    /*#galleria2-title {position:absolute; left:51%; top:65px; width: 48%; height: 75%; font-size: 20px; font-weight: bold; color: #FF8E8E;}*/
	</style>
</head>
<body>
	<div id="topbar">	
		<!-- <a href="akbarisanto/public/"><img Part of img/topbar-logo.png" alt="akbarisanto" /></a> -->
		<ul>
			<li class="dblue1">
				<p><a href="{{url('home')}}">Home</a></p>
				<p class="subtext">The front page</p>
			</li>
			<li class="lblue1">
				<p><a href="{{url('work')}}">Work</a></p>
				<p class="subtext">All I do</p>
			</li>
			<li class="green1">
				<p><a href="{{url('story')}}">Story</a></p>
				<p class="subtext">Story of My Life</p>
			</li>
			<li class="yellow1">
				<p><a href="{{url('gallery')}}">Collection</a></p>
				<p class="subtext">My stuff</p>
			</li>
			<li class="purple1">
				<p><a href="{{url('about')}}">About</a></p>
				<p class="subtext">Part of me</p>
			</li>
			<li class="pink1">
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