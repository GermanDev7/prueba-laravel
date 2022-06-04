<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Categoria extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categorias()
    {
        return $this->hasMany('App\Models\Producto','categoria_id');
    }
    
    
    

}
