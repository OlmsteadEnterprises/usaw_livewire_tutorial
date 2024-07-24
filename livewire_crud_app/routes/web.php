<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/categories')->name('categories.view.')->middleware(['auth', 'verified'])->group(function () {
        Route::get('/', Category::class)->name('index');
    });
});
