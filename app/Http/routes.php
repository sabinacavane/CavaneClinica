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

Route::get('/', function () {
    return view('/home');
});

Route::get('lissaneclinica','LissaneClinicaController@index');

Route::get('consultas','ConsultaController@index');

Route::get('disponibilidade',function(){
	return view('disponibilidade');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('consultas', 'ConsultaController@store');