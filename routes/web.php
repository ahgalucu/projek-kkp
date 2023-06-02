<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\KabKotaController;
use App\Http\Controllers\ProvinsiPostController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\DetailPelatihanController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\EvaluasiDownloadController;
use App\Http\Controllers\EvaluasiPublicController;
use App\Http\Controllers\EvaluasiShowController;
use App\Http\Controllers\JenisPelatihanController;
use App\Http\Controllers\JenkelController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PadController;
use App\Http\Controllers\PadDownloadController;
use App\Http\Controllers\PadPublicController;
use App\Http\Controllers\PadShowController;
use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PesertaPublicController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RekaptulasiController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TotController;
use App\Http\Controllers\TotDownloadController;
use App\Http\Controllers\TotmController;
use App\Http\Controllers\TotmDownloadController;
use App\Http\Controllers\TotmPublicController;
use App\Http\Controllers\TotmShowController;
use App\Http\Controllers\TotPublicController;
use App\Http\Controllers\TotShowController;

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
    return view('main.index');
});

Route::get('/admin', [loginController::class, 'index'])->middleware('guest');
Route::post('/admin', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts/wilayah', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/posts/provinsi', ProvinsiPostController::class)->middleware('auth');
Route::resource('/dashboard/posts/kab-kota', KabKotaController::class)->middleware('auth');
Route::resource('/dashboard/posts/unit-kerja', UnitKerjaController::class)->middleware('auth');
Route::resource('/dashboard/posts/kecamatan', KecamatanController::class)->middleware('auth');
Route::resource('/dashboard/posts/desa', DesaController::class)->middleware('auth');
Route::resource('/dashboard/posts/peserta', PesertaController::class)->middleware('auth');
Route::resource('/dashboard/posts/jabatan', JabatanController::class)->middleware('auth');
Route::resource('/dashboard/posts/golongan', GolonganController::class)->middleware('auth');
Route::resource('/dashboard/posts/detail-pelatihan', DetailPelatihanController::class)->middleware('auth');
Route::resource('/dashboard/posts/pengajar', PengajarController::class)->middleware('auth');
Route::resource('/dashboard/posts/pelaksanaan', PelaksanaanController::class)->middleware('auth');
Route::resource('/dashboard/posts/status', StatusController::class)->middleware('auth');
Route::resource('/dashboard/posts/jenkel', JenkelController::class)->middleware('auth');
Route::resource('/dashboard/posts/sertifikat', SertifikatController::class)->middleware('auth');
Route::resource('/dashboard/posts/jenis-pelatihan', JenisPelatihanController::class)->middleware('auth');
Route::resource('/dashboard/posts/modul', ModulController::class)->middleware('auth');
Route::resource('/dashboard/posts/rekaptulasi', RekaptulasiController::class)->middleware('auth');
Route::resource('/dashboard/posts/tot', TotController::class)->middleware('auth');
Route::resource('/dashboard/posts/pad', PadController::class)->middleware('auth');
Route::resource('/dashboard/posts/totm', TotmController::class)->middleware('auth');
Route::resource('/dashboard/posts/evaluasi', EvaluasiController::class)->middleware('auth');

Route::resource('/dashboard/posts/tot-data', TotShowController::class)->middleware('auth');
Route::resource('/dashboard/posts/pad-data', PadShowController::class)->middleware('auth');
Route::resource('/dashboard/posts/totm-data', TotmShowController::class)->middleware('auth');
Route::resource('/dashboard/posts/evaluasi-data', EvaluasiShowController::class)->middleware('auth');

// Route::resource('/dashboard/posts/tot-print', TotDownloadController::class)->middleware('auth');

Route::get('/dashboard/posts/tot-print', [TotDownloadController::class, 'print'])->middleware('auth');
Route::get('/dashboard/posts/pad-print', [PadDownloadController::class, 'print'])->middleware('auth');
Route::get('/dashboard/posts/totm-print', [TotmDownloadController::class, 'print'])->middleware('auth');
Route::get('/dashboard/posts/evaluasi-print', [EvaluasiDownloadController::class, 'print'])->middleware('auth');


Route::resource('/guest/dashboard', PublicController::class);
Route::resource('/guest/show', PesertaPublicController::class);

Route::resource('/guest/tot', TotPublicController::class);
Route::resource('/guest/pad', PadPublicController::class);
Route::resource('/guest/totm', TotmPublicController::class);
Route::resource('/guest/evaluasi', EvaluasiPublicController::class);