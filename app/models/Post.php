<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'body' 	=> 'required',
		'slug' 	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = [
		'user_id',
		'title',
		'slug',
		'body',
		'image'
	];

}