<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;


Route::get('/', [HouseController::class, 'index']);