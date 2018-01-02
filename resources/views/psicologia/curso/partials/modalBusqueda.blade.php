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
                	<input type="text" name="imparte" required class="form-control" placeholder="Id Elemento Policial" style="text-transform: uppercase;" v-model="id"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Nombre Elemento Policial" style="text-transform: uppercase;" v-model="nomElemento"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Apellido Paterno Elemento Policial" style="text-transform: uppercase;" v-model="APelemento"><br>
                  <input type="text" name="imparte" required class="form-control" placeholder="Apellido Materno Elemento Policial" style="text-transform: uppercase;" v-model="AMelemento"><br>
                  <input type="submit" name="buscar" value="Buscar" class="btn btn-primary" v-on:click.prevent="busquedaElemento()">
                </div>
        	</div>
				</div>

        <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fotografia</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Rfc</th>
            <th scope="col">Genero</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Delegacion</th>
          </tr>
        </thead>
        <tbody>
          <tr  v-for="encontrado in elementosEncontradosTux">
            <th scope="row">717</th>
            <td><img src="{{ asset('img/1.png') }}" width="80px"> </td>
            <td>>@{{ encontrado.idd }}</td>
            <td>marft</td>
            <td>Mark</td>
            <td>jui</td>
            <td>marft</td>
            <td>htth</td>
            <td>grg</td>
          </tr>
          <tr>
            <th scope="row">716</th>
            <td><img src="{{ asset('img/2.png') }}" width="80px"> </td>
            <td>Otto</td>
            <td>marft</td>
            <td>Mark</td>
            <td>jui</td>
            <td>marft</td>
            <td>htth</td>
            <td>grg</td>
          </tr>
          <tr>
            <th scope="row">718</th>
            <td><img src="{{ asset('img/3.png') }}" width="80px"> </td>
            <td>Otto</td>
            <td>marft</td>
            <td>Mark</td>
            <td>jui</td>
            <td>marft</td>
            <td>htth</td>
            <td>grg</td>
          </tr>
        </tbody>
      </table>

			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>
