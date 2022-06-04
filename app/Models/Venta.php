<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $producto_id
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Categorium $categorium
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{

  protected $table = 'ventas';
  protected $fillable = ['producto_id', 'cantidad'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function producto()
  {
    return $this->belongsTo('App\Models\Producto', 'producto_id');
  }
}
