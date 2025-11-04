<?php

use App\Http\Controllers\doacoescontroller;
use App\Http\Controllers\pedidoscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [doacoescontroller::class, 'index'])->name('Doações-index');

Route::get('/solicitações', [pedidoscontroller::class, 'index'])->name('solicitações-index');
Route::get('/create/solicitações', [pedidoscontroller::class, 'create'])->name('solicitações-create');
Route::post('/solicitações', [pedidoscontroller::class, 'store'])->name('solicitações-store');