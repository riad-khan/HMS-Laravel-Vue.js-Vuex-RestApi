<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request){
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($loginData)) {
            return response(['message'=>'Invalid credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }

    public function register(Request $request){

        $request->validate([
            'email' => 'required|unique:users|max:255',
            'name'=>'required',
            'password'=>'required|min:6|confirmed'
        ]);

        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $hashed = Hash::make($request->password, [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);

        $data['password'] = $hashed ;

        User::create($data);

    }

}
