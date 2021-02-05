<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;



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
        $data['password'] = bcrypt($request->password);

        User::create($data);

    }

}
