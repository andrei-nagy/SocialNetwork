<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 

class Post extends Model 
{
	protected $guarded = [];


    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function likes()
    {
    	return $this->hasMany('App\Like');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

   
}
