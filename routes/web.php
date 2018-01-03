<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {
//Menu

Route::get('/menu', 'HomeController@index')->name('menu');

Route::get('/menumodulos', 'HomeController@verificarModulos')->name('menumodulos');

Route::get('/menusucursales', 'HomeController@verificarSucursales')->name('menusucursales');

Route::post('/setsucursal/{id}', 'HomeController@setSucursal')->name('setsucursal');

Route::get('/getsucursal', 'HomeController@getSucursal')->name('getsucursal');




//Administrador
Route::get('/administrador/',['uses'=> 'administrador\MenuController@index', 'as'=> 'administrador.menu.index']);
//--usuario




Route::get('/administrador/usuario', 'administrador\UsuarioController@index')->name('administrador.usuario.index');

Route::get('/administrador/usuarios',['uses'=> 'administrador\UsuarioController@getUsuarios', 'as'=> 'administrador.usuario']);


Route::post('/administrador/usuario/search',['uses'=> 'administrador\UsuarioController@searchUsuario', 'as'=> 'administrador.usuario.search']);

});



//RUtas de Psicologia
Route::get('psicologia',['uses'=>'psicologia\PsicologiaController@home']);
Route::get('psicologia-captura',['uses'=>'psicologia\PsicologiaController@captura']);
Route::get('psicologia-lista',['uses'=>'psicologia\PsicologiaController@lista']);

Route::get('buscarElemento',['uses'=>'psicologia\PsicologiaController@buscarElementos']);
Route::post('psicologia-buscarElemento',['uses'=>'psicologia\PsicologiaController@buscarElementosPost']);

Route::get('sucursal',['uses'=>'psicologia\PsicologiaController@sucursal']);
Route::get('programacion',['uses'=>'psicologia\PsicologiaController@programacionLoc']);
Route::get('elemento',['uses'=>'psicologia\PsicologiaController@elementoPolicial']);

Route::post('guardar', 'psicologia\PsicologiaController@guardar');
Route::post('guardar2', 'psicologia\PsicologiaController@guardar2');

Route::get('buscar',['uses'=>'psicologia\PsicologiaController@buscarElementos']);


//rutas nuevas de Psicologia
