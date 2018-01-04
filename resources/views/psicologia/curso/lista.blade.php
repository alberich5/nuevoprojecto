@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<center><h3>listar Elementos</h3></center>

<div id="sucursal">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Programacion Loc</h3>
    </div>
    <div class="panel-body">
      @include('Psicologia.curso.partials2.tablaProgramados')
    </div>
  </div>


		<div class="col-xs-7">
        	<pre>@{{$data}}</pre>
    	</div>
	</div>

@endsection
@section('js')
<script>
	new Vue({
	el: '#sucursal',
	created: function() {
		this.mostrarElementos();
    this.mostrarProgramacion();
	},
	data: {
		elementos: ['elemento1','elemento2','elemento3','elemento4'],
    programacion: []
	},
	methods: {
		mostrarElementos: function() {
			var urlMostrarElementos = 'mostrarElementos';
			axios.get(urlMostrarElementos).then(response => {
				this.elementos = response.data
			});
		},
    mostrarProgramacion: function() {
      var urlprogramacion = 'programacion';
      axios.get(urlprogramacion).then(response => {
        this.programacion = response.data
      });
    }
	}
});
</script>
@endsection
