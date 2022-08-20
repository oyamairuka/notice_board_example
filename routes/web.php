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

Route::prefix('noticeboard')->group(function () {

    Route::get('top', function () {
        return view('top');
    });

    Route::get('words/{key}', 'App\Http\Controllers\WordsController@get');

    // Route::get('/register', function () {
    //     return view('register');
    // });

    // Route::post('/add', [App\Http\Controllers\UserController::class, 'register']);
    // Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
});
