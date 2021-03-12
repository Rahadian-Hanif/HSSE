<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('Level');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('monitoringKesehatan', [App\Http\Controllers\MonitoringController::class, 'index']);

Route::get('adminMonitoring', [App\Http\Controllers\MonitoringController::class, 'admin']);

Route::get('viewMonitoring/{id}/{tgl}', [App\Http\Controllers\MonitoringController::class, 'view']);

Route::post('submitMonitoring', [App\Http\Controllers\MonitoringController::class, 'submit']);

Route::get('/sks', [App\Http\Controllers\SksController::class, 'index']);

Route::get('adminSks', [App\Http\Controllers\SksController::class, 'admin']);

Route::post('uploadSks', [App\Http\Controllers\SksController::class, 'proses_upload']);

Route::get('hapusSks/{id}', [App\Http\Controllers\SksController::class, 'delete']);

Route::get('beritaAcara', [App\Http\Controllers\BeritaAcaraController::class, 'index']);

Route::get('adminBeritaAcara', [App\Http\Controllers\BeritaAcaraController::class, 'admin']);

Route::post('uploadBeritaAcara', [App\Http\Controllers\BeritaAcaraController::class, 'upload']);

Route::get('HapusBeritaAcara/{id}', [App\Http\Controllers\BeritaAcaraController::class, 'delete']);

Route::get('laporanPelanggaran', [App\Http\Controllers\LaporanPelanggaranController::class, 'index']);

Route::get('adminLaporanPelanggaran', [App\Http\Controllers\LaporanPelanggaranController::class, 'admin']);

Route::get('generatePDF/{id}', [App\Http\Controllers\LaporanPelanggaranController::class, 'cetak']);

Route::post('uploadPelanggaran', [App\Http\Controllers\LaporanPelanggaranController::class, 'upload']);

Route::get('hapusLaporanPelanggaran/{id}', [App\Http\Controllers\LaporanPelanggaranController::class, 'delete']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('adminProfile', [App\Http\Controllers\ProfileController::class, 'admin']);

Route::post('updateProfile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::post('gantiPassword', [App\Http\Controllers\ProfileController::class, 'gantiPassword']);

Route::get('dataPegawai', [App\Http\Controllers\DataPegawaiController::class, 'index']);

Route::post('tambahPegawai', [App\Http\Controllers\DataPegawaiController::class, 'add']);

Route::post('editPegawai/{id}', [App\Http\Controllers\DataPegawaiController::class, 'edit']);

Route::get('hapusPegawai/{id}', [App\Http\Controllers\DataPegawaiController::class, 'hapus']);

Route::get('userGuide', [App\Http\Controllers\UserGuideController::class, 'index']);