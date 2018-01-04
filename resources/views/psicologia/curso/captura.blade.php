@extends('Psicologia.plantillaPsicologia')

@section('css')

<style>
   #mdialTamanio{
     width: 80% !important;
   }
 </style>
@endsection
@section('psicologia')



<div id="sucursal">
  @include('Psicologia.curso.partials.modalBusqueda')
  @include('Psicologia.curso.partials.formularioProgramacionLoc')

   <button type="submit" v-on:click.prevent="mostrarModal()" class="btn btn-primary">Agregar Elementos</button>


   <button type="submit" v-on:click.prevent="totalArreglo()" class="btn btn-primary">Total</button>


  @include('Psicologia.curso.partials.tablaElementos')



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
    totalCargado: [],
    programacion: [],
    elementosEncontrados: [],
		delegacionActual:'',
    imparte:'',
    fecha:'',
    numero:'0'
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
    totalArreglo: function() {
      var totis = this.totalCargado.length;
      this.numero=totis;
      alert(this.numero);

    },
    agregarEl: function(elemento) {

        this.totalCargado.push(elemento);
        swal("Agregado Correctamente", "Se agrego bien", "success");
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
