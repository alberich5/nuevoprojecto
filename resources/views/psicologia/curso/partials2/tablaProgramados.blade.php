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
      <td>@{{ pro.nombre_sucursal }}</td>
      <td>@{{ pro.numero_elementos }}</td>
      <td>@{{ pro.imparte }}</td>
      <td>@{{ pro.fecha }}</td>
      <td>@{{ pro.activo }}</td>
      <td><button class="btn btn-info" v-on:click.prevent="mostrarLista(pro)">Mostrar</button><button class="btn btn-success" v-on:click.prevent="mostrarLista(pro)">Agregar</button></td>
    </tr>
  </tbody>
</table>

<nav>
  <ul class="pagination">
    <li v-if="pagination.current_page > 1">
      <a href="#" @click.prevent="changePage(pagination.current_page - 1)">
        Atras
      </a>
    </li>

    <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
      <a href="#" @click.prevent="changePage(page)">
        @{{ page }}
      </a>
    </li>

    <li v-if="pagination.current_page < pagination.last_page">
      <a href="#" @click.prevent="changePage(pagination.current_page + 1)">
        Siguiente
      </a>
    </li>
  </ul>
</nav>
