<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/material/create', [MaterialController::class, 'create'])->name('materials.create');
Route::post('/material', [MaterialController::class, 'store'])->name('materials.store');
Route::get('/material/{codigo}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
Route::put('/material/{codigo}', [MaterialController::class, 'updateWeb'])->name('materials.update');
Route::get('/materiales', [MaterialController::class, 'index'])->name('materials.index');

