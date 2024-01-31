<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

// 2|Q0rUI3vi2whyEiM2FgKXz0qhOiPLDrT1PdeIMZN1d9b7c50

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:4',
        ]);

        if(Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            $token = $user->createToken('account')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 200);


        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function register(AuthRequest $request) {
        $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['user' => $user], 201);
    }

    public function logout() {
        $user = Auth::user();

        $user->tokens()->delete();

        return response()->json(['message' => 'Deslogou'], 200);
    }
}
