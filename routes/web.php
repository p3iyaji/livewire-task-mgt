<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::middleware('auth')->group(function () {
   Route::view('profile', 'profile')->name('profile');
   Route::get('/tasks', App\Livewire\Tasks\Index::class)->name('tasks');
   Route::get('/gittest', \App\Livewire\GittestComponent::class)->name('gittest');
   Route::get('/soccer', \App\Livewire\Soccerworld::class)->name('soccerworld');
});

require __DIR__.'/auth.php';
