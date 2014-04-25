@extends('layouts.master')

@section('content')

<div id="wrapper">

  <div id="bg3-group">
    <div id="bg3-color-1"></div>
  </div>

  <div id="custom-menu"></div>
  <div id="mybook">
    <?php foreach ($stories as $story) { ?>

    <div class="item">
      <div class="story_title">
        {{$story->title}}
      </div>
      <div class="story_content">
        {{$story->content}}
      </div>
      <div class="story_created">
        {{$story->created_at}}
      </div>
    </div>
    
    <?php } ?>
  </div>

  <script type="text/javascript">
  $(function() {
    $('#mybook').booklet({
      closed: true,
      covers: true,
      closedFrontTitle: 'Story of My Life',
      width: 1000,
      height: 800,
      menu: '#custom-menu',
      pageSelector: true,
      chapterSelector: true
    });
  });
  </script>
</div>

@stop
