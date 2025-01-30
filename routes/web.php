<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

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
    Route::put('/dashboard/user/{id}', [UserController::class, 'update'])->name('dashboard.update');


    Route::resource('articles', ArticleController::class);

    Route::resource('categories', CategoryController::class);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
// ADMIN - MESSAGES routes
Route::get('/messages', [MessageController::class, 'index'])->name('contacts.index');
Route::delete('/messages/{contact}', [MessageController::class, 'destroy'])->name('messages.destroy');

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

// Guest routes (KONTAK - MESSAGES)
Route::post('kontak', [KontakController::class, 'store'])->name('kontak.store');



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
