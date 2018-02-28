<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function question()
    {
        return $this->hasMany('App\Answer', 'question_id');

    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }

    public function scopeNotEmpty($query)
    {
        return $query->whereNotNull('text');
    }
}
