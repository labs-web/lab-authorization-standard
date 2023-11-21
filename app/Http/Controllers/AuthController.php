<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(){
        return view('home');
    }
    public function login(LoginRequest $request){
      $credentials = $request->validated();
      if(Auth::attempt($credentials)){
          $request->session()->regenerate();
      return redirect()->intended(route('main'));
      }
      return to_route('login')->withErrors([
        'email' => 'email invalide'
      ])->onlyInput('email');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
