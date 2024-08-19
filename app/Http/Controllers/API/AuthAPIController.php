<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthAPIController extends Controller
{
    public function create() {
       // return view('auth/signup');
    }

    public function signUp(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        $token = $user->createToken('myAppToken');
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response()->json($response, 201);
        // return redirect()->route('login');
    }

    public function login() {
        //return view('auth.login');
    }

    public function customLogin(Request $request) {

        // $request->validate([
        //     // 'email' => 'required|email|unique:App\Models\User',
        //     'password' => 'required|min:6',
        // ]);

        $credentials = [
            'email' => request('email'),
            'password' => request('password'),
        ];

        if(!Auth::attempt($credentials)) {
            return response('Bad Login', 401);
        }

        $user = User::where('email', request('email'))->first();
        $token = $user->createToken('myAppToken');
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response()->json($response, 201);
    }
    public function logout(Request $request) {
        Auth::logout();
        return response(['Message'=>'Log out'], 201); 
    }
}
