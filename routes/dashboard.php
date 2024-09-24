<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('/artikel', [ArtikelController::class, 'indexDashboard'])->name('artikel-dashboard.index');
Route::get('/artikel/create', [ArtikelController::class, 'createDashboard'])->name('artikel-dashboard.create');
Route::post('/artikel/store', [ArtikelController::class, 'storeDashboard'])->name('artikel-dashboard.store');

Route::get('/artikel/edit/{id}', [ArtikelController::class, 'editDashboard'])->name('artikel-dashboard.edit');
Route::put('/artikel/update/{id}', [ArtikelController::class, 'updateDashboard'])->name('artikel-dashboard.update');
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroyDashboard'])->name('artikel-dashboard.destroy');
Route::get('/artikel/{id}', [ArtikelController::class, 'showDashboard'])->name('artikel-dashboard.show');

