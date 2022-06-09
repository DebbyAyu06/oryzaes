<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AlatController;

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

Route::get('/', [LoginController::class,'halamanlogin'])->name('halamanlogin');
Route::post('/', [LoginController::class,'postlogin'])->name('postlogin');

Route::get('/dashboard', function () {return view('Template.dashboard');})->name('dashboard');

Route::get('/penyewa', [PenyewaController::Class, 'halamanpenyewa'])->name('penyewa');
Route::get('/tambahpenyewa', [PenyewaController::Class, 'tambahpenyewa'])->name('tambahpenyewa');
Route::post('/simpanpenyewa', [PenyewaController::Class, 'storepenyewa'])->name('simpanpenyewa');
Route::get('/editpenyewa/{$idpenyewa}', [PenyewaController::Class, 'editpenyewa'])->name('editpenyewa');

Route::get('/alat', [AlatController::Class, 'halamanalat'])->name('alat');
Route::get('/tambahalat', [AlatController::Class, 'tambahalat'])->name('tambahalat');
Route::post('/simpanalat', [AlatController::Class, 'storealat'])->name('simpanalat');

// Route::get('/login', function () {return view('Login.login');});
// Route::get('/tambahpenyewa', function () {return view('Penyewa.tambahpenyewa');});
Route::get('/penyewaan', function () {return view('Penyewaan.penyewaan');});
Route::get('/tambahpenyewaan', function () {return view('Penyewaan.tambahpenyewaan');});
// Route::get('/alat', function () {return view('Alat.alat');});
// Route::get('/laporan', function () {return view('Template.laporan');});
// Route::get('/user', function () {return view('Template.user');});