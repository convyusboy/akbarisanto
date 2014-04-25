@extends('layouts.master')

@section('content')

<div id="wrapper">
	<div class="bg" id="bg1" data-0="top:0%" data-1366="top:-120%"></div>
	<div class="bg" id="bg2" data-1366="top:0%;" data-2732="top:-120%;"></div>
	<div class="bg" id="bg3" data-2732="top:0%;" data-4098="top:-120%;"></div>
	<div class="bg" id="bg4" data-4098="top:0%;" data-5464="top:-120%;"></div>
	<div class="bg" id="bg5" data-5464="top:0%;" data-6830="top:-120%;"></div>
	<div class="bg" id="bg6" data-6830="top:0%;" data-8196="top:-120%;"></div>
	<div class="bg" id="bg7" data-8196="top:0%;"></div>
	<!-- <div id="bg2" data-0="display:none;" data-924="display:block;" data-1024="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-2048="background:rgba(0,0,0,1);color:rgb(255,255,255); top:0%;" data-2148="top:-100%;"></div> -->

	<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>

	<div id="properties" data-0="color:rgb(0,0,0); top:0%; display:block;" data-1366="top:-120%;display:none;">
		<h2>welcome</h2>
	</div>
	<div id="properties" data-0="top:100%;" data-1366="top:0%; display:block;" data-2732="top:-120%;display:none;">
		<h2><a href="{{url('work')}}">work</a></h2>
	</div>
	<div id="properties" data-1366="top:100%;" data-2732="top:0%; display:block;" data-4098="top:-120%;display:none;">
		<h2><a href="{{url('story')}}">story</a></h2>
	</div>
	<div id="properties" data-2732="top:100%;" data-4098="top:0%; display:block;" data-5464="top:-100%;display:none;">
		<h2><a href="{{url('gallery')}}">galler y</a></h2>
	</div>
	<div id="properties" data-4098="top:100%;" data-5464="top:0%; display:block;" data-6830="top:-100%;display:none;">
		<h2><a href="{{url('about')}}">about</a></h2>
	</div>
	<div id="properties" data-5464="top:100%;" data-6830="top:0%; display:block;" data-8196="top:-100%;display:none;">
		<h2><a href="{{url('contact')}}">contact</a></h2>
	</div>
	<div id="properties" data-6830="top:100%;" data-8196="top:0%; display:block;">
		<h2>bye</h2>
	</div>

	<nav id="primary">
		<ul>
			<li>
				<h1>Welcome</h1>
				<a href="#welcome">View</a>
			</li>
			<li>
				<h1>Work</h1>
				<a href="#work">View</a>
			</li>
			<li>
				<h1>Story</h1>
				<a href="#story">View</a>
			</li>
			<li>
				<h1>Gallery</h1>
				<a href="#gallery">View</a>
			</li>
			<li>
				<h1>About</h1>
				<a href="#about">View</a>
			</li>
			<li>
				<h1>Contact</h1>
				<a href="#contact">View</a>
			</li>
			<li>
				<h1>Bye</h1>
				<a href="#bye">View</a>
			</li>
		</ul>
	</nav>

	<div id="content">
		<article id="welcome">
			<header>
				<h1>Welcome</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="work">
			<header>
				<h1>Work</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="story">
			<header>
				<h1>Story</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="gallery">
			<header>
				<h1>Gallery</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="about">
			<header>
				<h1>About</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="contact">
			<header>
				<h1>Contact</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>

		<article id="bye">
			<header>
				<h1>Bye</h1>
			</header>
			<p></p>
			<nav class="next-prev">
				<hr />
				<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
			</nav>
		</article>
	</div>
</div>

<!-- <div id="intro" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
	<h1><a href="https://github.com/Prinzhorn/skrollr">skrollr</a></h1>
	<h2>parallax scrolling for the masses</h2>
	<p>let's get scrollin' ;-)</p>
	<p class="arrows">▼&nbsp;▼&nbsp;▼</p>
</div>
-->
<!-- <div id="transform" data-500="transform:scale(0) rotate(0deg);" data-1000="transform:scale(1) rotate(1440deg);opacity:1;" data-1600="" data-1700="transform:scale(5) rotate(3240deg);opacity:0;">
	<h2>transform</h2>
	<p>scale, skew and rotate the sh** out of any element</p>
</div>
-->
<!-- <div id="properties" data-1700="top:100%;" data-2200="top:0%;" data-3000="display:block;" data-3700="top:-100%;display:none;">
	<h2>all numeric properties</h2>
	<p>width, height, padding, font-size, z-index, blah blah blah</p>
</div>
-->
<!-- <div id="easing_wrapper" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(0,0,0,1);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
	<div id="easing" data-3900="left:100%" data-4600="left:25%;">
		<h2>easing?</h2>
		<p>sure.</p>
		<p>let me dim the <span data-3900="" data-4900="color[swing]:rgb(0,0,0);" data-5900="color:rgb(255,255,0);">lights</span> for this one...</p>
		<p data-5900="opacity:0;font-size:100%;" data-6500="opacity:1;font-size:150%;">you can set easings for each property and define own easing functions</p>
	</div>

	<div class="drop" data-6500="left:15%;bottom:100%;" data-9500="bottom:0%;">linear</div>
	<div class="drop" data-6500="left:25%;bottom[quadratic]:100%;" data-9500="bottom:0%;">quadratic</div>
	<div class="drop" data-6500="left:35%;bottom[cubic]:100%;" data-9500="bottom:0%;">cubic</div>
	<div class="drop" data-6500="left:45%;bottom[swing]:100%;" data-9500="bottom:0%;">swing</div>
	<div class="drop" data-6500="left:55%;bottom[WTF]:100%;" data-9500="bottom:0%;">WTF</div>
	<div class="drop" data-6500="left:65%;bottom[inverted]:100%;" data-9500="bottom:0%;">inverted</div>
	<div class="drop" data-6500="left:75%;bottom[bounce]:100%;" data-9500="bottom:0%;">bounce</div>
</div>
-->
<!-- <div id="download" data-10000="top[cubic]:100%;border-radius[cubic]:0em;background:rgb(0,50,100);border-width:0px;" data-12000="top:10%;border-radius:2em;background:rgb(190,230,255);border-width:10px;">
	<h2>the end</h2>
	<p>by the way, you can also animate colors (you did notice this, didn't you?)</p>
	<p>
		<strong>
			Now get this thing on <a href="https://github.com/Prinzhorn/skrollr">GitHub</a> and spread the word, it's open source!
		</strong> 
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://prinzhorn.github.com/skrollr/" data-via="Prinzhorn">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</p>
	<p>Check out more <a href="https://github.com/Prinzhorn/skrollr/tree/master/examples#examples">examples</a>.</p>
	<p>Handcrafted by 
		<a href="https://twitter.com/Prinzhorn" class="twitter-follow-button" data-show-count="false">Follow @Prinzhorn</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</p>
</div>
-->
<div id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>

<!-- <script type="text/javascript" src="dist/skrollr.min.js"></script>

<script type="text/javascript" src="../skrollr-ie/dist/skrollr.ie.min.js"></script>
 -->
<script type="text/javascript">
var s = skrollr.init({
	edgeStrategy: 'set',
	easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}
});
</script>

@stop
