<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/{slug}', [SinglePageController::class, 'index']);
