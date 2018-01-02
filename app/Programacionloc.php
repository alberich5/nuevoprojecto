<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacionloc extends Model
{
  protected $table = 'programacion_loc';
  //se defin ela llave primaria de la tabla sucursal
  protected $primaryKey='id';

  public $timestamps=false;
  protected $fillable =[
    'version',
    'activo',
    'comentario_baja',
    'delegacion_id',
    'fecha',
    'fecha_baja',
    'fecha_registro',
    'imparte',
    'numero_elementos',
    'usuario_baja_id',
    'usuario_registra_id'
  ];
  protected $guarded =[

  ];
}
