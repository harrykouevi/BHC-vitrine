<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CommentaireController;


use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'admin'])->group(function () {
Route::middleware(['auth'])->group(function () {


    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
    // Route::post('/articles/store', [ArticleController::class, 'store'])->name('admin.articles.store');
    // Route to show a single article
   Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('admin.articles.show');
   Route::post('/upload-image', [ArticleController::class, 'uploadImage'])->name('admin.uploadImage');
   // Route to edit an existing article (show the form)
   Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
   Route::get('/admin/commentaires', [CommentaireController::class, 'index'])->name('admin.commentaires');
   Route::post('/admin/commentaires/{id}/approuver', [CommentaireController::class, 'approuver'])->name('admin.commentaires.approuver');
   Route::post('/admin/commentaires/{id}/rejeter', [CommentaireController::class, 'rejeter'])->name('admin.commentaires.rejeter');

   //affichage et gestion des blogs
    Route::resource('blogs', BlogController ::class);


});

