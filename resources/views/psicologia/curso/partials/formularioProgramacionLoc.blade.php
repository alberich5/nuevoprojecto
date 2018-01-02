{!!Form::open(array('url'=>'guardar','method'=>'POST','autocomplete'=>'off'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
               <select name="delegacion" class="form-control selectpicker" v-model="delegacionActual" >
                   <option v-for="sucursal in sucursales"  name="sucursal" class="lista">
                      @{{ sucursal.nombre_sucursal}}
                    </option>
                </select>
        </div>
    </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <input type="text" name="imparte"   class="form-control" placeholder="Nombre de quien Imparte" style="text-transform: uppercase;" v-model="imparte">
            </div>
  </div>

   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <input type="date" name="fecha"  class="form-control" v-model="fecha">
        </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <input type="number" name="numero"  value="{{old('numero')}}" class="form-control" placeholder="Numero de elementos" style="text-transform: uppercase;" v-model="numero">
            </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
  </div>
  {!!Form::close()!!}
