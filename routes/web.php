<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

Route::get('/',[PublicController::class,"homePage"] )->name("homePage");

// rotte annuncio
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/index', [PostController::class, 'index'])->name('post.indexPost');
Route::get('/post/detail/{post}', [PostController::class, 'show'])->name('post.detailPost');
Route::get('/category/{category}', [PostController::class, 'byCategory'])->name('byCategory');

// rotte revisor
Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');