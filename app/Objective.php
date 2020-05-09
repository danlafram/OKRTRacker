<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'target_date', 'is_done'];

    /**
     * Get the Key Results for the Objective.
     */
    public function keyresults()
    {
        return $this->hasMany('App\KeyResult');
    }
}
