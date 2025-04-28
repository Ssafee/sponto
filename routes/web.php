<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact_us');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/solution',[HomeController::class, 'solution'])->name('solution');
Route::get('/job-seeker',[HomeController::class, 'job_seaker'])->name('job-seaker');
Route::get('/privacy-policy',[HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms-conditions',[HomeController::class, 'terms_conditions'])->name('terms-conditions');

Route::get('/saas-firms',[HomeController::class, 'saas_firm'])->name('saas_firm');
Route::get('/marketing-agancy',[HomeController::class, 'marketing_agancy'])->name('marketing-agancy');
Route::get('/pharmaceutical',[HomeController::class, 'pharmaceutical'])->name('pharmaceutical');
Route::get('/real-estate',[HomeController::class, 'real_estate'])->name('real_estate');
Route::get('/logistics',[HomeController::class, 'logistics'])->name('logistics');
Route::get('/Accounting-&-Finance',[HomeController::class, 'Accounting_Finance'])->name('Accounting_Finance');
Route::get('/Ecommerce',[HomeController::class, 'Ecommcer'])->name('Ecommcer');
Route::get('/home-services',[HomeController::class, 'home_services'])->name('home_services');

