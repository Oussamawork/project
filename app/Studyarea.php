<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studyarea extends Model
{
    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
