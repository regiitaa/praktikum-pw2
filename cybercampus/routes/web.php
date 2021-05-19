<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteBackendController;
use App\Http\Controllers\LayananController;
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
Route::get('/', [SiteController::class,'beranda'])->name('beranda'); 
Route::get('/tentang', [SiteController::class,'tentang'])->middleware('auth');
Route::get('/percontohan', [SiteController::class,'percontohan']);  
Route::get('/site/kontak', [SiteController::class,'kontak'])->name('kontak'); 
Route::get('/layanan', [SiteController::class,'layanan']); 
Route::get('/list-dosen/{tahun}', [SiteController::class, 'listDosen']); 
Route::get('/layanan-raw', [SiteController::class, 'tampilLayananRaw']); 
Route::get('/layanan/index', [LayananController::class, 'index'])->name('layanan.index'); 
Route::get('/layanan/detail/{id}', [LayananController::class, 'detail'])->name('layanan.detail'); 
Route::get('/layanan/formtambah', [LayananController::class, 'formTambah'])->name('layanan.formtambah'); 
Route::post('/layanan/tambah', [LayananController::class, 'tambah'])->name('layanan.tambah'); 
Route::get('/layanan/formubah/{id}', [LayananController::class, 'formUbah'])->name('layanan.formubah'); 
Route::post('/layanan/ubah/{id}', [LayananController::class, 'ubah'])->name('layanan.ubah'); 
Route::get('/layanan/hapus/{id}', [LayananController::class, 'hapus'])->name('layanan.hapus'); 
Route::get('/cobaform', [SiteController::class, 'cobaForm'])->name('cobaform'); 
Route::post('/prosesform', [SiteController::class, 'prosesForm'])->name('prosesform'); 

Route::get('/admin/dashboard', [SiteBackendController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/layanan', [LayananController::class,'indexBackend'])->name('admin.layanan')->middleware('auth');
Route::get('/layanan/formtambah_backend', [LayananController::class, 'formTambahBackend'])->name('layanan.formtambah_backend');
Route::post('/layanan/tambahBackend', [LayananController::class,'tambahBackend'])->name('layanan.tambahBackend');
Route::get('/layanan/detail_backend/{id}', [LayananController::class,'detailBackend'])->name('layanan.detail_backend');
Route::get('/layanan/formubah_backend/{id}', [LayananController::class,'formUbahBackend'])->name('layanan.formubah_backend');
Route::post('/layanan/ubah_backend/{id}', [LayananControllerr::class,'ubahBackend'])->name('layanan.ubah_backend');
Route::get('/layanan/hapus_backend/{id}', [LayananController::class,'hapusBackend'])->name('layanan.hapus_backend');



//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/beranda',[SiteController::class,'beranda']);

//App\Http\Controllers\SiteController