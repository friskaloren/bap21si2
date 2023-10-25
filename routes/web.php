<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\khsController;
use App\Http\Controllers\programstudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\jadwalperkuliahanController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Mahasiswa\Mahasiswa2Controller;

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
    return view('index');
});
Route::get('/Welcome', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/matakuliah', [matakuliahController::class, 'index']); 
Route::get('/mahasiswa', [mahasiswaController::class, 'index']); 
Route::get('/programstudi', [programstudiController::class, 'index']); 
Route::get('/pembayaran', [pembayaranController::class, 'index']); 
Route::get('/jadwalperkuliahan', [jadwalperkuliahanController::class, 'index']); 
Route::get('/khs', [khsController::class, 'index']); 

// Route::resource('admin/item', 'App\Http\Controllers\Admin\ItemController');
Route::resource('/admin/item', ItemController::class);
Route::resource('/mahasiswa/Mahasiswa2', Mahasiswa2Controller::class);
