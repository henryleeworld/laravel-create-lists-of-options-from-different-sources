<?php

use App\Http\Controllers\MarvelCharacterController;
use Illuminate\Support\Facades\Route;

Route::get('marvel/character/', [MarvelCharacterController::class, 'show']);
