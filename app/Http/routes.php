<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('', array('as' => 'login', 'uses' => 'LoginController@index'));
    Route::get('/', array('as' => 'login', 'uses' => 'LoginController@index'));

    Route::group(['prefix' => '/'], function() {
        Route::get('logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
        Route::get('login', array('as' => 'login', 'uses' => 'LoginController@index'));
        Route::post('login', array('as' => 'login', 'uses' => 'LoginController@login'));
        Route::post('cadastrar', array('as' => 'cadastrar', 'uses' => 'LoginController@register'));
        Route::get('', array('as' => 'login', 'uses' => 'LoginController@index'));
        Route::get('home/{user_id}', array('as' => 'home', 'uses' => 'MateriasController@index'));
        Route::get('materia/{materia_id}', array('as' => 'materia', 'uses' => 'MateriasController@atividade'));
        Route::get('atividade/{atividade_id}', array('as' => 'atividade', 'uses' => 'AtividadesController@index'));
        Route::post('atividade/{atividade_id}', array('as' => 'atividade', 'uses' => 'AtividadesController@cadastrarAtividade'));
    });
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::group(['middleware' => 'web'], function () {
    //Route::auth();

    Route::group(['prefix' => 'materias'], function() {
        Route::get('', array('as' => 'materias', 'uses' => 'MateriasController@index'));
       Route::get('/{user_id}', array('as' => 'materias', 'uses' => 'MateriasController@index'));
    });
});*/
/*
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
*/