<div class="form-group">
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
	{{ $errors->first('title', '<div class="text-danger">:message</div>') }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Slug:') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
	{{ $errors->first('slug', '<div class="text-danger">:message</div>') }}
</div>
<div class="form-group">
	{{ Form::label('body', 'Body:') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	{{ $errors->first('body', '<div class="text-danger">:message</div>') }}
</div>
<div class="form-group">
	{{ Form::label('image', 'Image:') }}
	{{ Form::file('image', ['class' => 'form-control']) }}
	{{ $errors->first('image', '<div class="text-danger">:message</div>') }}
</div>
<div class="form-group">
	{{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
</div>