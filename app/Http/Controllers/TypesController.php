<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Type;

class TypesController extends Controller
{
    public function delete(Type $type)
	{
		$type->delete();

		return back();
	}

	public function add(Request $request)
	{
		if($request->ajax() && $request->has('name')){
			
			$this->validate($request, [
				'name' => 'required|min:2'
			]);

			$type = new Type();
			$type->name = $request->input('name');
			$type->save();

            return response()->json(['status' => 'OK']);
        }
		return back();
	}
}
