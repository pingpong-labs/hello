@extends('admin.layouts.master')

@section('header')
	All Posts
@stop

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			All Posts
		</div>
			<table class="table table-responsive table-striped">
				<thead>
					<th class="text-center">No</th>
					<th>Author</th>
					<th>Title</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th class="text-center">Action</th>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<td class="text-center">{{ $no }}</td>
						<td>{{ $post->user->name }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->created_at }}</td>
						<td>{{ $post->updated_at }}</td>
						<td class="text-center">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Action 
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="{{ r('posts.show', $post->id) }}">Show</a></li>
									<li><a href="{{ r('posts.edit', $post->id) }}">Edit</a></li>
									<li class="divider"></li>
									<li><a href="#">Delete</a></li>
								</ul>
							</div>
						</td>
					</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{{ $posts->links() }}
			</div>
		<!-- </div> -->
	</div>

@endsection