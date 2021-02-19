<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    protected $table = 'episodes';
    public function movie(){
        return $this->belongsto('movies','id','movie_id');
    }
}
