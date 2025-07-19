<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;

Route::get('/banks', [BankController::class, 'index'])->name('bank');
Route::get('/bank-add', [BankController::class, 'create'])->name('bank.create');
Route::post('/bank-add', [BankController::class, 'store'])->name('bank.store');
Route::get('/bank-graph', [BankController::class, 'graph'])->name('bank.graph');
