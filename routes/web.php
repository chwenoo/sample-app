<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Articles\ArticleController;
use App\Http\Controllers\Category\CategoryController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return "this is users";
});

Route::get('/users/{id}', function ($id) {
    return "this is $id";
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::post('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');

