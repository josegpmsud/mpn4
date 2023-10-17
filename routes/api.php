<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\AsistenciaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AlumnoController::class)->group(function(){
    Route::get('/alumnos', 'index');
    Route::get('/alumno/{id}', 'show');
    Route::post('/alumno', 'store');
    Route::put('/alumno/{id}', 'update');
    Route::delete('/alumno/{id}', 'destroy');
});

Route::controller(MaestroController::class)->group(function(){
    Route::get('/maestros', 'index');
    Route::get('/maestro/{id}', 'show');
    Route::post('/maestro', 'store');
    Route::put('/maestro/{id}', 'update');
    Route::delete('/maestro/{id}', 'destroy');
});

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos', 'index');
    Route::get('/curso/{id}', 'show');
    Route::post('/curso', 'store');
    Route::put('/curso/{id}', 'update');
    Route::delete('/curso/{id}', 'destroy');
});

Route::controller(MatriculaController::class)->group(function(){
    Route::get('/matriculas', 'index');
    Route::get('/matricula/{id}', 'show');
    Route::post('/matricula', 'store');
    Route::put('/matricula/{id}', 'update');
    Route::delete('/matricula/{id}', 'destroy');
});

Route::controller(AsistenciaController::class)->group(function(){
    Route::get('/asistencias', 'index');
    Route::get('/asistencia/{id}', 'show');
    Route::post('/asistencia', 'store');
    Route::put('/asistencia/{id}', 'update');
    Route::delete('/asistencia/{id}', 'destroy');
});
