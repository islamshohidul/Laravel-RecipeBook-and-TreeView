<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Recipe extends Model
{
    public function ingredients(){
        return $this->belongsToMany('App\Ingredient' ,'ingredient_recipe');
    }
}
