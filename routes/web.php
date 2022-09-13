<?php

use App\Http\Controllers\Frontend\EmployerController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
Route::get('test/mail', function () {
    $model = \App\Models\FormSubmission::orderBy('id','DESC')->first();
    \Illuminate\Support\Facades\Mail::to('shabeeboali@gmail.com')->bcc(['shabeeboali@outlook.com'])->send(new \App\Mail\BusinessApplicationMail($model));
    \Illuminate\Support\Facades\Mail::to('shabeeboali@gmail.com')->bcc(['shabeeboali@outlook.com'])->send(new \App\Mail\BusinessApplicationCopyMail($model));
});

Route::get('/employer/email/verify', function () {
    return view('frontend.employer.verify-email');
})->middleware('auth:employer')->name('verification.notice');
Route::get('/employer/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect(route('employer.dashboard'));
})->middleware(['auth:employer','signed'])->name('verification.verify');
Route::post('/employer/email/verification-notification', function (\Illuminate\Http\Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})->middleware(['auth:employer', 'throttle:6,1'])->name('verification.send');

Route::prefix('employer')->name('employer.')->group(function(){
    Route::view('login','frontend.employer.login')->name('login')->middleware('guest:employer');
    Route::post('login', [EmployerController::class,'login'])->name('login.post');
    Route::view('register','frontend.employer.register')->name('register')->middleware('guest:employer');
    Route::post('register', [EmployerController::class,'register'])->name('register.post');
    Route::middleware(['auth:employer','verified'])->group(function(){
        Route::view('document-form','frontend.employer.document-form')->name('document-form');
        Route::middleware('complete_registration')->group(function () {
            Route::get('dashboard',[EmployerController::class,'dashboard'] )->name('dashboard');
        });
    });
});

Route::view('job-seeker','frontend.job-seeker')->name('job-seeker');
Route::post('job-seeker',[\App\Http\Controllers\Frontend\JobSeekerController::class,'store'])->name('job-seeker.store');
Route::view('skilled-worker-assessment','frontend.skilled-worker-assessment')->name('skilled-worker-assessment');
Route::view('immigration-consultants-in-ncr','frontend.immigration-consultants-in-ncr');
Route::view('contact-us', 'frontend.contact-us');
Route::redirect('business-immigration-assessment.php','business-immigration-assessment');
Route::get('business-immigration-assessment',[\App\Http\Controllers\Frontend\BusinessImmigrationController::class,'form'])->name('business-immigration.form');
Route::post('business-immigration-assessment-store',[\App\Http\Controllers\Frontend\BusinessImmigrationController::class,'store'])->name('business-immigration.store');
Route::get('/{any}', [PageController::class,'page'])->where('any', '.*');



