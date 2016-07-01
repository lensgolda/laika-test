<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\{ Field, Type };

class FieldsController extends Controller
{
	public function show(Type $type)
	{
		$fields = $type->fields;
		$type_id = $type->id;
		
		return view('fields.index', compact('fields' , 'type_id'));
	}

	public function delete(Field $field)
	{
		$field->delete();

		return back();
	}

	public function add(Request $request)
	{
		if($request->ajax() && $request->has('name')){
			
			$this->validate($request, [
                'name' => 'required|min:2',
                'type' => 'required|integer',
            ]);

			$field = new Field();
			$field->name = $request->input('name');
			$field->type_id = $request->input('type');
			$field->save();

            return response()->json(['status' => 200]);
        }
		return back();
	}
}
