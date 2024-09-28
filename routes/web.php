<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::middleware('auth')->group(function () {
   Route::view('profile', 'profile')->name('profile');
   Route::get('/tasks', App\Livewire\Tasks\Index::class)->name('tasks');
});

require __DIR__.'/auth.php';
