<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use \App\Models\User;

use \App\Http\Controllers\AuthController;


class AuthController extends Controller
{



    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'role_id' => 'required',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create(array_merge(
            $validatedData,
            ['password' => bcrypt($request->password)]
        ));

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('username', $request->username)->first();
        $token = $user->createToken('authToken')->plainTextToken ;

        $user->remember_token = $token ;
        $user->save();

        return response()->json(['token' => $token], 200);
    }



    public function checkauth(Request $request)
    {

        //var_dump($request);
        //return $request;

        $credentials = $request->validate([
            'username' => 'string',
            'password' => 'string',
            'token' => 'string',
        ]);


        if ( 
            Auth::attempt([
                'username' => $credentials['username'], 
                'password' => $credentials['password'] 
            ])
        ) {

            return response()->json(['success' => true ]);

        } else {
           return response()->json(['success' => false ]);

        }

    }



    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out']);
    }


}
