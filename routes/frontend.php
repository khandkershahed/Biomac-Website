<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about');
Route::get('research-papers', [HomeController::class, 'researchPaper'])->name('research.papers');
Route::get('terms-conditions', [HomeController::class, 'termsConditions'])->name('terms');
Route::get('training', [HomeController::class, 'training'])->name('training');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('blog', [HomeController::class, 'allBlog'])->name('blog');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('service/details/{slug}', [HomeController::class, 'serviceDetails'])->name('service.details');
Route::post('contact/add', [ContactController::class, 'store'])->name('contact.add');
