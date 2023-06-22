<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Models\Genres;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/movies', MovieController::class);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('//genres', [GenresController::class, 'genres']);
    Route::get('/genres/create', [GenresController::class, 'create']);
    Route::post('/genres', [GenresController::class, 'store']);  
    Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);
    Route::get('/genres/{genres}/edit', [GenresController::class, 'edit']);
    Route::put('/genres/{genres}', [GenresController::class, 'update']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('//reviews', [ReviewController::class, 'reviews']);
    Route::get('/reviews/create', [ReviewController::class, 'create']);
    Route::post('/reviews', [ReviewController::class, 'store']);  
    Route::delete('/reviews/{reviews}', [ReviewController::class, 'destroy']);
    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
    Route::put('/reviews/{review}', [ReviewController::class, 'update']);
});

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);