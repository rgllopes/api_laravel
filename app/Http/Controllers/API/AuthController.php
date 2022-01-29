<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // Save new user after pass validation
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Add access roles
        $user->roles()->attach($request->roles);

        return response()->json([
            'res'   => true,
            'msg'   => 'Usuario registrado com sucesso!'
        ], 200);
    }

    public function login(LoginRequest $request)
    {
        // Lookink for user received in request and keep un $user variable
        // Inside "with", we put the relationship name between tables users ans roles catch in Model/User.php
        $user = User::with('roles')->where('email', $request->email)->first();

        // If user not found or password not match
        if (! $user || ! Hash::check($request->password, $user->password)) {
            // throw ValidationException::withMessages([
            return response()->json([
                'res' => true,
                'msg' => ['Email e/ou senha estão incorretos!'],
            ]);
        }

        // If auth right create token
        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'res'       => true,
            'msg'       => [
                'token' => $token,
                'user'  => $user,
            ]
            
        ], 200);
    }

    public function logout(Request $request)
    {
        // Revoke the token thet was used to authenticate
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'res'       => true,
            'msg'       => "Logout realizado com sucesso!",
        ], 200);
    }
}
