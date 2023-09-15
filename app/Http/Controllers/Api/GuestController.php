<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\LoginRequest;
use App\Models\Hunter;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    
    public function index (){

        $hunters = Hunter::all();

        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }

    public function show(string $slug)
    {
        $hunters = Hunter::all()->findOrFail($slug);

        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }

    public function signIn (Request $request){
        $data = $request->all();

        $user = User::create($data);

        return response()->json([
            'success' => true
        ]);
    }

    public function login (LoginRequest $request){


        $credentials = $request->validated();


    // Tentativo di autenticazione dell'utente
    if (Auth::attempt($credentials)) {
        // Autenticazione riuscita
        $user = Auth::user();
        
        // Genera un token di accesso
        $token = $user->createToken('MyToken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
        ]);
    } 
    else {
        // Autenticazione fallita
        return response()->json([
            'error' => 'Credenziali non valide'
        ],401);
    }
    }
}
