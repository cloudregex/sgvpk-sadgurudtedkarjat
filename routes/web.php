<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index']);
Route::get('/about', [ClientController::class, 'about'])->name('about-us');
Route::get('/finance', [ClientController::class, 'finance'])->name('finance');
Route::get('/deled', [ClientController::class, 'Deled'])->name('deled');
Route::get('/mandatory-disclosure', [ClientController::class, 'mandatoryDisclosure'])->name('mandatory_disclosure');
Route::get('/facilities', [ClientController::class, 'Facilities'])->name('facilities');
Route::get('/biomatric', [ClientController::class, 'biomatric'])->name('biomatric');
Route::get('/gallery', [ClientController::class, 'Gallery'])->name('gallery');
Route::get('/impsite', [ClientController::class, 'Impsite'])->name('impsite');
Route::get('/student-details', [ClientController::class, 'studentDetails'])->name('student-details');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
