<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BusinessApplicationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SkilledWorkerApplicationController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function() {
    Route::get('login',[AuthController::class,'login'])->name('admin.auth.login');
    Route::post('login',[AuthController::class,'doLogin'])->name('admin.auth.login');
});

Route::middleware(['auth:web','role:admin|super_admin'])->name('admin.')->group(function() {
    Route::post('form-remarks',[\App\Http\Controllers\FormRemarkController::class,'store'])->name('form-remarks.store');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('home');
    Route::resource('testimonials',TestimonialController::class);
    Route::resource('pages',PageController::class);
    Route::resource('business-applications', BusinessApplicationController::class);
    Route::resource('skilled-worker-applications', SkilledWorkerApplicationController::class);
    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
