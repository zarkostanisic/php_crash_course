<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return 'Test';
});

Route::get('/xxx', function () {
    return 'Hello';
})->name('hello');

Route::get('/greet/{name}', function ($name) {
    return 'Hello, ' . $name;
});

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::fallback(function () {
    return "Still got somewhere!";
});
