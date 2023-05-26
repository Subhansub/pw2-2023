<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return view('index');
});

route::get('//movies', [MovieController::class, 'index']);

route::get('//genres', [GenresController::class, 'genres']);

route::get('//reviews', [ReviewController::class, 'reviews']);

Route::get('/users', function () {
    return view('users/index');
});