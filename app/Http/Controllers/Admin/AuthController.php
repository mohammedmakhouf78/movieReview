<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
      $cred =$request->only('email','password');
      $user =User::where('email',$request->email)->first();
      //dd($user->hasRole('admin'));

      if($user->hasRole('admin'))
      {
         if(Auth::attempt($cred))
         {
           return redirect(route('admin.index'));
         }

      }
      Alert::error('error','You are not allowed');
      return redirect()->back();
    }


    public function logout(){
        Auth::logout();

       return redirect()->back();
    }
}
