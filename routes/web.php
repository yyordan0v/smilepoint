<?php

declare(strict_types=1);

use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', Home::class);
