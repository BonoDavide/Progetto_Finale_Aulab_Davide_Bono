<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,"homePage"] )->name("homePage");

// rotta vista creazione annuncnio
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');