<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $perPage = 20;

    protected $table = 'productos';
    protected $fillable = ['nombre','referencia','precio','peso','categoria_id','fecha_creacion','cantidad'];


    //Relaciones
    public function categorias()
    {
        return $this->hasOne('App\Models\Categorium', 'id', 'categoria_id');
    }
    
   
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'producto_id', 'id');
    }
    

}
