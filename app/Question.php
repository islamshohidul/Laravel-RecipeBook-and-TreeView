<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public function quiz(){
        return $this->belongsTo('App\Quiz', 'quiz_id');
    }

    public function options(){
        return $this->hasMany('App\Option');
    }
}
