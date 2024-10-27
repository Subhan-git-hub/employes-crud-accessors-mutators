<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployesController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employes',EmployesController::class);

