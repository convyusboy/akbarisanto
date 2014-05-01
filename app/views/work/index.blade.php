@extends('layouts.master')

@section('content')

<div id="wrapper">

  <div id="bg2-group">
    <div id="bg2-color-1"></div>
  </div>

  <div id="buttonContainer">

    <div id="filters" class="button-group">  
      <h6>filters : </h6>
      <button data-filter='*' class="button small red">show all</button>
      <button data-filter='musicCategory' class="button small red">music</button>
      <button data-filter='webCategory' class="button small red">web</button>
      <button data-filter='gameCategory' class="button small red">game</button>
    </div>
    <div id="sorts" class="button-group">  
      <h6>sorts : </h6>
      <button data-sort-by='original-order' class="button small red rounded">original order</button>
      <button data-sort-by='work_title' class="button small red rounded">work title</button>
      <button data-sort-by='work_content' class="button small red rounded">work content</button>
    </div>    
  </div>

  <div id="container">
    <?php foreach ($works as $work) { $cat = Category::find($work->category_id)->name; ?>
    <div class="item {{$cat}}">
      <div class="work_created">
        {{$work->created_at}}
      </div>
      <br>
      <div class="work_title">
        {{$work->title}}
      </div>
      <br>
      <div class="work_content">
        {{$work->content}}
      </div>
      <div class="category">
        {{$work->category_id}}
      </div>
    </div>
    <?php } ?>
  </div>

</div>

<script type="text/javascript">
$(".category").hide();
var $container = $('#container');
  // initialize
  $container.isotope({
    getSortData: {
      work_content: '.work_content',
      work_title: '.work_title'
    }
  });  
// hash of functions that match data-filter values
var filterFns = {
  musicCategory: function() {
    var number = $(this).find('.category').text();
    return parseInt( number, 10 ) == 1;
  },
  webCategory: function() {
    var number = $(this).find('.category').text();
    return parseInt( number, 10 ) == 2;
  },
  gameCategory: function() {
    var number = $(this).find('.category').text();
    return parseInt( number, 10 ) == 3;
  }
};
// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  // use filter function if value matches
  filterValue = filterFns[ filterValue ] || filterValue;
  $container.isotope({ filter: filterValue });
});
// sort items on button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $container.isotope({ sortBy: sortByValue });
});
</script>

@stop
