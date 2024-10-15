<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuryaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function(){
//     $profil = 'saya masih pemula';
//     return view('blog', ['data' => $profil]);
// });

// ini digunakan ketikan hanya menampilkan halaman saja

Route::middleware('guest')->group(function(){
    Route::get('/registrasi', [AuthController::class, 'tampilregistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');
    Route::get('/login', [AuthController::class, 'tampillogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitlogin'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/siswa', [SuryaController::class, 'tampil'])->name('siswa.tampil');
    Route::get('/siswa/tambah', [SuryaController::class, 'tambah'])->name('siswa.tambah');
    Route::post('/siswa/submit', [SuryaController::class, 'submit'])->name('siswa.submit');
    Route::get('/siswa/edit/{id}', [SuryaController::class, 'edit'])->name('siswa.edit');
    Route::post('/siswa/update/{id}', [SuryaController::class, 'update'])->name('siswa.update');
    Route::post('/siswa/delete/{id}', [SuryaController::class, 'delete'])->name('siswa.delete');
});

