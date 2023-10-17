<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateCombinationUniqueAsistencia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $campo1, $campo2)
    {
        $valorCampo1 = $request->input($campo1);
        $valorCampo2 = $request->input($campo2);

        $combinacionExistente = Asistencia::where($campo1, $valorCampo1)
            ->where($campo2, $valorCampo2)
            ->exists();

        if ($combinacionExistente) {
            return response()->json(['error' => 'Ya se registro la asistencia del alumno este dia. si la vuelvo a registrar se duplicaria la informacion'], 422);
        }

        return $next($request);
    }
}
