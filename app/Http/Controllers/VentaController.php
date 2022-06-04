<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Venta;
use Dotenv\Validator;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{


   public function index(Request $request)
   {
      $productos = Producto::all();

      return view('venta.index', compact('productos'));
   }

   public function store(Request $request)
   {
      $productos = Producto::all();
      $producto = Producto::where('id', $request->producto_id)->get()->first();
      if ($producto !== null) {
         $producto->update(['cantidad' => $producto['cantidad'] - $request->cantidad]);
         $venta=new Venta();
         $venta->producto_id=$request->producto_id;
         $venta->cantidad=$request->cantidad;
         $venta->save();
      }
      return view('venta.index',compact('productos'));
   }
}
