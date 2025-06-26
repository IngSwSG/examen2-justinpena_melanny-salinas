<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/material/create', [MaterialController::class, 'create'])->name('materials.create');
Route::post('/material', [MaterialController::class, 'store'])->name('materials.store');

