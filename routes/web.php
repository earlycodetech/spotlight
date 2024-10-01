<?php

use App\Http\Controllers\BookController;
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
Route::post('categories/create', [CategoriesController::class, 'store'])->name('categories.store');

Route::get('all-categories', [CategoriesController::class, 'index'])->name('categories.index');

Route::get('categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::patch('categories/{id}/edit', [CategoriesController::class, 'update'])->name('categories.update');

Route::delete('categories/{id}/delete', [CategoriesController::class, 'destroy'])->name('categories.destroy');


Route::resource('books', BookController::class)->middleware(['auth', 'is.admin']);