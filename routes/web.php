<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PegawaiController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Welcome
Route::get('/', [OperatorController::class, 'welcome'])->middleware(['auth']);

// Form
Route::resource('form', FormController::class);

// Pegawai
Route::get('index', [PegawaiController::class, 'index'])->middleware(['auth', 'role:admin']);
Route::get('create', [PegawaiController::class, 'create'])->middleware(['auth', 'role:admin']);
Route::post('store', [PegawaiController::class, 'store']);
Route::put('update/{nip}', [PegawaiController::class, 'update']);

// Operator
Route::get('operator', [OperatorController::class, 'index'])->middleware(['auth', 'role:admin']);
// Update Status
Route::post('setuju', [OperatorController::class, 'statusDisetujui']);
Route::post('tolak', [OperatorController::class, 'statusDitolak']);

// Laporan
Route::get('laporan', [OperatorController::class, 'laporan'])->middleware(['auth', 'role:admin']);

// Range Bulan
Route::get('bulan', [FormController::class, 'bulan']);

// Setuju
Route::get('setuju', [OperatorController::class, 'setuju'])->middleware(['auth', 'role:admin']);
Route::get('cari/bulan', [FormController::class, 'bulan1']);

// Tolak
Route::get('tolak', [OperatorController::class, 'tolak'])->middleware(['auth', 'role:admin']);
Route::get('bulan2', [FormController::class, 'bulan2']);