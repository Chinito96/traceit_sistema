<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CalificacionController;
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

Route::get('/', [AlumnoController::class, 'index']);
Route::get('/calificaciones/{id}', [CalificacionController::class, 'index']);
Route::get('/crear', [AlumnoController::class, 'create']);
Route::post('/crear', [AlumnoController::class, 'store']);
