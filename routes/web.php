<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PenyewaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//user
Route::middleware(['auth', 'userMiddleware'])->group(function(){
    
    Route::get('dashboard',[UserController::class, 'index'])->name('dashboard');
    Route::get('/profiles', [ProfilesController::class, 'index'])->name('user.profiles');
    Route::get('/pelayanan', [PelayananController::class, 'index'])->name('user.pelayanan');
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('user.kegiatan');
    Route::get('/galeri', [GaleriController::class, 'index'])->name('user.galeri');
    Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('user.penyewaan');



});

// Admin
Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    
    Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');

});
