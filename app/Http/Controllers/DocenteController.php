<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docente = new Docente();
        return $docente->all();
    }

    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->correo_electronico = $request->correo_electronico;
        $docente->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Docente::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->correo_electronico = $request->correo_electronico;
        $docente->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return "Eliminado correctamente";
    }
}
