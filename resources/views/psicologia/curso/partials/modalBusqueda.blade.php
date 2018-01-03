<div class="modal fade" id="modalbuscar">
	<div class="modal-dialog" id="mdialTamanio">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
        <h4>Busca Elemento Policial</h4>
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
        		<div class="form-group">
                	<input type="text" name="imparte" required class="form-control" placeholder="Id Elemento Policial" style="text-transform: uppercase;" v-model="id"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Nombre Elemento Policial" style="text-transform: uppercase;" v-model="nomElemento"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Apellido Paterno Elemento Policial" style="text-transform: uppercase;" v-model="APelemento"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Apellido Materno Elemento Policial" style="text-transform: uppercase;" v-model="AMelemento"><br>
                  <input type="submit" name="buscar" value="Buscar" class="btn btn-primary" v-on:click.prevent="busquedaElemento()">
                </div>
        	</div>
				</div>

				<table class="table table-hover table-striped">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Foto</th>
				      <th>Nombre</th>
				      <th>apellido paterno</th>
				      <th>apellido materno</th>
				      <th>Delegacion</th>
				      <th>Rfc</th>
				      <th>Curp</th>
							<th>Opciones</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr v-for="elemento in elementosEncontrados">
				      <td width="10px">@{{ elemento.id }}</td>
				      <td><img src="{{ asset('sipab/img/1.png') }}" width="80px"></td>
				      <td>@{{ elemento.nombre }}</td>
				      <td>@{{ elemento.apellido_paterno }}</td>
				      <td>@{{ elemento.apellido_materno }}</td>
				      <td>@{{ elemento.delegacion }}</td>
				      <td>@{{ elemento.rfc }}</td>
				      <td>@{{ elemento.curp }}</td>
							<td><button class="btn btn-primary" v-on:click.prevent="agregarEl(elemento)">Agregar</button></td>
				    </tr>
				  </tbody>
				</table>

			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>
