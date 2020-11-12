<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['id,genre_id,title,photo,description,rating'];


    public function Genre(){
        return $this->belongsTo('App\Genre');
    }

    public function Episode(){
        return $this->hasMany('App\Episode');
    }

}

