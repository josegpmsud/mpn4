<?php

namespace App\Http\Controllers;

use App\Models\matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matricula = new Matricula();
        return $matricula->all();
    }

    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->alumno_id = $request->alumno_id;
        $matricula->curso_id = $request->curso_id;
        $matricula->nota = $request->nota;
        $matricula->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Matricula::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $matricula = Matricula::find($id);
        $matricula->alumno_id = $request->alumno_id;
        $matricula->curso_id = $request->curso_id;
        $matricula->nota = $request->nota;
        $matricula->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();
        return "Eliminado correctamente";
    }
}
