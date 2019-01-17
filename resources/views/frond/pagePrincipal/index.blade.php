@extends('frond.pagePrincipal.template')


   @section('content')
      <div>
    <h2 style="color: black" class="text-center">Productos destacados</h2>
  </div>
   <div class="col-lg-12" style="padding-left:70px;">
    <div class="row">

      @foreach($products as $product )
            <div class="col-sm-3" >
              <div class="card text-center" style="width: 17rem; padding-left:1px;padding-bottom:1px ">

                  <div  class="card-header card-header-primary">
                          <h4 class="card-title"> {{$product->name}}</h4>

                  </div>
              <div class="card-body" >
                <img class="card-img-top " src="{{$product->file}}"  style="height:100px;width:100px " alt="Card image cap">
                <p class="card-text">{{$product->description}}</p>
                <h4> {{number_format($product->sale_price,1)}}</h4>
                 <div class="card-footer text-muted text-center">
                  visto hace 2 horas
                  </div>
                <a href="{{route('agregar-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary">¿Cotizar?</a>
                <a href="{{route('detalle-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary"> Ver mas <a/>
              </div>

             </div>
            </div>

      @endforeach

    </div>
  </div>

<div class="col-xs-offset-2">
  <h2 style="color:black" class="text-center">Dejanos tu comentario</h2>
  <!--div role="tabpanel" class="tab-pane fade">
    <div  class="card">
      <div  class="card-header card-header-success">
        <h4 class="card-title "><strong>Crear comentarios</strong></h4>

      </div>
        <div class="card-body">
          <div class="col-sm-12">
                @include('frond.commentaries.fragment.form')
        </div>
      </div>
    </div>
</div-->
  <div class="col-sm-3 ">

    @include('frond.commentaries.fragment.form')
  </div>
</div>


<!--Listado de comentarios(Tabla).-->

    <div class="col-sm-12">
      <div class="card">
        <div  class="card-header card-header-success">
          <h4 class="card-title text-center"><strong >LISTA DE COMENTARIOS </strong> </h4>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table  id="commentariesPagePrincipal" name="users"  class="table  table-hover">
              <thead class=" text-primary">
                    <tr>

                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Comentario</th>

                     </tr>
             </thead>

            </table>
          </div>
        </div>
      </div>
    </div>


















   @endsection
