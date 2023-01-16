<?php

use App\Http\Controllers\BeerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeerController::class, 'index'])->name('home');

Route::resource('beers', BeerController::class);
