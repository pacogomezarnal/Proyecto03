<?php

namespace App\Http\Controllers;

use App\Models\Entregable;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosEntregablesController extends Controller
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
    public function create($curso)
    {
        $cursoEntregable = Curso::find($curso);
        return view('entregables.create',['curso' => $cursoEntregable]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entregable = new Entregable($request->all());
        $entregable->save();
        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entregable  $entregable
     * @return \Illuminate\Http\Response
     */
    public function show(Entregable $entregable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entregable  $entregable
     * @return \Illuminate\Http\Response
     */
    public function edit(Entregable $entregable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entregable  $entregable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entregable $entregable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entregable  $entregable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entregable $entregable)
    {
        //
    }
}
