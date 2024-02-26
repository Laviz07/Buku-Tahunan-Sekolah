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
    return redirect('/home');
});

/* ---------------------------------- HOME --------------------------------- */
Route::get("/home", [SambutanController::class, "index"]);

/* ---------------------------------- KELAS --------------------------------- */
Route::get("/kelas", [KelasController::class, "index"])->name("kelas");
Route::get("/kelas/detail", [KelasController::class, "detail"]);

/* ---------------------------------- GURU ---------------------------------- */
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

/* --------------------------------- EKSKUL --------------------------------- */
Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul');

/* ---------------------------------- ABOUT --------------------------------- */