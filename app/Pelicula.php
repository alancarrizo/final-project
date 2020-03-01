<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    public $table = 'movies';
    public $guarded = [];

    public function Relacion(){
      return $this->hasOne("App\Género");
    }

    public function Actor(){
      return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }


}
