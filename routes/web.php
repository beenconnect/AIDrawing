<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Http; 





Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/fouthPages', [IndexController::class, 'fouthPages'])->name('fourthpages');
