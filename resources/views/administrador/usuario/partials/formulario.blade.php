<form method="POST" v-on:submit.prevent="busquedaUsuario">
  <div name="formulario busqueda" class="form-horizontal">

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">

                <div class="group">
                  <input type="text"  id="campoFormulario" name="nombre" value="" style="text-transform:uppercase; font-size: 1.3em;" v-model="searchUsuario.nombre">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><icono>person</icono> Nombre</label>
                </div>
           </div>
        </div>
    </div>


<div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">

                <div class="group date">
                  <input type="text"  id="campoFormulario" name="fecha" value="" style="text-transform:uppercase;font-size: 1.3em;" v-model="fecha">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><icono>person</icono> Calendario</label>
                </div>
           </div>
        </div>
    </div>



    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">
                <div class="group">
                  <input type="text"  id="campoFormulario"  name="paterno" value="" style="text-transform:uppercase;font-size: 1.3em;" v-model="searchUsuario.paterno">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><icono>person</icono> Apellido paterno</label>
                </div>

           </div>
        </div>
    </div>




    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">

                <div class="group">
                  <input type="text"  id="campoFormulario"  name="materno" value="" style="text-transform:uppercase;font-size: 1.3em;" v-model="searchUsuario.materno">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><icono>person</icono> Apellido materno</label>
                </div>

           </div>
        </div>
    </div>

    <div class="row col-sm-offset-1">
            <input type="submit" class="btn btn-primary btn-sm"  id="buscar" title="Buscar Elemento" value="BUSCAR">

            <input type="submit" class="btn btn-aceptar btn-sm" id="agregar" title="Aceptar" value="agregar" v-on:click.prevent="mostrarAgregar()">
            <input type="submit" class="btn btn-editar btn-sm" id="editar" v-on:click.prevent="mostrarModal()" title="Editar" value="editar">
            <input type="submit" class="btn btn-ver btn-sm" id="ver" title="Ver" value="ver">
            <input type="submit" class="btn btn-cancelar btn-sm" id="cancelar" title="cancelar" value="cancelar">
            <input type="submit" class="btn btn-eliminar btn-sm" id="eliminar" title="eliminar" value="eliminar" v-on:click.prevent="mostrarEliminar()">
            <input type="submit" class="btn btn-guardar btn-sm" id="guardar" title="guardar" value="guardar">
    </div>
  </div>
  <!--es la parte final del documento-->

  </form>
