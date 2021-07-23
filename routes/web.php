<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('guest')->group(function () {
    Route::get('/register', [HomeController::class, "register"])->name("register");
    Route::post('/register', [AuthenticationController::class, "register"])->name("register.post");

    Route::get('/login', [HomeController::class, "login"])->name("login");
    Route::post('/login', [AuthenticationController::class, "login"])->name("login.post");

    Route::get('/forgot-password', [HomeController::class, "forgotPassword"])->name("forgot-password");
    Route::post('/forgot-password', [AuthenticationController::class, "forgotPassword"])->name("forgot-password.post");

    Route::get('/reset-password/{token}', [HomeController::class, "resetPassword"])->name('password.reset');
    Route::post('/reset-password/{token}', [AuthenticationController::class, "resetPassword"]);
});



/*
-------------------------------------------------------------------------------------------------------------------------------------------
**************************            AUTHENTICATED ROUTES            ***********************************
-------------------------------------------------------------------------------------------------------------------------------------------
*/

Route::middleware("auth")->group(function() {
    Route::get('/my-account', [ProfileController::class, "index"])->name("my-account");
    Route::post("/logout", [AuthenticationController::class, "logout"])->name("logout");
});
