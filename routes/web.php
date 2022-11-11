<?php
use App\Http\Controllers\krsController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\LaporanController;
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
    return view('mahasiswa.index');
});

Route::controller(mahasiswaController::class)->group(function () {
    Route::get('/mahasiswa', 'index');
    Route::get('/mahasiswa/{id}', 'show');
    Route::post('/mahasiswa', 'store');
    Route::get('/mahasiswa/new', 'create');
    Route::delete('/mahasiswa/{id}', 'destroy');
    Route::get('/mahasiswa/{id}', 'edit');
    Route::put('/mahasiswa/{id}', 'update');
});

Route::controller(krsController::class)->group(function () {
    Route::get('/krs', 'index');
    Route::get('/krs/{id}', 'show');
    Route::post('/krs', 'store');
    Route::get('/krs/new', 'create');
    Route::delete('/krs/{id}', 'destroy');
    Route::get('/krs/{id}', 'edit');
    Route::put('/krs/{id}', 'update');
});

Route::get('/laporan',[LaporanController::class,'index']);
Route::get('/laporan/cetak_pdf',[LaporanController::class,'cetak_pdf']);    
Route::resource('admin/mahasiswa', 'App\Http\Controllers\Admin\mahasiswaController');
Route::resource('admin/matakuliah', 'App\Http\Controllers\Admin\matakuliahController');
Route::resource('admin/sertifikat', 'App\Http\Controllers\Admin\sertifikatController');
Route::resource('admin/dosen', 'App\Http\Controllers\Admin\dosenController');