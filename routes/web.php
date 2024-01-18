<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SambutanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkskulController;

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
    return view('/kelas');
});

Route::get("/kelas", [KelasController::class, "index"]);
Route::get("/sambutan", [SambutanController::class, "index"]);

// Ekskul
Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul.index');
Route::get("/kelas/detail", [KelasController::class, "detail"]);

Route::get('/guru', [GuruController::class, 'index'])->name('struktur.index');