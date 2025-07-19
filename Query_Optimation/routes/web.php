<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::get('/create-query', [QueryController::class, 'create'])->name('query.create');
Route::post('/create-query', [QueryController::class, 'store'])->name('query.store');