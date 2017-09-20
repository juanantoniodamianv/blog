<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//Nombre de la tabla en la BD
	protected $table = "categories";

	//Campos permitidos para mostrar los objetos JSON
	protected $fillable = ['name'];

	//Relación:
	//Nombre del modelo con el que se va a relacionar, en plural, 
	//porque una categoria puede tener varios articulos
	public function articles()
	{
		return $this->hasMany('App\Article');
	}
}
