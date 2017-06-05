<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the scores that hase the game.
     */
    public function puntuacione_juego()
    {
        return $this->hasMany('App\Models\Score', 'game_id', 'id');
    }

    /**
     * Get the controls that hase the game.
     */
    public function control_juego()
    {
        return $this->hasMany('App\Models\GameControl', 'game_id', 'id');
    }
}
