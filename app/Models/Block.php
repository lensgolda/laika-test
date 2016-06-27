<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
	/**
     * Get Type of Block this
     */
    public function type()
    {
    	return $this->hasOne('App\Models\Type');
    }

    /**
     * Get all of the fields for the block.
     */
    public function fields()
    {
        return $this->hasManyThrough('App\Models\Field', 'App\Models\Type');
    }
}
