<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Block;
use App\Models\Type;

class BlocksController extends Controller
{
    public function show()
    {
    	$blocks = Block::all();
        $types = Type::all();
        
    	return view('blocks.index', compact('blocks', 'types'));
    }

    public function edit(Block $block)
    {
    	return view();
    }

    public function delete(Block $block)
    {
    	$block->delete();

    	return back();
    }

    public function add(Request $request)
    {
        if($request->ajax() && $request->has('name') && $request->has('type_id') && $request->input('type_id')){
            
            $this->validate($request, [
                'name' => 'required|min:2',
                'type_id' => 'required|integer',
            ]);

            $block = new Block();
            $block->name = $request->input('name');
            $block->type_id = $request->input('type_id');
            $block->save();

            return response()->json(['status' => 'OK']);
        }
        return back();
    }
}
