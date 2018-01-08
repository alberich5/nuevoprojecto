<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
  //hacemos referencia al tabla que vamos a manejar
  protected $table='direccion';


  //se defin ela llave primaria de la tabla dato personal
  protected $primaryKey='id';

  public $timestamps=false;

  protected $fillable =[
    'version',
    'activo',
    'calle',
    'ciudad_id',
    'codigo_postal',
    'colonia_id',
    'entidad_federativa_id',
    'entre_calle',
    'municipio_id',
    'n_ext',
    'n_int',
    'pais_id',
    'referencia',
    'y_calle'
  ];
  protected $guarded =[

  ];
}
