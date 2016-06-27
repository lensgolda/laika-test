<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Block;

class BlocksController extends Controller
{
    public function show()
    {
    	$blocks = Block::all();

    	return view('blocks.index', compact('blocks'));
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
