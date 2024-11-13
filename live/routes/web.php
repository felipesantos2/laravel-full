<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/counter', App\Livewire\Counter::class);
