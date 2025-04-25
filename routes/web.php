<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::post('/comments', [CommentController::class, 'store']);