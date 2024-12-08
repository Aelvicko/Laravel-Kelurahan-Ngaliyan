<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;

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



//auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');
//auth

// ADMIN routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{user}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);

    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
// ADMIN routes

// Guest routes (DASHBOARD BERANDA)
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Guest routes (ABOUT)
Route::get('/about', function () {
    return view('page_web.about.about');
})->name('about');

// Guest routes (LAYANAN)
Route::get('/program', function () {
    return view('page_web.program.program');
})->name('program');

// Guest routes (BERITA)
Route::get('/berita', function () {
    return view('page_web.berita.berita');
})->name('berita');

// Guest routes (KONTAK)
Route::get('/kontak', function () {
    return view('page_web.kontak.kontak');
})->name('kontak');

// Guest routes (PROGRAM LAYANAN-kk)
Route::get('/layanan_kk', function () {
    return view('page_web.layanan_kk.kk');
})->name('layanan_kk');

// Guest routes (PROGRAM LAYANAN-ktp)
Route::get('/layanan_ktp', function () {
    return view('page_web.layanan_ktp.ktp');
})->name('layanan_ktp');

// Guest routes (PROGRAM LAYANAN-nikah)
Route::get('/layanan_nikah', function () {
    return view('page_web.layanan_nikah.syarat_nikah');
})->name('layanan_nikah');

// Guest routes (PROGRAM LAYANAN-akte kelahiran)
Route::get('/layanan_akte_kelahiran', function () {
    return view('page_web.layanan_akte_kelahiran.akte_kelahiran');
})->name('layanan_akte_kelahiran');

// Guest routes (PROGRAM LAYANAN-akte kematian)
Route::get('/layanan_akte_kematian', function () {
    return view('page_web.layanan_akte_kematian.akte_kematian');
})->name('layanan_akte_kematian');

// Guest routes (PROGRAM LAYANAN-pengaduan masyarakat)
Route::get('/layanan_pengaduan', function () {
    return view('page_web.layanan_pengaduan.pengaduan_masyarakat');
})->name('layanan_pengaduan');

// Guest routes (PROGRAM LAYANAN-alur sistem pelayanan)
Route::get('/layanan_pelayanan', function () {
    return view('page_web.layanan_pelayanan.sistem_pelayanan');
})->name('layanan_pelayanan');

// Guest routes (PROGRAM LAYANAN-cek PBB)
Route::get('/layanan_pbb', function () {
    return view('page_web.layanan_pbb.cek_pbb');
})->name('layanan_pbb');

// Guest routes (PROGRAM KELEMBAGAAN-LPMK)
Route::get('/kelembagaan_lpmk', function () {
    return view('page_web.kelembagaan_lpmk.lpmk');
})->name('kelembagaan_lpmk');

// Guest routes (PROGRAM KELEMBAGAAN-UMKM)
Route::get('/kelembagaan_umkm', function () {
    return view('page_web.kelembagaan_umkm.umkm');
})->name('kelembagaan_umkm');

// Guest routes (PROGRAM KELEMBAGAAN-BKM)
Route::get('/kelembagaan_bkm', function () {
    return view('page_web.kelembagaan_bkm.bkm');
})->name('kelembagaan_bkm');

// Guest routes (PROGRAM KELEMBAGAAN-PKK)
Route::get('/kelembagaan_pkk', function () {
    return view('page_web.kelembagaan_pkk.pkk');
})->name('kelembagaan_pkk');

// Guest routes (PROGRAM KELEMBAGAAN-KARANG TARUNA)
Route::get('/kelembagaan_karang_taruna', function () {
    return view('page_web.kelembagaan_karang_taruna.karang_taruna');
})->name('kelembagaan_karang_taruna');

// Guest routes (PROGRAM KELEMBAGAAN-FKK)
Route::get('/kelembagaan_fkk', function () {
    return view('page_web.kelembagaan_fkk.fkk');
})->name('kelembagaan_fkk');

// Guest routes (PROGRAM KELEMBAGAAN-KSM)
Route::get('/kelembagaan_ksm', function () {
    return view('page_web.kelembagaan_ksm.ksm');
})->name('kelembagaan_ksm');

// Guest routes (PROGRAM KELEMBAGAAN-KWT TUNAS BAHAGIA)
Route::get('/kelembagaan_kwt', function () {
    return view('page_web.kelembagaan_kwt.kwt');
})->name('kelembagaan_kwt');


// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG KESEHATAN)
Route::get('/pemberdayaan_kesehatan', function () {
    return view('page_web.pemberdayaan_kesehatan.kesehatan');
})->name('pemberdayaan_kesehatan');


// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG PARIWISATA)
Route::get('/pemberdayaan_pariwisata', function () {
    return view('page_web.pemberdayaan_pariwisata.pariwisata');
})->name('pemberdayaan_pariwisata');

// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG PENDIDIKAN)
Route::get('/pemberdayaan_pendidikan', function () {
    return view('page_web.pemberdayaan_pendidikan.pendidikan');
})->name('pemberdayaan_pendidikan');

// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG KAMTIBMAS)
Route::get('/pemberdayaan_kamtibmas', function () {
    return view('page_web.pemberdayaan_kamtibmas.kamtibmas');
})->name('pemberdayaan_kamtibmas');

// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG EKONOMI)
Route::get('/pemberdayaan_ekonomi', function () {
    return view('page_web.pemberdayaan_ekonomi.ekonomi');
})->name('pemberdayaan_ekonomi');

// Guest routes (PROGRAM PEMBERDAYAAN-BIDANG PEREMPUAN)
Route::get('/pemberdayaan_perempuan', function () {
    return view('page_web.pemberdayaan_perempuan.perempuan');
})->name('pemberdayaan_perempuan');

// Guest routes (BERITA-BIDANG PEMBANGUNAN)
Route::get('/berita_pembangunan', function () {
    return view('page_web.berita_pembangunan.pembangunan');
})->name('berita_pembangunan');

// Guest routes (BERITA-BIDANG SOSIAL)
Route::get('/berita_sosial', function () {
    return view('page_web.berita_sosial.sosial');
})->name('berita_sosial');

// Guest routes (BERITA-BIDANG PEMERINTAHAN)
Route::get('/berita_pemerintahan', function () {
    return view('page_web.berita_pemerintahan.pemerintahan');
})->name('berita_pemerintahan');

// Guest routes (BERITA-BIDANG TRANTIB)
Route::get('/berita_trantib', function () {
    return view('page_web.berita_trantib.trantib');
})->name('berita_trantib');

// Guest routes (BERITA-BIDANG SEKRETARIAT)
Route::get('/berita_sekretariat', function () {
    return view('page_web.berita_sekretariat.sekretariat');
})->name('berita_sekretariat');






