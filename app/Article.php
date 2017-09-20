<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
// use Cviebrock\EloquentSluggable\SluggableInterface;
// use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model
{
    //use SluggableTrait;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //Nombre de la tabla en la BD
    protected $table = "articles";
    //Campos permitidos para mostrar los objetos JSON
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    //Relación:
	//Nombre del modelo con el que se va a relacionar, en singular, 
	//porque un articulo puede tener una categoria
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
