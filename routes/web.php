<?php

use App\Http\Controllers\MascotaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/** 
 * Route::get('mascota', [MascotaController::class, 'index']);
 * Route::get('mascota/create', [MascotaController::class, 'create']);
 * Route::post('mascota', [MascotaController::class, 'store']);
*/
Route::resource('mascota', MascotaController::class);
