<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\User;
use Auth;
use App\Http\Controllers\HttpClient;
use App\Mail\Password as PasswordEmail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.passwords.email');
    }
    public function Showreset()
    {
        return view('auth.passwords.reset');
    }
    public function sendPassword(Request $request)
    {
      $pass = str_random(8);

      $users = User::where('email',$request->input('email'))->get();
      if (count($users)>0) {
        Mail::to($request->input('email'))->send(new PasswordEmail($pass));
        $this->UpdateUsuario($request->input('email'),$pass);
        return view('auth.passwords.email')->with('status', 'Hem enviat un email amb la nova contrasenya.');
      }else{
        return view('auth.passwords.email')->with('error', 'El email no existeix.');

      }

      //  return view('auth.passwords.email')->with('error', 'Credencials incorrectes');
    }
    public function UpdateUsuario($email,$pass)
    {
      $password = User::where('email', $email)->first();
      $password->password = Hash::make($pass);
      $password->save();
    }


}
