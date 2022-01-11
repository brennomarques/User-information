<?php

use App\Http\Controllers\Api\{AnalysesController, AuthController, DocumentController, ReportController, SignatureController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/refresh', [AuthController::class, 'refresh']);

Route::group(['middleware'=>'jwt.auth'],function() {

    Route::get('/assinatura', [SignatureController::class, 'get']);
    Route::get('/assinatura/{id}', [SignatureController::class, 'show']);
    Route::delete('/assinatura/{id}', [SignatureController::class, 'delete']);
    Route::put('/assinatura/{id}', [SignatureController::class, 'update']);
    Route::post('/assinatura', [SignatureController::class, 'insert']);

    Route::get('/documento', [DocumentController::class, 'get']);
    Route::get('/documento/{id}', [DocumentController::class, 'show']);
    Route::delete('/documento/{id}', [DocumentController::class, 'delete']);
    Route::put('/documento/{id}', [DocumentController::class, 'update']);
    Route::post('/documento', [DocumentController::class, 'insert']);

    Route::get('/analise', [AnalysesController::class, 'get']);
    Route::get('/analise/{id}', [AnalysesController::class, 'show']);
    Route::delete('/analise/{id}', [AnalysesController::class, 'delete']);
    Route::put('/analise/{id}', [AnalysesController::class, 'update']);
    Route::post('/analise', [AnalysesController::class, 'insert']);

    Route::get('/relatorio', [ReportController::class, 'search']);
});
