<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

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
Route::view('immigration-consultants-in-ncr','frontend.immigration-consultants-in-ncr');
Route::view('contact-us', 'frontend.contact-us');
Route::get('business-immigration-assessment',[\App\Http\Controllers\Frontend\BusinessImmigrationController::class,'form'])->name('business-immigration.form');
Route::post('business-immigration-assessment-store',[\App\Http\Controllers\Frontend\BusinessImmigrationController::class,'store'])->name('business-immigration.store');
Route::get('/{any}', [PageController::class,'page'])->where('any', '.*');

