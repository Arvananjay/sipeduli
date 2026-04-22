<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'index']);

/*
|--------------------------------------------------------------------------
| MENU HOME (Tutorial / Alur Sistem)
|--------------------------------------------------------------------------
*/

Route::view('/tutorial-pengaduan', 'tutorial-pengaduan');
Route::view('/verifikasi', 'verifikasi');
Route::view('/tindaklanjut', 'tindaklanjut');
Route::view('/selesai', 'selesai');

/*
|--------------------------------------------------------------------------
| TRANSPARANSI DATA PENGADUAN
|--------------------------------------------------------------------------
*/

Route::get('/data-pengaduan/semua', [UserController::class, 'semuaPengaduan']);
Route::get('/data-pengaduan/proses', [UserController::class, 'pengaduanProses']);
Route::get('/data-pengaduan/selesai', [UserController::class, 'pengaduanSelesai']);

/*
|--------------------------------------------------------------------------
| USER PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/pengaduan', [UserController::class, 'pengaduan'])->name('pengaduan');
Route::post('/pengaduan/kirim', [UserController::class, 'storePengaduan'])->name('pengaduan.store');

Route::get('/login', [UserController::class, 'masuk']);
Route::get('/register', [UserController::class, 'daftar']);
Route::get('/tentang', [UserController::class, 'tentang']);

/*
|--------------------------------------------------------------------------
| GUEST USER
|--------------------------------------------------------------------------
*/

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [UserController::class, 'masuk'])->name('user.masuk');
    Route::post('/login/auth', [UserController::class, 'login'])->name('user.login');

    Route::get('/register', [UserController::class, 'register'])->name('user.register');
    Route::post('/register/auth', [UserController::class, 'register_post'])->name('user.register-post');

    Route::post('/getdesa', [IndoRegionController::class, 'getDesa'])->name('getdesa');
    Route::post('/getkota', [IndoRegionController::class, 'getkota'])->name('getkota');
    Route::post('/getkecamatan', [IndoRegionController::class, 'getkecamatan'])->name('getkecamatan');
    Route::post('/getkabupaten', [IndoRegionController::class, 'getkabupaten'])->name('getkabupaten');
});

/*
|--------------------------------------------------------------------------
| USER LOGIN (MASYARAKAT)
|--------------------------------------------------------------------------
*/

Route::middleware(['isMasyarakat'])->group(function () {

    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

    Route::get('/laporan/{who?}', [UserController::class, 'laporan'])->name('pengaduan.laporan');

    Route::get('/pengaduan-detail/{id_pengaduan}', [UserController::class, 'detailPengaduan'])->name('pengaduan.detail');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | ADMIN LOGIN
    |--------------------------------------------------------------------------
    */

    Route::middleware(['isGuest'])->group(function () {
        Route::get('/', [AdminController::class, 'formLogin'])->name('admin.masuk');
        Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    });

    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::middleware(['isAdmin'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/petugas', PetugasController::class);
        Route::resource('/masyarakat', MasyarakatController::class);

        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::post('/laporan-get', [LaporanController::class, 'laporan'])->name('laporan.get');
        Route::post('/laporan/export', [LaporanController::class, 'export'])->name('laporan.export');
    });

    /*
    |--------------------------------------------------------------------------
    | PETUGAS
    |--------------------------------------------------------------------------
    */

    Route::middleware(['isPetugas'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('/pengaduan/{status}', [PengaduanController::class, 'index'])->name('pengaduan.index');

        Route::get('/pengaduan/show/{id_pengaduan}', [PengaduanController::class, 'show'])->name('pengaduan.show');

        Route::delete('/pengaduan/delete/{id_pengaduan}', [PengaduanController::class, 'destroy'])->name('pengaduan.delete');

        Route::post('/tanggapan', [TanggapanController::class, 'response'])->name('tanggapan');
    });
});