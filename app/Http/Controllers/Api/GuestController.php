<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\LoginRequest;
use App\Models\Hunter;
use App\Models\Review;
use App\Models\User;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index(Request $request){

        if ($request->has('search')){
            $hunters = Hunter::with('specializations')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(20);
        }
        else{
            $hunters =Hunter::with(['specializations', 'reviews'])->paginate(20);
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

    public function select(Request $request){
        $selectedValue = $request->input('specialization');
        
        $filteredHunters = Hunter::with(['specializations', 'sponsorships']);
    
        if($selectedValue){
            $filteredHunters->whereHas('specializations', function ($query) use ($selectedValue) {
                $query->where('name', 'LIKE', '%' . $selectedValue . '%');
            });
        }
    
        $hunters = $filteredHunters->get();
        
        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }
    
    

    public function filter(Request $request){
        $specialization = $request->input('specialization');
        $minReview = $request->input('min_review');
        $minAverage = $request->input('min_average');

        $query = Hunter::query();
        

        if($specialization){
            $query->whereHas('specializations', function ($subQuery1) use ($specialization){
                $subQuery1->where('name', $specialization);
            });
        }
        if($minReview){
            $query->has('reviews', '>=', $minReview);
        }
        if ($minAverage) {
            $query->whereHas('reviews', function ($subQuery) use ($minAverage) {
                $subQuery->select('user_id')
                ->groupBy('user_id')
                ->havingRaw('AVG(vote) >= ?', [$minAverage]);
            });
        }


        $query->with('sponsorships');

        $hunters = $query->get();

        return response()->json([
            'success' => true,
            'results' => $hunters,
        ]);
    }
    
    public function sponsored(){
        $currentDate = now();

        $sponsoredHunters = Hunter::whereHas('sponsorships', function ($query) use ($currentDate) {
            $query->where('sponsorship_end', '>', $currentDate);
        })->with('specializations')->get();
        

        return response()->json([
            'success' => true,    
            'results' => $sponsoredHunters
        ]);
    }

    public function show($user_id)
    {
        
        //$hunter->load('specializations')   Load per caricare la relazione, non ha bisogno del where(user_id) e va cambiato a show(Hunter $hunter)
        // https://laravel.com/docs/10.x/eloquent#primary-keys
        $hunters = Hunter::with(['reviews', 'specializations','user'])->where('user_id',$user_id)->first();

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
