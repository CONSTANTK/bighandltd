<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 //   Route::get('home', [\App\Http\Controllers\Front\WelcomeController::class,'welcome'])->name('welcome');
    Route::get('about-us', [\App\Http\Controllers\Front\AboutController::class,'about'])->name('front.about');

    Route::get('home2', [\App\Http\Controllers\Front\Home2Controller::class,'home2'])->name('front.home2');

    Route::get('home', [\App\Http\Controllers\Front\Home1Controller::class,'home1'])->name('front.welcome');

    Route::get('contact', [\App\Http\Controllers\Front\ContactController::class,'contact'])->name('front.contact');

