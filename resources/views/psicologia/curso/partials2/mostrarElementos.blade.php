<div class="modal fade" id="modalmostrar">
	<div class="modal-dialog" id="mdialTamanio">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
        <h4>Mostrar Elementos</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
				        <div class="form-group">
				               <select name="delegacion" class="form-control selectpicker" v-model="delegacionActual" >
				                   <option v-for="sucursal in sucursales"  name="sucursal" class="lista" v-bind:value="sucursal.id" v-on:click.prevent="busquedaElemento()">
				                      @{{ sucursal.nombre_sucursal}}
				                    </option>
				                </select>
				        </div>
				    </div>
          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

        	</div>
				</div>



			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>
