<?php

use App\Http\Controllers\VehiclePlateController;

Route::get('/idplat', [VehiclePlateController::class, 'index'])->name('vehicle-plate.index');
Route::post('/idplat', [VehiclePlateController::class, 'check'])->name('vehicle-plate.check');
Route::post('/idplat/refresh', [VehiclePlateController::class, 'refresh'])->name('vehicle-plate.refresh');