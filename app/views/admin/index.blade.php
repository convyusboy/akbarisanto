@extends('layouts.admin')

@section('content')
<div class="page-content">
	<div class="page-header">
		<h1>
			Dashboard
			<small>
				<i class="icon-double-angle-right"></i>
			</small>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

			<div class="row">
				<div class="col-sm-6">
					<div class="widget-box transparent">
						<div class="widget-header widget-header-flat">
							<h4 class="lighter">
								<i class="icon-star orange"></i>
								Menu Utama
							</h4>

						</div>

						<div class="widget-body">
							<a href="{{url('admin/work')}}" class="btn btn-lg"><span class="glyphicon glyphicon-book"></span><br> Work</a> 
							<a href="{{url('admin/story')}}" class="btn btn-lg"><span class="glyphicon glyphicon-user"></span><br> Story</a> 
							<a href="{{url('admin/gallery')}}" class="btn btn-lg"><span class="glyphicon glyphicon-envelope"></span><br> Gallery</a> 
						</div>
					</div><!-- /widget-box -->

				</div><!-- /span -->
			</div><!-- /row -->

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>

@stop