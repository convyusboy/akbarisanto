@extends('layouts.master')

@section('content')

<div id="wrapper">

 	<div id="bg-group">
 		<div id="bg1" class="dblue2"></div>
 		<div id="bg2" class="lblue2"></div>
 		<div id="bg3" class="green2"></div>
 		<div id="bg4" class="yellow2"></div>
 		<div id="bg5" class="purple2"></div>
 		<div id="bg6" class="pink2"></div>
 		<div id="bg7" class="white2"></div>
 	</div>

	<nav id="primary">
		<ul>
			<li>
				<h1>Welcome</h1>
				<a class="welcome" href="#welcome">View</a>
			</li>
			<li>
				<h1>Work</h1>
				<a class="work" href="#work">View</a>
			</li>
			<li>
				<h1>Story</h1>
				<a class="story" href="#story">View</a>
			</li>
			<li>
				<h1>Collection</h1>
				<a class="collection" href="#collection">View</a>
			</li>
			<li>
				<h1>About</h1>
				<a class="about" href="#about">View</a>
			</li>
			<li>
				<h1>Contact</h1>
				<a class="contact" href="#contact">View</a>
			</li>
			<li>
				<h1>Bye</h1>
				<a class="bye" href="#bye">View</a>
			</li>
		</ul>
	</nav>

	<div id="content">
		<article id="welcome">
			<header>
				<h1>Welcome</h1>
			</header>
			<p>Hello, you! This is my home page. Finally I have a website :)</p>
			<nav class="next-prev">
				<hr />
				<a class="next work" href="#work">Next</a>
			</nav>
		</article>

		<article id="work">
			<header>
				<h1>Work</h1>
			</header>
			<p>These are all of my works I've done up until now.</p>
			<nav class="next-prev">
				<a class="prev welcome" href="#welcome">Prev</a>
				<hr />
				<a class="next story" href="#story">Next</a>
			</nav>
		</article>

		<article id="story">
			<header>
				<h1>Story</h1>
			</header>
			<p>Do u want to know about my life? It's short, but I can guarantee that it's exciting ;)</p>
			<nav class="next-prev">
				<a class="prev work" href="#work">Prev</a>
				<hr />
				<a class="next collection" href="#collection">Next</a>
			</nav>
		</article>

		<article id="collection">
			<header>
				<h1>Collection</h1>
			</header>
			<p>These are all of my stuffs. I mean not all like all, but all that I want to show you.</p>
			<nav class="next-prev">
				<a class="prev story" href="#story">Prev</a>
				<hr />
				<a class="next about" href="#about">Next</a>
			</nav>
		</article>

		<article id="about">
			<header>
				<h1>About</h1>
			</header>
			<p>This is all about me.</p>
			<nav class="next-prev">
				<a class="prev collection" href="#collection">Prev</a>
				<hr />
				<a class="next contact" href="#contact">Next</a>
			</nav>
		</article>

		<article id="contact">
			<header>
				<h1>Contact</h1>
			</header>
			<p>Interested in me? Contact me!</p>
			<nav class="next-prev">
				<a class="prev about" href="#about">Prev</a>
				<hr />
				<a class="next bye" href="#bye">Next</a>
			</nav>
		</article>

		<article id="bye">
			<header>
				<h1>Bye</h1>
			</header>
			<p>Thank you for visiting me :) :)</p>
			<nav class="next-prev">
				<a class="prev contact" href="#contact">Prev</a>
				<hr />
			</nav>
		</article>
	</div>

	<!-- Parallax foreground -->
<!-- 	<div id="parallax-bg3">
		<img id="bg3-1" src="{{asset('assets/img/balloon.png')}}" width="529" height="757" alt="Montgolfier hot air balloon"/>
		<img id="bg3-2" src="{{asset('assets/img/balloon2.png')}}" width="603" height="583" alt="Frameless parachute"/>
		<img id="bg3-3" src="{{asset('assets/img/balloon3.png')}}" width="446" height="713" alt="Blanchard's air balloon"/>
		<img id="bg3-4" src="{{asset('assets/img/ground.png')}}" width="1104" height="684" alt="Landscape with trees and cows"/>
	</div>
 -->
	<!-- Parallax  midground clouds -->
	<div id="parallax-bg2">
		<img id="bg2-1" src="{{asset('assets/img/cloud-lg1.png')}}" alt="cloud"/>
		<img id="bg2-2" src="{{asset('assets/img/cloud-lg1.png')}}" alt="cloud"/>
		<img id="bg2-3" src="{{asset('assets/img/cloud-lg1.png')}}" alt="cloud"/>
		<img id="bg2-4" src="{{asset('assets/img/cloud-lg1.png')}}" alt="cloud"/>
		<img id="bg2-5" src="{{asset('assets/img/cloud-lg1.png')}}" alt="cloud"/>
	</div>

	<!-- Parallax  background clouds -->
	<div id="parallax-bg1">
		<img id="bg1-1" src="{{asset('assets/img/cloud-lg2.png')}}" alt="cloud"/>
		<img id="bg1-2" src="{{asset('assets/img/cloud-lg2.png')}}" alt="cloud"/>
		<img id="bg1-3" src="{{asset('assets/img/cloud-lg2.png')}}" alt="cloud"/>
		<img id="bg1-4" src="{{asset('assets/img/cloud-lg2.png')}}" alt="cloud"/>
	</div>

	<!-- Parallax  background planes -->
	<div id="parallax-bg4">
		<img id="bg4-1" src="{{asset('assets/img/plane2.png')}}" alt="plane"/>
		<img id="bg4-2" src="{{asset('assets/img/plane2.png')}}" alt="plane"/>
	</div>

	<!-- Parallax  background planes -->
	<div id="parallax-bg6">
		<img id="bg6-3" src="{{asset('assets/img/plane1.png')}}" alt="plane"/>
		<img id="bg6-4" src="{{asset('assets/img/plane1.png')}}" alt="plane"/>
	</div>

	<!-- Parallax  background planes -->
	<div id="parallax-bg5">
		<img id="bg5-1" src="{{asset('assets/img/plane3.png')}}" alt="plane"/>
		<!-- <img id="bg5-2" src="{{asset('assets/img/plane3.png')}}" alt="plane"/> -->
		<img id="bg5-3" src="{{asset('assets/img/plane3.png')}}" alt="plane"/>
		<img id="bg5-4" src="{{asset('assets/img/plane3.png')}}" alt="plane"/>
	</div>

</div>

<script src="{{asset('assets/js/parallax.js')}}"></script>

@stop