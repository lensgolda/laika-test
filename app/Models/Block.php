<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    /**
     * Get the Type that owns the Block.
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
