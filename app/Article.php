<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ['title','content','user_id','category_id'];

	public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }  

    public function images()
    {
    	return $this->hasMany('App\Image');
    }

    //muchos a muchos

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }    
}
