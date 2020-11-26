<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CursosEntregablesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");

/*
Route::get('/alumnos', [AlumnosController::class, 'index'])->name("alumnos");
Route::get('/alumnos/create', [AlumnosController::class, 'create'])->name("alumnoCreate");
Route::get('/alumnos/{id}', [AlumnosController::class, 'show'])->name("alumno");
Route::get('/alumnos/{id}/edit', [AlumnosController::class, 'edit'])->name("alumnoEdit");
Route::post('/alumnos', [AlumnosController::class, 'store'])->name("alumnoStore");*/

Route::resource('alumnos',AlumnosController::class);
Route::resource('cursos',CursosController::class);
Route::resource('cursos.entregables', CursosEntregablesController::class)->only(['create','store']);


