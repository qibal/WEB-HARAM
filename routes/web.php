<?php

use Illuminate\Support\Facades\Route;

// user
use App\Http\Controllers\user\userController;

// admin
use App\Http\Controllers\admin\adminController;
// auth
use App\Http\Controllers\authController;


Route::get('/', [userController::class, 'kategoriVidio'])->name('/');


// auth
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register/proses', [authController::class, 'prosesRegistrasi'])->name('prosesRegistrasi');

Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login/proses', [authController::class, 'prosesLogin'])->name('prosesLogin');

Route::post('/logout', [authController::class, 'logout'])->name('logout');


// user
Route::middleware(['auth:user', 'PreventBackHistory'])->group(function () {
    Route::get('/Indohub/user', [userController::class, 'kategoriVidio'])->name('dashboard-user');
    Route::get('/IndoHub/kategori/{K_vidio}', [userController::class, 'ListVidio']);
    Route::get('/IndoHub/kategori/{slug_kategori}', [userController::class, 'ListVidio']);
    Route::get('/IndoHub/vidioPlayer/{slug_vidio}', [userController::class, 'vidioPlayer']);
});






Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
    // admin
    //dashboard
    Route::get('/IndoHub/admin/dashboard', [adminController::class, 'dashboardAdmin'])->name('dashboard-admin');

    // kategori
    Route::get('/IndoHub/admin/kategori', [adminController::class, 'kategoriAdmin'])->name('kategoriAdmin');
    Route::get('/IndoHub/admin/kategori/Tambah', [adminController::class, 'kategoriAdminTambah'])->name('kategoriAdminTambah');
    Route::post('/IndoHub/admin/kategori/Tambah/Add', [adminController::class, 'kategoriAdminAdd'])->name('kategoriAdminAdd');
    Route::get('/IndoHub/admin/kategori/Edit/{id}', [adminController::class, 'kategoriAdminEdit'])->name('kategoriAdminEdit');
    Route::post('/IndoHub/admin/kategori/Update', [adminController::class, 'kategoriAdminUpdate'])->name('kategoriAdminUpdate');
    Route::get('/IndoHub/admin/kategori/delete/{id}', [adminController::class, 'kategoriAdminDelete'])->name('kategoriAdminDelete');
    // vidio
    Route::get('/IndoHub/admin/vidio', [adminController::class, 'vidioAdmin'])->name('vidioAdmin');
    Route::get('/IndoHub/admin/vidio/Tambah', [adminController::class, 'vidioAdminTambah'])->name('vidioAdminTambah');
    Route::post('/IndoHub/admin/vidio/Tambah/Add', [adminController::class, 'vidioAdminAdd'])->name('vidioAdminAdd');
    Route::get('/IndoHub/admin/vidio/Edit/{id}', [adminController::class, 'vidioAdminEdit'])->name('vidioAdminEdit');
    Route::post('/IndoHub/admin/vidio/Update', [adminController::class, 'vidioAdminUpdate'])->name('vidioAdminUpdate');
    Route::get('/IndoHub/admin/vidio/delete/{id}', [adminController::class, 'vidioAdminDelete'])->name('vidioAdminDelete');
});
