<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SambutanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\SiswaController;

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
Route::get("/home", [SambutanController::class, "index"])->name("sambutan");

/* ---------------------------------- KELAS --------------------------------- */

Route::prefix('kelas')->group(function () {
    Route::controller(KelasController::class)->group(function () {
        Route::get("/", "index")->name("kelas");
        Route::get("/detail", "detail")->name("detailKelas");
    });

Route::controller(SiswaController::class)->group(function () {
        Route::get("/detail/siswa", "index")->name("siswaKelas");
    });

});

/* ---------------------------------- GURU ---------------------------------- */
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

/* --------------------------------- EKSKUL --------------------------------- */
Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul');

/* ---------------------------------- ABOUT --------------------------------- */
