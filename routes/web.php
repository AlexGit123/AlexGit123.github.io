<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HBOController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/posts/{post}',  [PostsController::class, 'show']);

//Returns homepage
//Route::get('/', [WelcomeController::class, 'show']);

Route::get('/', function (){
    return view('welcome', [
        'articles' => App\Models\Article::take(3)->latest()->get()
        ]);
});

//Handles the articles and their routing
Route::get('/articles', [ArticlesController::class, 'index']);
Route::post('/articles/', [ArticlesController::class, 'store']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);


//Returns about me page
Route::get('/about', [AboutMeController::class, 'show']);

//Returns dashboard
Route::get('/dashboard', [DashboardController::class, 'show']);


//returns FAQ
Route::get('/faqs', [FAQController::class, 'show']);
Route::post('/faqs/', [FAQController::class, 'store']);
Route::get('/faqs/create', [FAQController::class, 'create']);

//returns HBO
Route::get('/HBO', [HBOController::class, 'show']);

//returns profession
Route::get('/profession', [ProfessionController::class, 'show']);



