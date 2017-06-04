<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//autentificación
use Illuminate\Support\Facades\Auth;

//modelos bases de datos
use App\Models\User;
use App\Models\Game;
use App\Models\Score;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestrala vista de juegos pasando el parametro de la vista parcial del juego.
     * Espera recoger el nombre del juego.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        //recoger el nombre del juego
        $partial = 'games.game-'.$name;

        //consulta eloquent para mostrar la tabla de puntuaciones de un juego
        //Recoger id juego actual
        $game = Game::where('name', 'LIKE', '%'.$name.'%')->get()->first();

//totes les puntuacions d'un usuari de un joc
        // $scores = Score::where('user_id',  Auth::user()->id)
        // ->where('game_id', $game->id)
        // ->with('usuarios')
        // ->with(['juegos' => function ($query) use ($name) {
        //     $query->where('name', 'LIKE', $name);
        // }])
        // ->orderBy('score', 'DESC')
        // ->take(10)
        // ->get();
//pasar nomes la consulta bàsica
        $scores = Score::where('game_id', $game->id)
        ->orderBy('score', 'DESC')
        ->take(10)
        ->get();

        //mejor puntuación personal
        $personal_score = Score::where('user_id',  Auth::user()->id)
        ->where('game_id', $game->id)
        ->orderBy('score', 'DESC')
        ->first();

        //enviar la vista con los valores anteriores
        return view('Game',
        ['game_name' => $name,
        'game_id' => $game,
        'partial' => $partial,
        'scores' => $scores,
        'personal_score' => $personal_score]);
    }

    /**
     * Muestrala vista de juegos pasando el parametro de la vista parcial del juego.
     * Espera recoger el nombre del juego.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function getGameTopScores($gameId)
    {

        $scores = Score::where('game_id', $gameId)
        ->orderBy('score', 'DESC')
        ->take(10)
        ->get();

        //enviar la vista con los valores anteriores
        //return response()->json($scores);

        //return ['scores' => $scores];

        return response()->json([$scores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $score = new Score;
      $score->create($request->all());
      //$score->save();
      echo $score;
    }

}
