<?php

use App\Http\Controllers\{UsuarioController, DocumentController, SignatureController};
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

Route::view('dashboard', 'dashboard/dashboard')->name('dashboard');;
// Route::get('/dashboard', [DashboardController::class, 'generalSearch'])->name('dashboard');
Route::redirect('/', 'dashboard', 301);

Route::get('/perfil', [UsuarioController::class, 'index'])->name('profile');
Route::get('/documento', [DocumentController::class, 'index'])->name('document');
Route::get('/documento/{id}', [DocumentController::class, 'displayDocument'])->name('display');
Route::get('/signature', [SignatureController::class, 'getAll'])->name('getAll');
Route::get('/signature/{id}', [SignatureController::class, 'search'])->name('search');
