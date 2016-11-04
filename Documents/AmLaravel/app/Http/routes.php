<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as'=>'/', 'uses'=>'WelcomeController@index'));
Route::get('indice', array('as'=>'indice', 'uses'=>'WelcomeController@indice'));
Route::post('saveRegister', array('as'=>'saveRegister', 'uses'=>'WelcomeController@saveRegister'));
Route::get('index', array('as'=>'index', 'uses'=>'HomeController@index'));

//Social Login
Route::get('/loginFB/{provider?}',['uses' => 'HomeController@redirect', 'as'   => 'auth.redirect/{provider?}']);
Route::get('/home',['uses' => 'HomeController@callback', 'as'   => 'auth.callback']);

//Usuario
Route::post('saveUser', array('as'=>'saveUser', 'uses'=>'UserController@saveUser'));
Route::get('userProfile', array('as'=>'userProfile', 'uses'=>'UserController@userProfile'));

//Logout
Route::get('logout', function() {
	Session::flush();
    Auth::logout();
    return Redirect::route('/');
});

//LIGA PARA AMIGO
Route::get('/{string?}', array('as'=>'/{string?}', 'uses'=>'WelcomeController@index'));



