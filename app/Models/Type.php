<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Get fields related to Type.
     */
    public function fields()
    {
        return $this->hasMany('App\Models\Field');
    }

    /**
     * Get Blocks with Type this
     */
    public function blocks()
    {
        return $this->hasMany('App\Models\Block');
    }
}
