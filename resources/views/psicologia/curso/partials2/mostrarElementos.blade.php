<div class="modal fade" id="modalmostrar">
	<div class="modal-dialog" id="mdialTamanio">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
        <center><h4>Agregar Nuevos Elementos Policiales con fecha <?php echo  date('d') . ' del ' . date('m') . ' de ' . date('Y');?></h4></center>
			</div>
			<div class="modal-body">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">id_elemento</th>
            <th scope="col">Activo</th>
            <th scope="col">Fecha Registro</th>
            <th scope="col">ProgramacionLoc</th>
          </tr>
        </thead>
        <tbody>
          <tr  v-for="fil in filtro">
            <th scope="row">@{{ fil.id }}</th>
            <td>@{{ fil.elemento_policial_id }}</td>
            <td>@{{ fil.activo }}</td>
            <td>@{{ fil.fecha_registro }}</td>
            <td>@{{ fil.programacion_loc_id }}</td>
          </tr>
        </tbody>
      </table>

			</div>
			<div class="modal-footer">
				<div class="col-xs-7">
		        	<pre>@{{$data}}</pre>
		    	</div>
			</div>
		</div>
	</div>
</div>
