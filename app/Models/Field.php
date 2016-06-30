<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
	/**
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Get the Type that owns the Field.
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
