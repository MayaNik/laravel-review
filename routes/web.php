<?php

use App\Http\Controllers\blog\PostController;
use Illuminate\Support\Facades\Route;




// function sayHi($name, $callback) {
//     $callback($name);
// }

// sayHi("Hamid", function($name) {
//     dd("Hi {$name}");
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    // dd('we are in about page');
    return view('blog.about');
    
});

// TODO: About and Contact pages
// TODO: HomeController 

Route::get('blog', [PostController::class, 'index']);
