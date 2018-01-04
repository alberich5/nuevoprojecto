<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Delegacion</th>
      <th>Numeros</th>
      <th>Imparte</th>
      <th>Fecha</th>
      <th>Activo</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(pro, index) in programacion">
      <td width="10px">@{{ pro.id }}</td>
      <td>@{{ pro.programacion_loc_id }}</td>
      <td>@{{ pro.numero_elemento }}</td>
      <td>@{{ pro.imparte }}</td>
      <td>@{{ pro.fecha }}</td>
      <td>@{{ pro.activo }}</td>
      <td><button class="btn btn-info" v-on:click.prevent="quitarEl(index)">Mostrar</button></td>
    </tr>
  </tbody>
</table>
