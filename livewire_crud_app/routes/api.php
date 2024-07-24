<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Livewire\Category;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
