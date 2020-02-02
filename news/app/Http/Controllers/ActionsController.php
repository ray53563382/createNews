<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action; 

class actionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $action = Action::all();
           return $action;
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
    public function store(Request $request)
    {
        ini_set('memory_limit', '-1');
        // print_r($request->nueva_accion['titulo']);
        $Action = new Action();
        $Action->titulo = $request->nueva_accion['titulo'];
        $Action->fecha = $request->nueva_accion['fecha'];
        $Action->autor = $request->nueva_accion['autor'];
        $Action->importancia = $request->nueva_accion['importancia'];
        $Action->idcategoria = $request->nueva_accion['idcategoria'];
        $Action->informacionArt = $request->nueva_accion['informacionArt'];
        $Action->imgdesmostrativa = $request->nueva_accion['imgdesmostrativa'];
        $Action->pdf = $request->nueva_accion['pdf'];
        $Action->url = $request->nueva_accion['url']; 
        $Action->save();
        return $Action;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $action = Action::find($request->id);
        return $action;
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
        //
    }
}
