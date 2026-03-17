<?php

use App\Http\Controllers\SuperheroController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('superheroes.index'));

Route::resource('superheroes', SuperheroController::class);