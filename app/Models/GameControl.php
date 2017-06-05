<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameControl extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'control_id',
    ];

    /**
     * Get the control.
     */
    public function controles_juegos()
    {
        return $this->belongsTo('App\Models\Game', 'game_id', 'id');
    }

    /**
     * Get the control.
     */
    public function controles()
    {
        return $this->belongsTo('App\Models\Control', 'control_id', 'id');
    }
}
