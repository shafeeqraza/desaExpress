<?php

use App\Http\Controllers\HomeController;
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

/*
-------------------------------------------------------------------------------------------------------------------------------------------
**************************            PUBLIC ROUTES            ***********************************
-------------------------------------------------------------------------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/register', [HomeController::class, "register"])->name("register");
Route::get('/login', [HomeController::class, "login"])->name("login");
Route::get('/forgot-password', [HomeController::class, "forgotPassword"])->name("forgot-password");


/*
-------------------------------------------------------------------------------------------------------------------------------------------
**************************            AUTHENTICATED ROUTES            ***********************************
-------------------------------------------------------------------------------------------------------------------------------------------
*/

Route::get('/dashboard', function() {
    dd("dashbaord");
})->name("dashbaord")->middleware("auth");
