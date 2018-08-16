<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('questions', 'Api\QuestionsController')
    ->only(['index', 'show']);

Route::get('quiz/new', 'Api\QuizController@new');
Route::post('quiz/answer', 'Api\QuizController@update');
