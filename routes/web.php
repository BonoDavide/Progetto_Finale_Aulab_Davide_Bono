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
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{post}',[RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{post}',[RevisorController::class, 'reject'])->name('reject');

Route::get('/revisor/request',[RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//rotta del footer per revisor
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');