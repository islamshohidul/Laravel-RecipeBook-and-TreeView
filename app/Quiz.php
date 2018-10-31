<?php

namespace App;
use App\Question;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
        public  function questions(){
        return $this->hasMany('App\Question');
    }

}
