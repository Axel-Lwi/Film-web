<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['id,name'];


    public function Movie(){
        return $this->hasMany('App\Movie');
    }
}
