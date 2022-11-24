<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;


Route::get('/', [HouseController::class, 'index']);
Route::get('/aanbod/{id}', [HouseController::class, 'houseDetails'])->name('houseDetails');
