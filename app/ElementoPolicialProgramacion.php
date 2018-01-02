<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementoPolicialProgramacion extends Model
{
  protected $table='elemento_policial_programacion_loc';
  //se defin ela llave primaria de la tabla sucursal
  protected $primaryKey='id';

  public $timestamps=false;

  protected $fillable =[
    'version',
    'activo',
    'comentario_baja',
    'elemento_policial_id',
    'fecha_baja',
    'fecha_registro',
    'programacion_loc_id',
    'usuario_baja_id',
    'usuario_registra_id'
  ];
  protected $guarded =[

  ];

}
