<?php

use App\Http\Controllers\ConcertController as ConcertController;
use Illuminate\Support\Facades\Route;

Route::get('/concerts/{id}', [ConcertController::class, 'show']);
