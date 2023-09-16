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
    
    public function index (Request $request){

        $query = Hunter::query();

        if ($request->has('search')) {
            $searchQuery = $request->input('search');
            Hunter::where('name', 'LIKE', '%' . $searchQuery . '%');
        }
    
        $hunters = $query->paginate(20);

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

    if (Auth::attempt($credentials)) {

        $user = Auth::user();
        
        $token = $user->createToken('MyToken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
        ]);
    } 
    else {
        return response()->json([
            'error' => 'Credenziali non valide'
        ],401);
    }
    }
}
