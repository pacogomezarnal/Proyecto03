<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Alumno;
use Illuminate\Support\Facades\Validator;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return $alumnos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion del formulario
        $input=$request->all();
        $rules=[
            'nombre' => 'required|min:3',
            'apellido1' => 'required|min:2',
            'apellido2' => 'required|min:2',
            'correo' => 'required|unique:App\Models\Alumno,correo'
        ];
        $messages=[
            'nombre.required' => 'No has introducido un nombre',
            'nombre.min' => 'El campo nombre debe tener al menos 3 caracteres',
            'apellido1.required' => 'No has introducido Apellido 1',
            'apellido2.required' => 'No has introducido Apellido 2',
            'correo.required' => 'No has introducido el correo',
        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return response()->json([$validator->errors()],400);
        }
        $alumno = new Alumno($request->all());
        $alumno->save();
        return $alumno;
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
