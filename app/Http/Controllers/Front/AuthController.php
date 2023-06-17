<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('front.pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->type == 'viewer') {
            $user->attachRole('viewer');
        } else if ($request->type == 'editor') {
            $user->attachRole('editor');
        }
        Alert::toast('Thank you for registering!!!', 'success');
        return redirect(route('home.loginPage'));
    }


    public function loginPage()
    {
        return view('front.pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only(['email', 'password']);
        if (Auth::attempt($data)) {
            Alert::toast('Thank you for Login!!!', 'success');
            return redirect(route('home.index'));
        }
        Alert::toast('Email or Password is Wrong!!!', 'error');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        Alert::toast('Thank you for Watching movies with us!!!', 'success');
        return redirect(route('home.loginPage'));
    }
}
