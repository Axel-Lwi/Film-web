<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';

    protected $fillable = ['id,movie_id,episode,title'];


    public function Movie(){
        return $this->belongsTo('App\Movie');
    }
}
