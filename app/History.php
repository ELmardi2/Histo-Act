<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\History;

class History extends Model
{
    protected $fillable = [
        'title', 'details', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function histories()
    {
        return $this->hasMany('App\History');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}