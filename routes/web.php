<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact_us');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/solution',[HomeController::class, 'solution'])->name('solution');
Route::get('/job-seaker',[HomeController::class, 'job_seaker'])->name('job-seaker');