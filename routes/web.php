<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;

route::get('/', [StaticController::class, 'index'])->name('home');
route::get('/about', [StaticController::class, 'about'])->name('about');
route::get('/contact', [StaticController::class, 'contact'])->name('contact');
route::get('/store/{cat?}/{item?}', [StaticController::class, 'store'])->name('store');



Route::resource('computer', ComputerController::class);