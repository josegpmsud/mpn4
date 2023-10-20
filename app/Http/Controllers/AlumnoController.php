<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumno = new Alumno();
        return $alumno->all();
    }

    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->correo_electronico = $request->correo_electronico;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Alumno::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->correo_electronico = $request->correo_electronico;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return "Eliminado correctamente";
    }
}
