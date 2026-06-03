<?php

use App\Livewire\Boda;
use Illuminate\Support\Facades\Route;

Route::get('/', Boda::class)->name('home');
Route::get('/mis-xv-ruby', Boda::class)->name('home.legacy');
