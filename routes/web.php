<?php

use Illuminate\Support\Facades\Route;	

/**
 * Password generator
 * Comment code ini jika deploy		
 */
Route::get('/pw', function () {
	return view('pw');
});

/**
 * Guest
 */

use App\Http\Controllers\guest\BerandaController;
use App\Http\Controllers\guest\PoskoPengaduanController;
use App\Http\Controllers\guest\StrukturOrganisasiController;
use App\Http\Controllers\guest\KabinetController;

Route::get('/', BerandaController::class)
	->name('guest.beranda');

Route::get('/struktur-organisasi', StrukturOrganisasiController::class)
	->name('guest.struktur-organisasi');

Route::get('/kabinet', KabinetController::class)
	->name('guest.kabinet');

Route::get('/posko-pengaduan', [PoskoPengaduanController::class, 'create'])
	->name('guest.posko-pengaduan.create');

Route::post('/posko-pengaduan/store', [PoskoPengaduanController::class, 'store'])
	->name('guest.posko-pengaduan.store');

/**
 * Admin
 */

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPoskoPengaduanController;

Route::middleware(['auth'])->group(function () {
	Route::get('admin-panel/dashboard', AdminDashboardController::class)
		->name('admin.dashboard');

	Route::get('admin-panel/posko-pengaduan', [AdminPoskoPengaduanController::class, 'index'])
		->name('admin.posko-pengaduan');

	Route::get('admin-panel/posko-pengaduan/edit/{uuid}', [AdminPoskoPengaduanController::class, 'edit'])
    ->name('admin.posko-pengaduan.edit');

	Route::put('admin-panel/posko-pengaduan/update/{uuid}', [AdminPoskoPengaduanController::class, 'update'])
    ->name('admin.posko-pengaduan.update');
});


require __DIR__ . '/auth.php';
