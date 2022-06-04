@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h4> {{ __('Productos') }}</h4>
                               
                            </span>

                            <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="
                            table table-bordered table-striped table-hover table-sm
                          ">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <td>Nombre</td>
                                        <td align="center">Referencia</td>
                                        <td align="center">Precio</td>
                                        <td align="center">Peso</td>
                                        <td align="center">Categoria</td>
                                        <td align="center">Fecha Creacion</td>
                                        <td align="center">Cantidad</td>
                                        <td align="center">Acciones</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td >{{ $producto->nombre }}</td>
                                            <td align="center">{{ $producto->referencia }}</td>
                                            <td align="center">${{ $producto->precio }}</td>
                                            <td align="center">{{ $producto->peso }}</td>
                                            <td align="center">{{ $producto->categoria->nombre }}</td>
                                            <td align="center">{{ $producto->fecha_creacion }}</td>
                                            <td align="center">{{ $producto->cantidad }}</td>

                                            <td align="center">
                                                <form action="{{ route('productos.destroy', $producto->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('productos.show', $producto->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('productos.edit', $producto->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
