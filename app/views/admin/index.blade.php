@extends('admin.layouts.master')

@section('content')

	<section class="panel col-md-12 panel-default">
		<div class="panel-body">
			Welcome, {{ Auth::user()->name }}
		</div>
	</section>

@endsection