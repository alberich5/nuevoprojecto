<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

        /**
    *Controlador del menu
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
      //  $this->middleware('cerrar');

        $this->middleware('auth');
    }

    public function getUsuarios() {

       //  $usuarios = User::find(Auth::user()->id);
      $usuarios= User::all();

        return $usuarios;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                //return view('home');
        return view('administrador.usuario.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=User::findOrFail($id);
        return $usuario;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //No se elimina solo se desactiva la cuenta
        $usuario=User::findOrFail($id);
        $usuario->bloqueado='true';
        $usuario->save();

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchUsuario(Request $request)
    {

        return $request['usuario']['nombre'];


        //falta hacer la consulta para sacar lso usuarios

    }
}
