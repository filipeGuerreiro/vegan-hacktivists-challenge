<?php

use App\Http\Controllers\QuestionsController;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', 'App\Http\Controllers\QuestionsController@fetchAll');

Route::post('questions', 'App\Http\Controllers\QuestionsController@submit');

Route::get('questions/{id}', 'App\Http\Controllers\QuestionsController@fetch')
    ->whereNumber('id');

Route::post('questions/{id}', 'App\Http\Controllers\AnswersController@submit')
    ->whereNumber('id');
