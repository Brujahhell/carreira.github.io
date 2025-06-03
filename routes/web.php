<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class, 'index'])->name('index');
Route::post('/form', [Controller::class, 'store'])->name('form.store');


