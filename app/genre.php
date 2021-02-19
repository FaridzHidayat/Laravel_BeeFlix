<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table='genres';
    public function movie(){
        return $this->hasMany('movies','genre_id','id');
    }
}
