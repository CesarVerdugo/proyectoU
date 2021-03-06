@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Producto
                </div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'products.store', 'files' => true]) !!}

                      @include('frond.products.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
