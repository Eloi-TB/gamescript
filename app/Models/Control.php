<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
    ];

    /**
     * Get the controls that the game has.
     */
    public function juego_control()
    {
        return $this->hasMany('App\Models\GameControl', 'control_id', 'id');
    }
}
