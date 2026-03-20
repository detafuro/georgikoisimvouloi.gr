<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/api/cv', [ContactController::class, 'sendCv'])->name('cv.send');
