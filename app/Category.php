<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function parent()
    {
        return $this->belongsTo('App\Category', 'id','parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id','id');
    }
}
