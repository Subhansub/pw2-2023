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
route::get('/movies/create', [MovieController::class, 'create']);
route::post('/movies', [MovieController::class, 'store']);  
route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

route::get('//genres', [GenresController::class, 'genres']);
route::get('/genres/create', [GenresController::class, 'create']);
route::post('/genres', [GenresController::class, 'store']);  
route::delete('/genres/{genres}', [GenresController::class, 'destroy']);

route::get('//reviews', [ReviewController::class, 'reviews']);
route::get('/reviews/create', [ReviewController::class, 'create']);
route::post('/reviews', [ReviewController::class, 'store']);  
route::delete('/reviews/{reviews}', [ReviewController::class, 'destroy']);

Route::get('/users', function () {
    return view('users/index');
});