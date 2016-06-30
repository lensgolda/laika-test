<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\{ Block, Type };

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
        $types = Type::all();
    	return view('blocks.edit', compact('block', 'types'));
    }

    public function delete(Block $block)
    {
    	$block->delete();

    	return back();
    }

    public function add(Request $request)
    {
        if($request->ajax()){
            
            $this->validate($request, [
                'name' => 'required|min:2',
                'type' => 'required|integer',
            ]);

            $block = new Block();
            $block->name = $request->input('name');
            $block->type_id = $request->input('type');
            
            $block->save();

            return response()->json(['status' => 200]);
        }
        return back();
    }

    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'block_name' => 'required',
            'type_id' => 'required',
        ]);
        
        $block = Block::findOrFail($id);
        $block->name = $request->input('block_name');
        $block->type_id = $request->input('type_id');
        $block->save();

        return redirect('/blocks');
    }
}
