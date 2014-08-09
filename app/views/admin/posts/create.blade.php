@extends('admin.layouts.master')

@section('content')

	<div class="panel panel-default">
		<div class="panel-body">
			{{ Form::open(['files' => true, 'url' => r('posts.store')]) }}
				@include('admin.posts.form')
			{{ Form::close() }}
		</div>
	</div>

@endsection