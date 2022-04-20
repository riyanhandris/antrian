<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TampilController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PanggilController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
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
    return view('v_login');
})->name('index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);
Route::get('/pengunjung', [PengunjungController::class, 'index'])->middleware(['auth']);
Route::get('/antrian', [AntrianController::class, 'index']);
Route::get('/panggil', [PanggilController::class, 'index'])->middleware(['auth']);

Route::get('/tampil_antrian', [TampilController::class, 'index']);
Route::get('/tampil_antrian/json', [TampilController::class, 'json']);

Route::get('/petugas', [PetugasController::class, 'index'])->middleware(['auth']);

Route::post('/loginbaru', [LoginController::class, 'index']);
Route::post('/print/antrianA', [AntrianController::class, 'printA']);
Route::post('/print/antrianB', [AntrianController::class, 'printB']);
Route::post('/print/antrianC', [AntrianController::class, 'printC']);

Route::post('/panggil/ada/{id}', [PanggilController::class, 'panggilAda']);
Route::post('/panggil/tidak/{id}', [PanggilController::class, 'panggilTidak']);
Route::post('/panggil_antri/{id}', [PanggilController::class, 'panggilAntri']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');


require __DIR__ . '/auth.php';

// // Sementara
// Route::view('/index', 'v_login');
Route::view('/print', 'v_print ');
