@extends('layouts.sessions')

@section('content')

	<a class="navbar-brand block" href="index.html">
		Hello!
	</a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign in to get in touch</strong>
        </header>
		{{ Form::open(['route' => 'sessions.store']) }}
          <div class="list-group">
            <div class="list-group-item">
	            {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control no-border']) }}
				{{ $errors->first('username', '<div class="text-danger">:message</div>') }}
            </div>
            <div class="list-group-item">
	            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control no-border']) }}
				{{ $errors->first('password', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.html" class="btn btn-lg btn-default btn-block">Create an account</a>
        {{ Form::close() }}
      </section>

@endsection