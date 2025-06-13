<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  //  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//Route::get('/super-admin', function () {
//    return view('super-admin.dashboard');
//})->middleware('role:super-admin'); // Hanya super-admin yang dapat mengakses rute ini

//Route::get('/admin-hr', function () {
//    return view('admin-hr.dashboard');
//})->middleware('role:admin-hr'); // Hanya admin-hr yang dapat mengakses rute ini

//Route::get('/manager', function () {
//    return view('manager.dashboard');
//})->middleware('role:manager'); // Hanya manager yang dapat mengakses rute ini

//Route::get('/karyawan', function () {
//    return view('karyawan.dashboard');
//})->middleware('role:karyawan'); // Hanya karyawan yang dapat mengakses rute ini


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth')  // Pastikan hanya pengguna yang sudah login yang bisa mengakses dashboard
    ->middleware('role:admin,hr,manager');  // Membatasi akses berdasarkan role

require __DIR__.'/auth.php';
