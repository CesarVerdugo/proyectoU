<form id="formproduct"class="form-horizontal"  action="" files="true">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}
<!--'code', 'date','name','size','brand','quantity','iva','unit_price','sale_price','stockmin'-->
<div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          {{ Form::label('category_idedit', 'Categorías') }}
          {{ Form::select('category_id', $categories, null, ['class' => 'form-control','id'=>'category_idedit']) }}  </div>
      </div>
</div>

  <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label class="bmd-label-floating"><strong>Codigo</strong></label>
            <input type="text" placeholder="Ej:123245" required class="form-control" value="" id="codeproductedit" name="codeproductedit" title="Codigo del producto">
           </div>
        </div>
          <div class="col-sm-6">
               <div class="form-group">
                     <label class="bmd-label-floating"><strong>Fecha</strong></label>
                     <input type="date" placeholder="Ej:13/07/1993" required class="form-control" id="dateproductedit" name="dateproductedit" title="Fecha de la compra del producto">
               </div>
         </div>

</div>

  <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                  <label class="bmd-label-floating"><strong>Stockmin</strong></label>
                  <input type="number" placeholder="1" required min="1" class="form-control" id="stockminedit" name="stockminedit" title="Cantidad minima del producto">
            </div>
      </div>
      <div class="col-sm-8">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Nombre</strong></label>
          <input type="select" placeholder="Ej:Televisión" required class="form-control" id="nameproductedit" name="nameproductedit" title=" Nombre del producto">
        </div>
    </div>
  </div>

  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <label class="bmd-label-floating"><strong>Descripción</strong></label>
            <textarea cols="50" placeholder="Ej:Su color es azul, está elaborado en carbono" required class="form-control" id="descriptionproductedit" name="descriptionproductedit" title="Descripción del producto">
            </textarea>

          </div>
      </div>
  </div>
    <div class="row">
  <div class="col-sm-12">
    <div class="file_input_div">
        <div class="file_input">

            {!!Form::label('file','Imagen')!!}
            {!! Form::file('file',['id'=>'fileedit'])!!}


        </div>

      </div>
</div>
</div>
  <div class="row">


    <div class="col-sm-4">
        <div class="form-group">
              <label class="bmd-label-floating"><strong>Descuento</strong></label>
              <input type="number" placeholder="Ejemplo 10%" required min="1" class="form-control" id="descuentoedit" name="descuentoedit" title="Descuento del producto">
        </div>
  </div>


      <div class="col-sm-6">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio unitario</strong></label>
          <input type="number" placeholder="Ej:1500" required class="form-control" id="unit_priceedit" name="unit_priceedit" title="Precio unitario">
        </div>
      </div>
      <div class="col-sm-6">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio venta</strong></label>
          <input type="number" placeholder="Ej:1800" required class="form-control" id="sale_priceedit" name="sale_priceedit" title="Precio unitario">
        </div>
      </div>
  </div>
   <!--div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='actualizar', $attributes =['id'=>'Actualizarproduct','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
  </div-->
  <div class="row">
   <div class="col-sm-12">
       <div class="form-group">
        <div class="form-group text-center">
         {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>'.Lang::get('Guardar'), array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>

       </div>
   </div>
 </div>
</form>
