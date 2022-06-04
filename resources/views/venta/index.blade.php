@extends('layouts.app')

@section('template_title')
    Crear Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Venta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventas.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row  p-1">
                                <label class="col-md-5">Producto</label>
                                <select class="form-control col-md-7 " name="producto_id" required>
                                    <option value="">Seleccion un producto</option>

                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">
                                            {{ $producto->nombre }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="row p-1">
                                <label class="col-md-5" for="cantidad">Cantidad</label>
                                <input class="form-control col-md-7" type="text" name="cantidad" required>
                            </div>

                            <div class="box-footer p-2 ">
                                <button type="submit" class="btn btn-success">Vender</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<section>
    $.ajax({
        type:"post",
        url:,
        dataType:"JSON",
        data:"",
        success:function(data){

        })
</section>
@endsection