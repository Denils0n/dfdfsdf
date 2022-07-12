<?php

use App\Http\Controllers\PokemonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/add-pokemon', [PokemonController::class, 'store']);
Route::delete('/apagar-pokemon/{id}', [PokemonController::class, 'destroy']);
Route::get('/editar-pokemon/{id}', [PokemonController::class, 'edit']);
Route::put('/update-pokemon/{id}',[PokemonController::class, 'update']);


require __DIR__.'/auth.php';
