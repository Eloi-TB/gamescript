<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modelos bases de datos
use App\Models\User;
use App\Models\Game;
use App\Models\Score;

//Classes
use App\Dto\GameScores;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_games = Game::all();
        $gamesScoresArray = array();
        $games_scores = array();
        foreach ($total_games as $game)
        {
            $gameScores = new GameScores;
            $gameScores->setGameName($game->name);

            $scores = Score::where('game_id', $game->id)
            ->orderBy('score', 'DESC')
            ->take(10)
            ->get();
            $gameScores->setScores($scores);
            array_push($gamesScoresArray,$gameScores);
        }

        // echo implode(";",$games_scores);

        return view('Welcome',
        ['total' => $total_games,
        'gamesScoresArray' => $gamesScoresArray,
        ]);
    }

}
