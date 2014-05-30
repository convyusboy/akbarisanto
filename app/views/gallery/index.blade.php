@extends('layouts.master')

@section('content')

<div id="wrapper">

	<div id="bg-group">
		<div id="bg0" class="yellow2"></div>
	</div>

	<div id="galleria1-title">Hotwheels</div>
	<div id="galleria1">
		<?php foreach ($galleries as $gallery) { 
			if ($gallery->type_id === 1) {?>
		<a href="{{asset('assets/uploads/gallery/'.$gallery->filename)}}"><img src="{{asset('assets/uploads/gallery/'.$gallery->filename)}}" data-title="$gallery->name" data-description="$gallery->desc"></a>
		<?php }} ?>

	</div>

<!-- 	<div id="galleria2-title">Collections</div>
	<div id="galleria2">
		<?php foreach ($galleries as $gallery) {
			if ($gallery->type_id === 1) {?>
		<a href="{{asset('assets/uploads/gallery/'.$gallery->filename)}}"><img src="{{asset('assets/uploads/gallery/'.$gallery->filename)}}" data-title="$gallery->name" data-description="$gallery->desc"></a>
		<?php }} ?>

	</div>
 -->
</div>

<script>
Galleria.loadTheme("{{asset('assets/js/themes/classic/galleria.classic.js')}}");
Galleria.run('#galleria1');
// Galleria.run('#galleria2');
</script>

@stop
