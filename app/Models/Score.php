<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'user_id', 'score',
    ];

    /**
     * Get the game for the blog score.
     */
    public function juegos()
    {
        return $this->belongsTo('App\Models\Game', 'game_id', 'id');
    }

    /**
     * Get the user for the blog score.
     */
    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
