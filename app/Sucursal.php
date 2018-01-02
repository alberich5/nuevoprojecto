<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

  //hacemos referencia al tabla que vamos a manejar
 protected $table='sucursal';
 //se defin ela llave primaria de la tabla sucursal
 protected $primaryKey='id';

 public $timestamps=false;

 protected $fillable =[
   'nombre_sucursal',
   'id_sucursal_depende',
   'id_encargado_delegacion',
   'nombre_largo_sucursal',
   'numero_nomina',
   'email'
 ];
 protected $guarded =[

 ];

}
