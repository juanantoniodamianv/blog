<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Nombre de la tabla en la BD
    protected $table = "images";
    //Campos permitidos para mostrar los objetos JSON
    protected $fillable = ['name', 'article_id'];

    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
