<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\TypeController;



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


Route::resource('clients', ClientController::class);
Route::resource('users',   UserController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('etats',    EtatController::class);
Route::resource('pointages', PointageController::class);
Route::resource('types',    TypeController::class);

// Route::post('/login', [AuthController::class, 'login']);

// Route::middleware(['auth'])->group(function () {
//     Route::resource('clients', ClientController::class);
//     Route::resource('users',   UserController::class);
//     Route::resource('commandes', CommandeController::class);
//     Route::resource('etats',    EtatController::class);
//     Route::resource('pointages', PointageController::class);
//     Route::resource('types',    TypeController::class);
// });