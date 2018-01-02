@extends('administrador.layout')

@section('css')
<link rel="stylesheet" href="{{asset('omar/css/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@endsection


@section('content')
<!-- Inicio del body del panel -->
<div id="usuarioCRUD" class="container-fluid" style="background-color:#f5f9fd;box-shadow: -4px -2px 44px 0px rgba(171,94,171,0.7); ">
        <center><h2>Usuarios</h2></center>
        <div class="formulario">
            @include('administrador.usuario.partials.formulario')
        </div>

    <div class="tabla" >
      @include('administrador.usuario.partials.tabla')
    </div>

 <!-- pruebas -->
         <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
          </div>
<!-- fin de pruebas -->



</div>

<!-- Fin del body del panel -->

@endsection
@section('js')
<!-- INCLUYE LAS LIBRERIAS EXTERNAS DE JAVASCRIPT-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){
    $("#buscar").tooltip({
    });
    $("#agregar").tooltip({
    });
    $("#editar").tooltip({
    });
    $("#editar2").tooltip({
    });
    $("#ver").tooltip({
    });
    $("#cancelar").tooltip({
    });
    $("#eliminar").tooltip({
    });
    $("#guardar").tooltip({
    });
    $("#mostrar").tooltip({
    });


});





Vue.component('icono',{
  template:"<i class='material-icons'><slot></slot></i>"
});


    var vm = new Vue({
            //id asignado al div en el que funcionara vue
            el: '#usuarioCRUD',
            //funcion al crear el objeto
            created:function(){
                this.getUsuarios();
                //llamada al metodo
            },
            data:{
                errors:[],
                usuarios:[],
                fecha:'',
                searchUsuario:{'username':'','nombre':'','paterno':'','materno':''},
                    },
            methods:{
                    getUsuarios:function () {
                    var url='/administrador/usuarios';
                    //variable que hace referencia a la URI de la ruta
                    axios.get(url).then(response=>{
                    this.usuarios=response.data;
                    });
                },
                    busquedaUsuario:function()
                    {
                    var url='/administrador/usuario/search';
                    axios.post(url,{
                        usuario:this.searchUsuario
                    }).then(response=>{
                      this.usuarios=response.data;
                      this.errors=[];//listado de errores
                      this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''}
                        toastr.success('Busqueda exitosa');//mensaje de alerta de funcion exitosa
                        toastr.info(response.data);//mensaje de alerta de funcion exitosa
                    }).catch(error=>{
                      this.errors=error.response.data
                    });
                },
                mostrarEliminar:function(){
                    swal({
                      title: "Are you sure?",
                      text: "Your will not be able to recover this imaginary file!",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonClass: "btn-danger",
                      confirmButtonText: "Yes, delete it!",
                      closeOnConfirm: false
                    },
                    function(){
                      swal("Deleted!", "Your imaginary file has been deleted.", "danger");
                    });
                },
                mostrarAgregar:function(){
                    swal({
                      position: 'top-right',
                      type: 'success',
                      title: 'Se Ha Guardado',
                      showConfirmButton: true,
                      timer: 2500
                    });
                },
                mostrarModal:function(){

                    $('#sucursal').modal('show');
                $('.modal-backdrop').remove();

                },
        }});

 $(function () {
   var bindDatePicker = function() {
    $(".date").datetimepicker({
        format:'YYYY-MM-DD',
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
      }
    }).find('input:first').on("blur",function () {
      // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
      // update the format if it's yyyy-mm-dd
      var date = parseDate($(this).val());

      if (! isValidDate(date)) {
        //create date based on momentjs (we have that)
        date = moment().format('YYYY-MM-DD');
      }

      $(this).val(date);
    });
  }

   var isValidDate = function(value, format) {
    format = format || false;
    // lets parse the date to the best of our knowledge
    if (format) {
      value = parseDate(value);
    }

    var timestamp = Date.parse(value);

    return isNaN(timestamp) == false;
   }

   var parseDate = function(value) {
    var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
    if (m)
      value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

    return value;
   }

   bindDatePicker();
 });


</script>
@endsection
