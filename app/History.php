<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\History;

class History extends Model
{
    protected $fillable = [
        'title', 'details', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}