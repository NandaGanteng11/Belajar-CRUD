<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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


        
route::get('/',[HomeController::class,'index'])->name('home');
route::get('/halaman/1',[HomeController::class,'halaman1'])->name('halaman1');
route::get('/halaman/2',[HomeController::class,'halaman2'])->name('halaman2');

route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
route::get('/mahasiswa/edit{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
route::put('/mahasiswa/edit{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
route::delete('/mahasiswa/hapus{id}', [MahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');