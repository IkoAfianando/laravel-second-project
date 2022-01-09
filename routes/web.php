<?php

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});

Route::get('/warga', [\App\Http\Controllers\DataWargaController::class, 'index'])->name('warga');
Route::get('/rumah', [\App\Http\Controllers\DataRumahController::class, 'index'])->name('rumah');

require __DIR__.'/auth.php';
