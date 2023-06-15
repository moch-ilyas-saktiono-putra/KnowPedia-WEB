<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GetToKnowController;
use App\Http\Controllers\MainArticleController;
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

// Dashboard
Route::get('/', [MainArticleController::class, 'index']);


// Tampilan Profile User
Route::get('/profile', [ArticleController::class,'index']);

// Tampilan Create Artikel
Route::get('/write', [ArticleController::class,'create']);

// POST Artikel
Route::post('/write', [ArticleController::class,'store']);

// Tampilan Detail Artikel 
Route::get('article/{id}', [ArticleController::class, 'show']);

// Tampilan Get To Know
Route::get('/gtk', [GetToKnowController::class, 'index']);

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
