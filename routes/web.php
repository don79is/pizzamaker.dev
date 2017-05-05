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


Route::group(['prefix' => 'pizza'], function () {
    Route::get('/', [
        'uses' => 'DTPizzaController@index'
    ]);
    Route::get('/create/', [
        'uses' => 'DTPizzaController@create'
    ]);

    Route::post('/create/', [
        'as' => 'create.pizza',
        'uses' => 'DTPizzaController@store'
    ]);
    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', [
            'uses' => 'DTPizzaController@show'
        ]);
        Route::get('/edit', [
            'uses' => 'DTPizzaController@edit'
        ]);
        Route::post('/update', [
            'as' => 'update.pizza',
            'uses' => 'DTPizzaController@update'
        ]);


    });

});








Route::get('ingredients/form/', [
    'uses' => 'DTPizzaIngredientsController@form'
]);
Route::post('ingredients/form/', [
    'as' => 'create.ingredient',
    'uses' => 'DTPizzaIngredientsController@addIngredient'
]);

Route::get('base/form/', [
    'uses' => 'DTPizzaBaseController@form'
]);
Route::post('base/form/', [
    'as' => 'create.base',
    'uses' => 'DTPizzaBaseController@addBase'
]);

Route::get('cheese/form/', [
    'uses' => 'DTPizzaCheeseController@form'
]);
Route::post('cheese/form/', [
    'as' => 'create.cheese',
    'uses' => 'DTPizzaCheeseController@addCheese'
]);

