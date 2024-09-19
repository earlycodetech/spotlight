<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, 'homePage'])->name('home.page');
Route::get('about', [PageController::class, 'aboutPage'])->name('about.page');
Route::get('categories', [PageController::class, 'categoriesPage'])->name('categories.page');
Route::get('library', [PageController::class, 'libraryPage'])->name('library.page');
Route::get('contact', [PageController::class, 'contactPage'])->name('contact.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');