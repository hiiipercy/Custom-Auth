<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required',
        ]);

        $credential = $request->only('email','password');

        if(Auth::attempt($credential)){
            return redirect('dashboard');
        }else{
            return back()->withInput()->withErrors(['email' => 'Username or password is invalid!']);
        }
    }


    public function register_view(){
        return view('auth.register');
    }

    public function register_store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'min:6|required_with:confirm|same:confirm',
            'confirm' => 'min:6'
        ]);

        //save in users table 

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

       return redirect('login');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
