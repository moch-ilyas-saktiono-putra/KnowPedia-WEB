<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Console\View\Components\Task;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']);

Route::get('/profile', [ArticleController::class,'index']);
Route::get('/write', [ArticleController::class,'create']);

Route::post('/write', [ArticleController::class,'store']);
Route::get('article/{id}', [ArticleController::class, 'show']);

Route::get('/edit/{id}', [ArticleController::class, 'edit']);
Route::patch('edit/{id}', [ArticleController::class, 'update']);

Route::delete('/delete/{id}', [ArticleController::class, 'destroy']);

// login Register
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register_form']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/search', function(){
    return view('search');
});

Route::get('/gettoknow', function(){
    return view('gettoknow');
});

