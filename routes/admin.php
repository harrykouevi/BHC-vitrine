<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;

use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'admin'])->group(function () {
Route::middleware([])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
    // Route::post('/articles/store', [ArticleController::class, 'store'])->name('admin.articles.store');
    // Route to show a single article
   Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('admin.articles.show');

   // Route to edit an existing article (show the form)
   Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');

   /////////////////////////////


    // Route pour stocker un nouvel article
    Route::post('/posts', [ArticleController::class, 'store'])->name('admin.posts.store');
    Route::post('/upload-image', [ArticleController::class, 'uploadImage'])->name('admin.uploadImage');
    Route::get('/articles-editors', function () {

        return view('admin.ckeditor');
    })->name('admin.posts.editor');

    // // Route pour afficher un article spécifique
    // Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    // // Route pour afficher le formulaire d'édition d'un article
    // Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    // // Route pour mettre à jour un article spécifique
    // Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    // // Route pour supprimer un article spécifique
    // Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

