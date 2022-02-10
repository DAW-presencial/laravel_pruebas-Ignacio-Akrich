<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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

//Redireccionaminto por error en la url
Route::fallback(function () {
    return view('/dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//rutas de lenguage
Route::get('alumnos/create/{lang?}',[AlumnoController::class,'create']);
Route::get('alumnos/{lang?}',[AlumnoController::class,'index']);
Route::get('alumnos/{id}/edit/{lang?}',[AlumnoController::class,'edit']);

//ruta para el show
Route::get('alumnos/{id}/show/{lang?}',[AlumnoController::class,'show']);


Route::resource('alumnos', AlumnoController::class)->middleware(['auth']);