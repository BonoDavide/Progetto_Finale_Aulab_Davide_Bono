<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,"homePage"] )->name("homePage");

// rotta vista creazione annuncnio
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/index', [PostController::class, 'index'])->name('post.indexPost');
Route::get('/post/detail/{post}', [PostController::class, 'show'])->name('post.detailPost');