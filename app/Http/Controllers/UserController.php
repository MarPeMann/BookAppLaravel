<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function getLogin()
    {
      return view('auth.login');
    }

    public function getSignup()
    {
      return view('auth.signup');
    }

    public function postLogin(Request $request)
    {
      //echo "Login";
      $this->validate($request, [
        'name' => 'required',
        'password' => 'required'
      ]);

      if(Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
        return redirect()->route('profile', [Auth::user()->name]);
      } else {
        return redirect()->route('login');
      }

    }

    public function postSignup(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|unique:users|alpha_dash|max: 25',
        'password' => 'required|min:4',
        'email' => 'required|unique:users|email|max:255'
      ]);

      User::create([
        'name' => $request->input('name'),
        'password' => bcrypt($request->input('password')),
        'email' => $request->input('email')
      ]);

      return redirect()->route('profile');
    }

    public function getLogout()
    {
      Auth::logout();
      return redirect()->route('login');
    }

    public function getProfile($name)
    {
      $user = User::where('name', $name)->first();
      //$books = Auth::user()->books()->get();
      $books = $user->books()->get();
      //return view('profile', ['user' => Auth::user()]);
      return view('profile', ['user' => $user,'books' => $books]);
    }

    // public function getBooks()
    // {
    //   $books = Auth::user->books()->get();
    // }
}
