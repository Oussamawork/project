<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function studyarea()
    {
        return $this->belongsTo('App\Studyarea');
    }
}
