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
    </tr>
  </thead>
  <tbody>
    <tr v-for="tol in total">
      <td width="10px">@{{ tol.id }}</td>
      <td><img src="{{ asset('sipab/img/1.png') }}" width="80px"></td>
      <td>@{{ tol.nombre }}</td>
      <td>@{{ tol.apellido_paterno }}</td>
      <td>@{{ tol.apellido_materno }}</td>
      <td>@{{ tol.delegacion }}</td>
      <td>@{{ tol.rfc }}</td>
      <td>@{{ tol.curp }}</td>
    </tr>
  </tbody>
</table>
