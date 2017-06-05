<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//autentificación
use Illuminate\Support\Facades\Auth;

//modelos bases de datos
use App\Models\User;
use App\Models\Game;
use App\Models\Score;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('home',
        ['gamesNames' => $games]);
    }

}
