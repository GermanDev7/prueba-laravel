@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content ">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="float-Center">
                            <span class="card-title">
                                <h3>Ver Producto</h3></span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $producto->referencia }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $producto->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $producto->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Creacion:</strong>
                            {{ $producto->fecha_creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $producto->cantidad }}
                        </div>

                    </div>
                    <div class="box-footer p-2">
                        <a type="submit" class="btn btn-primary" href="{{url('/')}}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
