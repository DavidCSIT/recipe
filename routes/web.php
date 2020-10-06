<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::resource('recipes', RecipeController::class);

Route::get('/', function () {
    return view('welcome');
});
