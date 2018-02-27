<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function question()
    {
        return $this->hasMany('App\Answer', 'question_id');

    }
    public function scopeNotEmpty($query)
    {
        return $query->whereNotNull('text');
    }
}
