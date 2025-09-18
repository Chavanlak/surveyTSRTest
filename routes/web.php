<?php

use App\Http\Controllers\QuestiontypeController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testSurvey',[QuestionController::class,'getAllQuestions']);
Route::get('/question/{questionTypeId}', [QuestionController::class, 'getQuestion']);
Route::get('/t/{questionTypeId}',[QuestionController::class,'getQuestionWithQuestionType']);
// Route::get('/survey', [QuestionController::class, 'getQuestionWithQuestionType']);

Route::get('/questions', [QuestionController::class, 'showQuestions']);