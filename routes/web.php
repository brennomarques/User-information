<?php

use App\Http\Controllers\{UsuarioController, DocumentController};
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

Route::get('/perfil', [UsuarioController::class, 'index'])->name('profile');
Route::get('/documento', [DocumentController::class, 'index'])->name('document');
Route::get('/documento/{id}', [DocumentController::class, 'displayDocument'])->name('display');
