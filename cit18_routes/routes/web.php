<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1> Hello, Laravel! </h1>';
});

Route::get('/greet', [GreetController::class, 'showGreeting']);

