<?php

use App\Http\Controllers\ProjetoController;
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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [ProjetoController::class, 'show']);

Route::post('/criar-projeto', [ProjetoController::class, 'store'])->name('create-projeto');
Route::get('/projetos', [ProjetoController::class, 'index'])->name('home.projeto');
