<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\History;

class History extends Model
{
    protected $guarded=[];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}