<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\UserAuthMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FormController::class, 'index']);



// 01. Request Validation
Route::post('/form', [FormController::class, 'formValidation']);


// 02 Request Redirect
Route::get('/home', [FormController::class, 'home']);
Route::get('/dashboard', function () {
    return "Welcome To Dashboard";
});

// 04. Route Middleware

Route::middleware([UserAuthMiddleware::class])->group(function(){
    Route::get('/profile', function () {
        // Profile route 
    });

    Route::get('/settings', function () {
        // Settings route 
    });
});


// 05. Controller

Route::resource('/products', ProductController::class);



// 06. Single Action Controller
Route::post('/contact', ContactController::class);


//  07. Resource Controller
Route::resource('posts', PostController::class);


// 08. Blade Template Engine
Route::get('/welcome', function(){
return view('welcome');
});