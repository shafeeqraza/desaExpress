<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DesaDispatchController;
use App\Http\Controllers\DesaDispatcherController;
use App\Http\Controllers\DesaLoaderController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoaderController;
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

Route::middleware("auth")->group(function () {

    // desa dispatcher routes
    Route::middleware(["isDesaDispatcher"])->group(function () {

        // disoatcher profile
        Route::get('desa/dispatcher/my-account', [DesaDispatchController::class, "profile"])->name("desa.dispatcher.profile");
        Route::post('desa/dispatcher/my-account', [DesaDispatchController::class, "updateProfile"]);

        Route::resource('/desa/dispatcher/dispatches', DesaDispatchController::class, [
            "names" => [
                "index" => "desa.dispatcher.dispatches",
                "show" => "desa.dispatcher.dispatches.show",
                "create" => "desa.dispatcher.dispatches.create",
                "store" => "desa.dispatcher.dispatches.store",
                "edit" => "desa.dispatcher.dispatches.edit",
                "update" => "desa.dispatcher.dispatches.update",
                "destroy" => "desa.dispatcher.dispatches.destroy"
            ]
        ]);
        Route::get('/desa/dispatcher/dispatches/{id}/map', [DesaDispatchController::class, "map"])->name("desa.dispatcher.dispatches.map");
    });

    // desa loader profile route
    Route::get('/desa/loader/my-account', [DesaLoaderController::class, "index"])->name("desa.loader.profile");
    Route::get('/desa/loader/my-loads', [DesaLoaderController::class, "myLoads"])->name("desa.loader.my-loads");
    Route::get('/desa/loader/loads', [DesaLoaderController::class, "loads"])->name("desa.loader.loads");
    Route::post('/desa/loader/load/book/{id}', [DesaLoaderController::class, "book"])->name("desa.loader.bookLoad");
    Route::get('/desa/loader/{id}/map', [DesaLoaderController::class, "map"])->name("desa.loader.map");
    Route::get('/desa/loader/{id}/show', [DesaLoaderController::class, "show"])->name("desa.loader.show");
    // Route::get('/update_profile')

    // uzair route
    // Route::post('/update_profile', [DesaDispatchController::class, "update"])->name('update_profile');
    // Route::patch('/update_data', [DesaDispatchController::class, "updateData"])->name('update_data');
    // Route::get('delete_data/{id}', [DesaDispatchController::class,"destroy_data"])->name('delete_data');



    Route::post("/logout", [AuthenticationController::class, "logout"])->name("logout");
});
