<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\Matricula;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateCombinationUniqueMatricula
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

        $combinacionExistente = Matricula::where($campo1, $valorCampo1)
            ->where($campo2, $valorCampo2)
            ->exists();

        if ($combinacionExistente) {
            return response()->json(['error' => 'El alumno ya esta inscrito a este curso.'], 422);
        }

        return $next($request);
    }
}
