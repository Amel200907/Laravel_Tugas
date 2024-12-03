<?php

use Illuminate\Support\Facades\Route;

// Route Home
Route::get('/', function () {
    return view('home');
});

// Route Register
Route::get('/register', function () {
    return view('register');
});

// Route Welcome
Route::post('/welcome', function (\Illuminate\Http\Request $request) {
    $firstName = $request->input('first_name');
    $lastName = $request->input('last_name');
    return view('welcome', [
        'first_name' => $firstName,
        'last_name' => $lastName,
    ]);
});
