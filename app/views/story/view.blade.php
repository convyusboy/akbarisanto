<div class="white-popup-block" style="max-width:600px; margin: 20px auto;">
	<style>
	.white-popup-block {z-index: 999; width:50%; height: 768px; background-color: #FFF;}
	#custom-content {left: 5%;}
	#custom-content h1 {font-weight:bold; font-size:30px; font-family:arial;width: 100%; margin-bottom: 10px;}
	#custom-content p {font-weight:500; font-size:17px; width: 100%;margin-bottom: 10px;}
	#custom-content img {left:50px; width: 90%; margin-bottom: 10px;}
	</style>
	<div id="custom-content" >
		<h1>{{$story->title}}</h1>
		<p>{{$story->content}}</p>
		<img src="{{asset('assets/uploads/story/'.$story->id.'.jpg')}}" />
	</div>
</div>