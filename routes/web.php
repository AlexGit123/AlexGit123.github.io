<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GradeController;
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

//Returns articles and CRUD implementations
Route::resource('/articles', ArticlesController::class);



//Returns about me page
Route::get('/about', [AboutMeController::class, 'show']);



Route::get('/dashboard', function (){

    return view('dashboard', [
        'grade' => App\Models\Grade::take()->all()
    ]);
});
//Returns dashboard
Route::get('/dashboard', [DashboardController::class, 'show']);


//returns FAQ and CRUD implementations
Route::resource('/faqs', FAQController::class);
//Route::get('/faqs/{faq}', [FAQController::class, 'show']);
//Route::get('/faqs/create', [FAQController::class, 'create']);
//Route::post('/faqs/', [FAQController::class, 'store']);
//Route::get('/faqs/{faq}/edit', [FAQController::class, 'edit']);
//Route::put('/faqs/{faq}', [FAQController::class, 'update']);
//Route::delete('/faqs/{faq}', [FAQController::class, 'delete']);

//returns HBO
Route::get('/HBO', [HBOController::class, 'show']);

//returns profession
Route::get('/profession', [ProfessionController::class, 'show']);


Route::resource('/grades', GradeController::class);

//Route::get('/grades', [GradeController::class, 'show']);
//Route::get('/grade/{grade}', [GradeController::class, 'show']);
//Route::get('/grades/create', [GradeController::class, 'create']);
//Route::post('/grades/', [GradeController::class, 'store']);
//Route::get('/grades/{grade}/edit', [GradeController::class, 'edit']);
//Route::put('/grades/{grade}', [GradeController::class, 'update']);
//Route::delete('/grades/{grade}', [GradeController::class, 'delete']);

