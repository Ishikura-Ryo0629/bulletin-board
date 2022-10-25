<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AnimationController;

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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'ThreadController@index');
    Route::get('/threads/create', 'ThreadController@create');
    Route::get('/threads/{thread}', 'ThreadController@show');
    Route::post('/threads/create', 'ThreadController@store');
    Route::post('/threads/{thread}', 'CommentController@store');
    
    Route::get('/threads/{thread}/favorite', 'FavoriteController@store');
    Route::get('threads/{thread}/unfavorite', 'FavoriteController@destroy');
    Route::get('/threads/prefecture', 'PrefectureController@index');
});

Auth::routes();
