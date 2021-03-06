<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'details', 'user_id', 'article_id', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
        public function comments()
    {
    return $this->hasMany('App\Comment');
    }
   
   
}
