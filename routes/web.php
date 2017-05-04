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
    return view('main');
});

Route::get('cheese/form/', [
    'uses' => 'DTPizzaCheeseController@form'
]);
Route::post('cheese/form/', [
    'as' => 'create.cheese',
    'uses' => 'DTPizzaCheeseController@addCheese'
]);

Route::get('pizza/form/', [
    'uses' => 'DTPizzaController@form'
]);
Route::post('pizza/form/', [
    'as' => 'create.pizza',
    'uses' => 'DTPizzaController@create'
]);

Route::get('ingredients/form/', [
    'uses' => 'DTPizzaIngredientsController@form'
]);
Route::post('ingredients/form/', [
    'as' => 'create.ingredient',
    'uses' => 'DTPizzaIngredientsController@addIngredient'
]);
Route::get('/pizza', [
    'uses' => 'DTPizzaController@index'
]);
Route::get('base/form/', [
    'uses' => 'DTPizzaBaseController@form'
]);
Route::post('base/form/', [
    'as' => 'create.base',
    'uses' => 'DTPizzaBaseController@addBase'
]);

