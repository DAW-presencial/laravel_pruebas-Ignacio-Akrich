<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use Http\Middelware\Authenticate;


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
Route::fallback(function(){
    return redirect('/dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('pokemons/create/{lang?}', [PokemonController::class, 'create']);
Route::get('pokemons/{lang?}', [PokemonController::class, 'index']);
Route::get('pokemons/{id}/edit/{lang?}', [PokemonController::class, 'edit']);

Route::resource('pokemons', PokemonController::class)->middleware(['auth']);


