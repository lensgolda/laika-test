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
	$types = App\Models\Type::all();
    return view('index', compact('types'));
});

Route::get('/type/{type_id}/fields', 'FieldsController@show');
Route::get('/type/delete/{type}', 'TypesController@delete');

Route::get('/field/delete/{field}', 'FieldsController@delete');

Route::get('/blocks', 'BlocksController@show');
Route::get('/blocks/{block}', 'BlocksController@edit');
Route::get('/block/delete/{block}', 'BlocksController@delete');