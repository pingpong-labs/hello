<?php

class Option extends \Eloquent {

    protected $fillable = ['key', 'value'];

     public function scopeFindByKey($key, $default = null)
     {
         $option = static::whereKey($key)->first();
        
         return $option ? $option->value : $default; 
     }
}
