@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<center><h3>listar Elementos</h3></center>

<div id="sucursal">
  @include('Psicologia.curso.partials2.mostrarElementos')
  <div class="panel panel-primary" >
    <div class="panel-heading" id="colorpanel"><center>
      <h3 class="panel-title" >Programacion Loc</h3>
    </center>
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
		filtro: [],
    pagination: {
			'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
		},
    programacion: []
	},
  computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset;
			if(from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2);
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},
	methods: {
		mostrarElementos: function() {
			var urlMostrarElementos = 'mostrarElementos';
			axios.get(urlMostrarElementos).then(response => {
				this.elementos = response.data
			});
		},
    mostrarLista: function(pro) {
      var fil  = pro.id;
      var urlMostrarfiltro = 'filtro?id='+fil;
			axios.get(urlMostrarfiltro).then(response => {
				this.filtro = response.data
			});
			$('#modalmostrar').modal('show');
		},
    mostrarProgramacion: function(page) {
      var urlprogramacion = 'programacion?page='+page;
      axios.get(urlprogramacion).then(response => {
        this.programacion = response.data.program.data
        this.pagination = response.data.pagination
      });
    },
    changePage: function(page) {
			this.pagination.current_page = page;
			this.mostrarProgramacion(page);
		}
	}
});
</script>
@endsection
