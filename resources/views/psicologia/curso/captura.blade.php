@extends('Psicologia.plantillaPsicologia')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<style>
   #mdialTamanio{
     width: 80% !important;
   }
 </style>
@endsection
@section('psicologia')

  @include('Psicologia.curso.partials.modalBusqueda')

<div id="sucursal">

  @include('Psicologia.curso.partials.formularioProgramacionLoc')

   <button type="submit" v-on:click.prevent="mostrarModal()" class="btn btn-primary">MOSTRAR</button>

  @include('Psicologia.curso.partials.tablaElementos')

  <form action="{{ url('buscar') }}" method="GET">
  {{ csrf_field() }}
    <div class="form-group">
           <select name="delegacion" class="form-control selectpicker" v-model="delegacionActual" >
               <option v-for="sucursal in sucursales"  name="sucursal" class="lista" v-bind:value="sucursal.id">
                  @{{ sucursal.nombre_sucursal}}
                </option>
            </select>
    </div>
    <div class="form-group">
          <button class="btn btn-primary" type="submit" v-on:click.prevent="busquedaElemento()">Buscar</button>
        </div>
  </form>

   <!-- pruebas -->
         <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
          </div>
<!-- fin de pruebas -->
</div>

</div>

@endsection
@section('js')
<script>
	new Vue({
	el: '#sucursal',
	created: function() {
		this.mostrarSucursales();
    this.mostrarProgramacion();
    this.mostrarElementos();
	},
	data: {
		sucursales: [],
    programacion: [],
    elementosEncontrados: [],
		delegacionActual:'',
    imparte:'',
    fecha:'',
    numero:''
	},
	methods: {
		mostrarSucursales: function() {
			var urlSucursal = 'sucursal';
			axios.get(urlSucursal).then(response => {
				this.sucursales = response.data
			});
		},
    mostrarProgramacion: function() {
			var urlprogramacion = 'programacion';
			axios.get(urlprogramacion).then(response => {
				this.programacion = response.data
			});
		},
    mostrarElementos: function() {
			var urlelemento = 'elemento';
			axios.get(urlelemento).then(response => {
				this.programacion = response.data
			});
		},
    mostrarModal: function() {
      $('#modalbuscar').modal('show');
    },
    busquedaElemento: function() {

      //var urlBuscarElemento = 'buscarElemento?delegacion=Pinotepa%20Nacional';
      var urlBuscarElemento = 'buscarElemento?delegacion=' + this.delegacionActual;
			axios.get(urlBuscarElemento).then(response => {
				this.elementosEncontrados = response.data
			});
		},
	}
});
</script>
@endsection
