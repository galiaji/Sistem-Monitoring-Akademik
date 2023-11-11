<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ControllerMahasiswa;
use App\Http\Controllers\IRSController;
use App\Http\Controllers\KHSController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/biodata', [SesiController::class, 'biodata'])->name('biodata'); // Definisi rute ini
    Route::get('/admin/dosenwali', [AdminController::class, 'dosenwali'])->middleware('userAkses:dosenwali');
    Route::get('/admin/departemen', [AdminController::class, 'departemen'])->middleware('userAkses:departemen');
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('userAkses:operator');
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

/** Routes Register */
// Route::get('/register', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register', [ControllerMahasiswa::class, 'create']);
Route::post('/register', [ControllerMahasiswa::class, 'register']);


Route::get('/resetpassword', [ChangePasswordController::class, 'changePassword']);
Route::post('/resetpassword', [ChangePasswordController::class, 'processChangePassword']);

Route::get('/firstLogin', [MahasiswaFirstLogin::class, 'firstLogin'])->middleware(['auth', 'user.role:mahasiswa', 'is.first.login']);

Route::get('/admin/operator/importFormMahasiswa', [RegisterController::class, 'importFormMahasiswa'])->name('importFormMahasiswa');
Route::post('/admin/operator/importMahasiswa', [RegisterController::class, 'importMahasiswa'])->name('importMahasiswa');

Route::get('/akademik/irs', [AkademikController::class, 'showIRS'])->name('show-irs');
Route::post('/akademik/irs/pilih/{id}', [AkademikController::class, 'pilihMatkul'])->name('pilih-matkul');
Route::post('/akademik/irs/batal/{id}', [AkademikController::class, 'batalMemilih'])->name('batal-memilih');

Route::get('/irs', [IRSController::class, 'create'])->name('irs.index');
Route::post('/irs', [IRSController::class, 'store'])->name('irs.store');

Route::get('/khs', [KHSController::class, 'index'])->name('khs.index');
Route::get('/khs', [KHSController::class, 'index'])->name('khs.index');
Route::post('/khs/store', [KHSController::class, 'store'])->name('khs.store');
