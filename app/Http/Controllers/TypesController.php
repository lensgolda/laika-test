<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Type;

class TypesController extends Controller
{
    public function delete(Type $type)
	{
		$type->delete();

		return back();
	}
}
