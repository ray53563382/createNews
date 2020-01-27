<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $noticia = Noticia::all();
           return $nota;
         }else{
             return view('home');
        }
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
    public function store(Request $request){
        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $noticia->fecha = $request->fecha;
        $noticia->autor = $request->autor;
        $noticia->importancia = $request->importancia;
        $noticia->idcategoria = $request->idcategoria;
        $noticia->informacionArt = $request->informacionArt;
        $noticia->imgdesmostrativa = $request->imgdesmostrativa;
        $noticia->save();
        return $noticia;
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $noticia = Noticia::find($request->id);
        $noticia->titulo = $request->titulo;
        $noticia->fecha = $request->fecha;
        $noticia->autor = $request->autor;
        $noticia->importancia = $request->importancia;
        $noticia->idcategoria = $request->idcategoria;
        $noticia->informacionArt = $request->informacionArt;
        $noticia->imgdesmostrativa = $request->imgdesmostrativa;
        $noticia->save();
        return $noticia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $noticia = Noticia::find($request->id);
        $noticia->delete();
    }

}
