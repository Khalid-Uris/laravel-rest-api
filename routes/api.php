<?php

use App\Http\Controllers\Api\SclassController;
use App\Models\Sclass;
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


// Student Class Route
Route::get('/class', [SclassController::class, 'index']);
Route::post('/class/store', [SclassController::class, 'store']);
Route::get('/class/edit/{id}', [SclassController::class, 'edit']);
Route::post('/class/update/{id}', [SclassController::class, 'update']);
Route::delete('/class/delete/{id}', [SclassController::class, 'delete']);
