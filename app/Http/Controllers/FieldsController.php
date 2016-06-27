<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Field;

class FieldsController extends Controller
{
	public function show($type_id)
	{
		$fields = Field::where('type_id', $type_id)->get();
		
		return view('fields.index', compact('fields'));
	}

	public function delete(Field $field)
	{
		$field->delete();

		return back();
	}
}
