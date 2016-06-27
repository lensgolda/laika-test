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

/**
 * Index route
 */
Route::get('/', function () {
	$types = App\Models\Type::all();
    return view('index', compact('types'));
});

/**
 * Types
 */
Route::get('/type/{type_id}/fields', 'FieldsController@show');
Route::get('/type/delete/{type}', 'TypesController@delete');

/**
 * Fields
 */
Route::get('/field/delete/{field}', 'FieldsController@delete');

/**
 * Blocks
 */
Route::get('/blocks', 'BlocksController@show');
Route::get('/blocks/{block}', 'BlocksController@edit');
Route::get('/block/delete/{block}', 'BlocksController@delete');

/**
 * or through Route (style) based without Controller@action
 */

Route::get('/type/{type_id}/fields', function ($type_id) {
	$fields = Field::where('type_id', $type_id)->get();	
	return view('fields.index', compact('fields'));
});

Route::delete('/type/delete/{type}', function (App\Models\Type $type) {
	$type->delete();
	return back();
});


Route::get('/field/delete/{field}', function (App\Models\Field $field) {
	$field->delete();
	return back();
});

Route::get('/blocks', function () {
	$blocks = Block::all();
    return view('blocks.index', compact('blocks'));
});

Route::get('/blocks/{block}', function (App\Models\Block $block) {
	// $block->update();
});

Route::delete('/block/delete/{block}', function (App\Models\Block $block) {
	$block->delete();
	return back();
});

