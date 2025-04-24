<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     // return view('welcome');
// });



Route::get('/about', function () {
    $name = "Nichuks";
    echo "<h1>" . $name;
    return view('test', ['variable' => "my variable text value"]);
});

Route::get('/posts', [PostController::class, 'index']);
