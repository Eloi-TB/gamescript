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

    public function juegos()
    {
        return $this->hasMany('App\Models\Games');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Models\User');
    }
}
