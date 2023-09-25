<?php

namespace App\Http\Controllers\Api;


use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $data = $request->all();

        $validation = Validator::make($data,
            [
                'name' => 'required',
                'vote' => 'required',
                'review' => 'required',
            ]);

        if ( $validation->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validation->errors(),
            ]);
        }

        $review = Review::create($data);
        return response()->json([
            'success' => true
        ]);

    }

    public function show(Rewiew $review){

    }
}
