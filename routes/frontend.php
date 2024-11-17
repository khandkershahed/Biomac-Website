<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('research-papers', [HomeController::class, 'researchPaper'])->name('research.papers');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.add');
