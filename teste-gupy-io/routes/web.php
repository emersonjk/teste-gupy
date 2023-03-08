<?php

use App\Http\Controllers\TesteController;
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
    return view('index');
});

Route::get('/teste-indice', [TesteController::class, 'indice'])->name('teste.indice');
Route::get('/teste-fibonnaci', [TesteController::class, 'fibonacci'])->name('teste.fibonaci');
Route::get('/teste-padrao', [TesteController::class, 'padrao'])->name('teste.padrao');
Route::get('/teste-estrada', [TesteController::class, 'estrada'])->name('teste.estrada');
Route::get('/teste-string', [TesteController::class, 'string'])->name('teste.string');
