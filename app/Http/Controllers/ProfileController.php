<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{  
   public function index(){
      return view('layout.module.index');
   }
    public function edit (){
       $user = Auth::user(); //check user auth
       return view('layout.profile.edit',compact('user'));
    }

    public function update(ProfileUpdateRequest $request){
      $user = User::find(auth()->user()->id);

      if($request->password){
         $user->update([
            'password' => Hash::make($request->input('password'))
        ]);
        toastr()->success('Profile updated successfully.');

      }else{
         $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
         toastr()->error('Password updated successfully.');
      }
     return redirect()->route('home');
     }
}
