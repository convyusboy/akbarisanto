@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Work List</h3>
        <div class="table-responsive">
          <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Content</th>
                <th>Button</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($works as $work) { ?>
              <tr>
                <td>{{$work->id}}</td>
                <td>{{Category::find($work->category_id)->name}}</td>
                <td>{{$work->title}}</td>
                <td>{{$work->content}}</td>
                <td><a href="{{url('/admin/work/update/'.$work->id)}}">Edit</a> <a href="{{url('/admin/work/delete/'.$work->id)}}">Delete</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="form-group">
          <a href={{url('/admin/work/create')}} >
            <button class="btn">
              Create Work
            </button>
          </a>
        </div>
      </div>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->
