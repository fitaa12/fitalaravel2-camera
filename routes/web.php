<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Camera;

Route::get('/camera/create', function () {
    return view('camera.create');
});

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CameraController;

// Route untuk menampilkan daftar kamera (index)
Route::get('/cameras', [CameraController::class, 'index'])->name('cameras.index');

// Route untuk menampilkan form tambah kamera (create)
Route::get('/cameras/create', [CameraController::class, 'create'])->name('cameras.create');

// Route untuk menyimpan data kamera (store)
Route::post('/cameras', [CameraController::class, 'store'])->name('cameras.store');
Route::get('/cameras/{id}/edit', [CameraController::class, 'edit'])->name('cameras.edit');
Route::put('/cameras/{id}', [CameraController::class, 'update'])->name('cameras.update');
// Route::get('/cameras/{id}/destroy', [CameraController::class, 'destroy'])->name('cameras.destroy');
Route::delete('/cameras/{camera}', [CameraController::class, 'destroy'])->name('cameras.destroy');