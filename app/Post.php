<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'file', 'description', 'is_visible', 'is_sticked', 'type_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function modules()
    {
        return $this->belongsTo('App\Module');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
