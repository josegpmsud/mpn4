<?php

namespace App\Http\Controllers;

use App\Models\maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function index()
    {
        $maestro = new Maestro();
        return $maestro->all();
    }

    public function store(Request $request)
    {
        $maestro = new Maestro();
        $maestro->nombre = $request->nombre;
        $maestro->apellido = $request->apellido;
        $maestro->correo_electronico = $request->correo_electronico;
        $maestro->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Maestro::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $maestro = Maestro::find($id);
        $maestro->nombre = $request->nombre;
        $maestro->apellido = $request->apellido;
        $maestro->correo_electronico = $request->correo_electronico;
        $maestro->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $maestro = Maestro::find($id);
        $maestro->delete();
        return "Eliminado correctamente";
    }
}
