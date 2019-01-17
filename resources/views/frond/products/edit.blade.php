@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Producto
                </div>

                <div class="panel-body">
                    {!! Form::model($product, ['route' => ['product.update', $product->id], 'files' => true, 'method' => 'PUT']) !!}

                        @include('frond.products.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
