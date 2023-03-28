<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\SubjectController;
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
//End here

// Subject Class Route
Route::get('/subject', [SubjectController::class, 'index']);
Route::post('/subject/store', [SubjectController::class, 'store']);
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit']);
Route::put('/subject/update/{id}', [SubjectController::class, 'update']);
Route::delete('/subject/delete/{id}', [SubjectController::class, 'destroy']);


// Section Class Route
Route::get('/section', [SectionController::class, 'index']);
Route::post('/section/store', [SectionController::class, 'store']);
Route::get('/section/edit/{id}', [SectionController::class, 'edit']);
Route::put('/section/update/{id}', [SectionController::class, 'update']);
Route::delete('/section/delete/{id}', [SectionController::class, 'destroy']);
