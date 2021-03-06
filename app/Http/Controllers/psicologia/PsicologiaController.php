<?php

namespace App\Http\Controllers\psicologia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\elemento_policial;
use App\Persona_fisica;
use App\Dato_personal;
use App\Sucursal;
use App\Direccion;
use App\Sucursal_historico;
use App\Programacionloc;
use App\ElementoPolicialProgramacion;


class PsicologiaController extends Controller
{


  public function home(){

    return view('Psicologia.plantillaPsicologia');
  }

  public function captura(){

    return view('Psicologia.curso.captura');
  }
   public function lista(){

    return view('Psicologia.curso.lista');
  }
//funcion para traer la informacion de la tabla de programacionLoc
  public function programacionLoc(Request $request){
    $programacion = Programacionloc::leftjoin('sucursal', 'programacion_loc.delegacion_id', '=', 'sucursal.id')
    ->select('programacion_loc.id','programacion_loc.version','programacion_loc.delegacion_id','programacion_loc.fecha','programacion_loc.fecha_registro','programacion_loc.numero_elementos','programacion_loc.imparte','programacion_loc.activo','sucursal.nombre_sucursal')
    ->where('programacion_loc.version','=', 0)
    ->paginate(8);
    return [
        'pagination' => [
            'total'         => $programacion->total(),
            'current_page'  => $programacion->currentPage(),
            'per_page'      => $programacion->perPage(),
            'last_page'     => $programacion->lastPage(),
            'from'          => $programacion->firstItem(),
            'to'            => $programacion->lastPage(),
        ],
        'program' => $programacion
    ];
  }

  //traer toda la informacion de ElementoPOlicial
  public function elementoPolicial(){
    $elemento_policial = ElementoPolicialProgramacion::select('id','activo','elemento_policial_id','fecha_registro','programacion_loc_id')->get();
    return $elemento_policial;
  }

  //Traer la informacio de la tabla sucursal
   public function sucursal()
  {
      $sucursal = Sucursal::select('id','nombre_sucursal')->get();

      return$sucursal;
  }

  //Traer la informacion de los id de los elemnto ya selecionados
   public function filtroElemento(Request $request)
  {
    $id=$request->get('id');
    $elemento_policial = elemento_policial::leftjoin('persona_fisica', 'elemento_policial.persona_fisica_id', '=', 'persona_fisica.id')
            ->leftjoin('dato_personal', 'persona_fisica.dato_personal_id', '=', 'dato_personal.id')
            ->leftjoin('elemento_policial_programacion_loc', 'elemento_policial.id', '=', 'elemento_policial_programacion_loc.elemento_policial_id')
            ->leftjoin('persona_fisica_direccion', 'persona_fisica_direcciones_id', '=', 'persona_fisica.id')
            ->leftjoin('direccion', 'persona_fisica_direccion.direccion_id', '=', 'direccion.id')
            ->where('elemento_policial_programacion_loc.programacion_loc_id','=', $id)
            ->select('elemento_policial.id as id_elemento_policial','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','dato_personal.estado_civil','dato_personal.fecha_nacimiento','dato_personal.genero','dato_personal.rfc','direccion.calle' )
             ->get();
    return $elemento_policial;
  }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//funcion para hacer pruebas a las consultas que se van a insertar a la tablas

  public function filtroElemento2(Request $request)
 {

   $fina=elemento_policial::leftjoin('persona_fisica', 'elemento_policial.persona_fisica_id', '=', 'persona_fisica.id')
           ->leftjoin('dato_personal', 'persona_fisica.dato_personal_id', '=', 'dato_personal.id')
           ->leftjoin('elemento_policial_programacion_loc', 'elemento_policial.id', '=', 'elemento_policial_programacion_loc.elemento_policial_id')
           ->leftjoin('persona_fisica_direccion', 'persona_fisica_direcciones_id', '=', 'persona_fisica.id')
           ->leftjoin('direccion', 'persona_fisica_direccion.direccion_id', '=', 'direccion.id')
           ->where('elemento_policial_programacion_loc.programacion_loc_id','=', 5)
           ->select('elemento_policial.id as id_elemento_policial','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','dato_personal.estado_civil','dato_personal.fecha_nacimiento','dato_personal.genero','dato_personal.rfc','direccion.calle' )
            ->get();


              $programacion = Programacionloc::leftjoin('sucursal', 'programacion_loc.delegacion_id', '=', 'sucursal.id')
              ->select('programacion_loc.id','programacion_loc.version','programacion_loc.delegacion_id','programacion_loc.fecha','programacion_loc.fecha_registro','programacion_loc.numero_elementos','programacion_loc.imparte','programacion_loc.activo','sucursal.nombre_sucursal')
              ->where('programacion_loc.version','=', 0)
              ->get();

            return $programacion;
 }
 //fin de la funcion de pruebas
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//funcion para guardar la informacion que se traer del formulario y la tabla Programacion Loc
  public function guardar (Request $request)
   {

       $ProgramacioLoc = new Programacionloc;
       $ProgramacioLoc->id=73;
       $ProgramacioLoc->version=0;
       $ProgramacioLoc->activo="true";
       $ProgramacioLoc->delegacion_id=($request->get('delegacion'));
       $ProgramacioLoc->fecha_registro="2016-04-27 00:00:00";
       $ProgramacioLoc->numero_elementos=($request->get('numero'));
       $ProgramacioLoc->usuario_registra_id=128;
       $ProgramacioLoc->imparte=strtoupper($request->get('imparte'));
       $ProgramacioLoc->fecha=($request->get('fecha'));
       $ProgramacioLoc->save();

      return back();
   }

  //funcion para guardar en la tabla de elementopolicialloc y de otro formula+
   public function guardar2 (Request $request)
    {

      for ($i=1695; $i < 1705 ; $i++) {
        $ElementoLoc = new ElementoPolicialProgramacion;
        $ElementoLoc->id=$i;
        $ElementoLoc->version=0;
        $ElementoLoc->activo=true;
        $ElementoLoc->elemento_policial_id=4339;
        $ElementoLoc->fecha_registro='2018-01-01 12:12:12.827';
        $ElementoLoc->programacion_loc_id=65;
        $ElementoLoc->usuario_registra_id=128;
        //dd($ElementoLoc);
        $ElementoLoc->save();
      }

       return back();
    }

  //Traer la informacion de los elementos disponibles d elas Delegaciones
  public function buscarElementos(Request $request)
  {

      $delegacion = $request->get('delegacion');
    //$elemento= elemento_policial::select('id','version')->take(10)->get();
    $elemento = elemento_policial::join("persona_fisica","elemento_policial.persona_fisica_id","=","persona_fisica.id")
    ->join("dato_personal","elemento_policial.id","=","dato_personal.id")
    ->join("sucursal_historico","persona_fisica.dato_personal_id","=","sucursal_historico.elemento_policial_id")
    ->join("sucursal","sucursal_historico.sucursal_id","=","sucursal.id")
    ->select('elemento_policial.id','elemento_policial.status','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre_sucursal as delegacion','dato_personal.rfc','dato_personal.curp')
    ->where('sucursal_historico.version','=', 0)
    //->where('elemento_policial.status','in', 'Candidato Contratado')
    ->where('sucursal.id','=', $delegacion)
    ->orderBy('id', 'ASC')->take(15)->get();

      return $elemento;
  }
}
