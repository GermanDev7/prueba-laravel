@extends('layouts.app')

@section('template_title')
    Create Producto
@endsection

@section('content')
    <section class="content">
        <div class="row  justify-content-center">
            <div class="col-md-5">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header text-center">
                        <span class="card-title">
                           <h3>Crear Producto</h3> </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
