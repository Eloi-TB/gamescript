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

    public function juegos()
    {
        return $this->hasMany('App\Models\Scores', 'game_id', 'id');
    }
}
