<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Nombre de la tabla en la BD
	protected $table = "tags";
    //Campos permitidos para mostrar los objetos JSON
    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
