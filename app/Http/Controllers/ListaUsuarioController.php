<?php

namespace App\Http\Controllers;

use App\Models\ListaUsuario;
use App\Models\Lista;
use Illuminate\Http\Request;

class ListaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lista $lista)
    {

        $listaUsuario = new ListaUsuario();
        $listaUsuario->user_id = $_SESSION['id'];
        $listaUsuario->lista_id = $lista->id;
        $listaUsuario->save();

        //Redireciona para minhas listas
        return redirect()->route('lista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaUsuario  $listaUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(ListaUsuario $listaUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaUsuario  $listaUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(ListaUsuario $listaUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaUsuario  $listaUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaUsuario $listaUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaUsuario  $listaUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListaUsuario $listaUsuario)
    {
        //
    }
}
