<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('livewire.hello-world');
// });

// Route::get('/todos', function () {
//     return view('livewire.hello-world');
// });

// Route::get('/counter', function () {
//     return view('livewire.counter');
// });

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);