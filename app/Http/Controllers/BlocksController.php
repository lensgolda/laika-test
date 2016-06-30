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
    	dd($block->id);
    }

    public function delete(Block $block)
    {
    	$block->delete();

    	return back();
    }
}
