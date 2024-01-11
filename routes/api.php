<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get  ('/libros', [BookController::class, 'index']);

Route::post ('/libros', [BookController::class, 'store']);

Route::delete ('/libros/{id}', [BookController::class, 'destroy']);


Route::post ('/autores', [AuthorController::class, 'store']);




Route::get ('/autores', [AuthorController::class, 'index']);

Route::post ('/autores', [AuthorController::class, 'store']);

Route::delete ('/autores/{id}', [AuthorController::class, 'destroy']);


// Implementar métodos para la clase Loan

