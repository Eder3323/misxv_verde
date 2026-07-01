<?php

use App\Livewire\Boda;
use Illuminate\Support\Facades\Route;

$eventSlug = env('EVENT_SLUG', 'ashley');

Route::redirect('/', "/{$eventSlug}");

Route::prefix($eventSlug)->group(function () {
    Route::get('/', Boda::class)->name('home');
    Route::get('/mis-xv-ruby', Boda::class)->name('home.legacy');
});
