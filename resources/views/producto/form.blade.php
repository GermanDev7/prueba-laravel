<div class="card-info padding-1">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class=" form-row row p-1">
                    <label for="nombre ">Nombre</label>
                    <input id="nombre" class="form-control  " type="text" name="nombre" value="{{ $producto->nombre }}"
                        required>


                </div>
                <div class=" row  p-1">
                    <label class="col-md-5">Referencia</label>
                    <input class="form-control  col-md-7" type="text" name="referencia"
                        value="{{ $producto->referencia }}" required>
                </div>
                <div class="row  p-1">
                    <label class="col-md-5">Precio</label>
                    <input class="form-control col-md-7 " type="text" name="precio" value="{{ $producto->precio }}"
                        required>
                </div>
                <div class="row  p-1">
                    <label class="col-md-5">Peso</label>
                    <input class="form-control col-md-7 " type="text" name="peso" value="{{ $producto->peso }}"
                        required>
                </div>
                <div class="row  p-1">
                    <label class="col-md-5">Categoria</label>
                    <select class="form-control col-md-7 " name="categoria_id" required>
                        <option value="">Seleccion una categoria</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" selected="{{ $producto->categoria_id }}">
                                {{ $categoria->nombre }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="row p-1">
                    <label class="col-md-5" for="cantidad">Cantidad</label>
                    <input class="form-control col-md-7" type="text" name="cantidad required"
                        value="{{ $producto->cantidad }}">
                </div>
            </div>



        </div>


    </div>
    <div class="box-footer p-2 ">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>
<script type="text/javascript"></script>
