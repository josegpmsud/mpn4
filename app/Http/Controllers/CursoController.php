<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $curso = new Curso();
        return $curso->all();
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->docente_id = $request->docente_id;
        $curso->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Curso::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->docente_id = $request->docente_id;
        $curso->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return "Eliminado correctamente";
    }
}
