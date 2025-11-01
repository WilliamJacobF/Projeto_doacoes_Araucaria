<?php

use App\Http\Controllers\doacoescontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [doacoescontroller::class, 'index'])->name('Doações-index');