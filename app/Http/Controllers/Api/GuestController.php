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
    
    public function index(Request $request){

        if ($request->has('search')){
            $hunters = Hunter::with('specializations')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(20);
        }
         else{
            $hunters =Hunter::with('specializations')->paginate(20);
        }
    
        return response()->json([
            'success'=> true,
            'results'=> $hunters
        ]);
    }
    

    // public function select(Request $request){

    //     $hunters = Hunter::with('specializations')->where('user_id',$user_id)->first();
        

    //     return response()->json([
    //         'success'=>true,
    //         'results'=>$hunter
    //     ]);

    // }

    public function show($user_id)
    {
        $hunters = Hunter::where('user_id',$user_id)->first();

        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }

    public function store (Request $request){
        $data = $request->all();

        $user = User::create($data);
        $hunter = new Hunter();
        $hunter->user_id = $user->id;
        $hunter->save();

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
