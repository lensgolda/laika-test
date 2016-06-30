<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];
    
	/**
     * Get the Type of Block
     */
    public function type()
    {
    	return $this->belongsTo('App\Models\Type');
    }

    /**
     * Get all of the Fields for the Block.
     */
    public function fields()
    {
        return $this->hasManyThrough('App\Models\Field', 'App\Models\Type');
    }
}
