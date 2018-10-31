<?php

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

Route::resource('recipes', 'RecipeController');
Route::resource('ingredients', 'IngredientController');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('quizzes', 'QuizController');
Route::resource('questions', 'QuestionController');

//Route::get('questions/{id}','QuestionController@index')->name('questions.index');
Route::get('quizzes/{id}/question','QuestionController@index')->name('index1');
Route::get('questions/{id}/create' ,'QuestionController@create');
Route::post('questions/{id}/store', 'QuestionController@store');
Route::get('quizzes/{id}/appear','QuestionController@appear');
Route::post('quizzes/{id}/answer','QuestionController@answer');
Route::get('categories/index', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories/store', 'CategoryController@store');
Route::get('tree', 'CategoryController@tree');