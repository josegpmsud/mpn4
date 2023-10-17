<?php

namespace App\Http\Controllers;

use App\Models\asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencia = new Asistencia();
        return $asistencia->all();
    }

    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        $asistencia->alumno_id = $request->alumno_id;
        $asistencia->curso_id = $request->curso_id;
        $asistencia->fecha = $request->fecha;
        $asistencia->asistio = $request->asistio;
        $asistencia->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Asistencia::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->nombre = $request->nombre;
        $asistencia->descripcion = $request->descripcion;
        $asistencia->maestro_id = $request->maestro_id;
        $asistencia->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return "Eliminado correctamente";
    }
}
