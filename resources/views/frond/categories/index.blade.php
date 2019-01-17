
@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idcategoryedit" name="idcategoryedit"></input>
  <div class="container" >
  <div class="row">
  <div class="col-lg-4" >
          <div class="card-body" >
              <!-- Nav tabs -->
                <div class="container" >
                  <ul class="nav nav-tabs" role="tablist" style="padding-left:70px">
                    <li role="plantillas"><button href="#variables"  title="Crear Categoria" id="create-form"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></button></li>
                    <li role="plantillas" class="active"><a id="edit-form" title="Editar Categoria" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas" class="active"><a id="show-form"title="Ver Categoria" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
               </div>

              <!-- Tab panes -->
              <div class="tab-content" >
                <div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editcategory" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar Categoria</strong></h4>

                        </div>
                        <div class="card-body">
                          <div class="col-sm-12">
                            @include('frond.categories.fragment.formedit')
                        </div>
                      </div>
                    </div>

                      </div>

                <div role="tabpanel" class="tab-pane fade" id="variables">
                  <div  class="card">
                    <div  class="card-header card-header-success">
                      <h4 class="card-title "><strong>Crear Categoria</strong></h4>

                    </div>
                      <div class="card-body">
                        <div class="col-sm-12">
                              @include('frond.categories.fragment.form')
                      </div>
                    </div>
                  </div>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="ver" >
                  <div  class="card">
                    <div  class="card-header card-header-primary">
                      <h4 class="card-title">Información del cliente</h4>

                    </div>

                    <div class="card-body" id="showcategory" value="">
                        @include('frond.categories.fragment.show')
                    </div>
            </div>
          </div>
        </div>
      </div>
</div>


<!--Lista de clientes(Tabla).-->

            <div class="col-lg-8">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE Categorias</strong> <a href="{{ url('/clientspdf') }}" class="btn btn-sm btn-danger" title="Exportar a pdf"><i class="far fa-file-pdf"></i> </a> <a href="{{ url('/clientsexcel') }}" class="btn btn-sm btn-warning" title="Exportar a excel"><i class="far fa-file-excel"></i> </a></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    <table id="category" class="table table-striped table-hover">
                            <thead class=" text-primary">
                              <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nombres Categoria</th>
                                <th class="text-center">Acciones</th>

                              </tr>
                            </thead>

                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
