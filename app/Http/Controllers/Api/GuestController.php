<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\LoginRequest;
use App\Models\Hunter;
use App\Models\User;
use App\Models\Specialization;
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
            'success'=>true,
            'results'=>$hunters,
        ]);
    }

    public function specializations(){
        
        $specializations = Specialization::all();

        return response()->json([
            'success' => true,
            'results' => $specializations,
        ]);
    }

    public function filterBySpecialization(Request $request){

        $selectedValue = $request->input('specialization');
        if($selectedValue){
            $filteredHunters = Hunter::whereHas('specializations', function ($query) use ($selectedValue) {
                $query->where('name', 'LIKE', '%' . $selectedValue . '%');
            })->paginate(20);
        } else {
            $filteredHunters = Hunter::paginate(20);
        }
        
        return response()->json([
            'success' => true,
            'results' => $filteredHunters,
        ]);
    }

//     public function select(Request $request){
//     // Ottieni il valore del parametro "specialization" dalla richiesta
//     $selectedValue = $request->input('specialization');
    
//     // Effettua la query per ottenere la specializzazione
//     $specialization = Specialization::where('name', 'LIKE', '%' . $selectedValue . '%')->first();
    
//     if (!$specialization) {
//         return response()->json([
//             'success' => true,
//             'results' => [], // Nessuna specializzazione trovata
//         ]);
//     }
    
//     // Ora ottieni gli hunters associati a questa specializzazione
//     $hunters = $specialization->hunters;

    
//     return response()->json([
//         'success' => true,
//         'results' => $hunters,
//     ]);
    
// }


    

    public function show($user_id)
    {
        
        //$hunter->load('specializations')   Load per caricare la relazione, non ha bisogno del where(user_id) e va cambiato a show(Hunter $hunter)
        // https://laravel.com/docs/10.x/eloquent#primary-keys
        $hunters = Hunter::with(['specializations','user'])->where('user_id',$user_id)->first();

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
