<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/libros', [BookWebController::class, 'index']);
Route::get('/libros/crear', [BookWebController::class, 'create']);

Route::post('/libros', [BookWebController::class, 'store']);
Route::delete('/libros/{id}', [BookWebController::class, 'destroy']);
