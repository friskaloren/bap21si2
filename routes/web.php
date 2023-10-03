<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

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

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

// //data mahasiswa
// Route::get('/Mahasiswa', [mahasiswacontroller::class, 'index']); 
// //     return view('mahasiswa');
// // });