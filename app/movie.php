<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table='movies';
    public function genre(){
        return $this->belongsTo('genres','id','genres_id');
    }
    public function episode(){
        return $this->hasMany('episodes','movie_id','id');
    }
}
