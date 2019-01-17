<input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
         {{ csrf_field() }}
         
<div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          {{ Form::label('category_id', 'Categorías') }}
          {{ Form::select('category_id', $categories, null, ['class' => 'form-control','id'=>'category_id']) }}  </div>
      </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
        {{ Form::label('name', 'Nombre del producto') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
        {{ Form::label('code', 'codigo') }}
        {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
    </div>
  </div>

</div>

<div class="row">
<div class="col-sm-12">
  <div class="file_input_div">
      <div class="file_input">
          <label for="">
            {!!Form::label('file','Imagen')!!}
            {!! Form::file('file',['id'=>'file'])!!}
          </label>

      </div>

    </div>
</div>
</div>

<div class="form-group">
    {{ Form::label('unit_price', 'precio unitario') }}
    {{ Form::number('unit_price', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('sale_price', 'precio venta') }}
    {{ Form::number('sale_price', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('quantity', 'cantidad') }}
    {{ Form::number('quantity', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('stockmin', 'stock minimo') }}
    {{ Form::number('stockmin', null, ['class' => 'form-control']) }}
</div>


<div class="form-group">
  <div class="col-sm-12">

    {{ Form::submit('Guardar producto', ['class' => 'btn btn-sm btn-primary']) }}
  </div>
</div>
