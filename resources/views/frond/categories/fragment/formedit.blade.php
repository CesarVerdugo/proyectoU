<form id="formcategory" class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Nombre Categoria</strong></label>
          <input type="text" id="namecategoryedit" required class="form-control"  name="namecategoryedit" title="Nombre Categoria">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          {!!link_to('#',$title='actualizar', $attributes =['id'=>'Actualizarcategory','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}
          <!--<button type="submit" class="btn btn-success submit-btn btn-block"><i class="far fa-save"></i></button>-->
      </div>
    </div>
  </div>

  <div class="clearfix"></div><!--Incluyo el formulario-->
</form>
